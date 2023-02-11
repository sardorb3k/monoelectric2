<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        $information = User::findOrFail($id);
        return view('dashboard.profile.show', compact('information'));
    }
    // update
    public function update(Request $request)
    {
        try {

            // dd($request);
            // Validate request
            // Get profile by id
            $student = User::findOrFail($request->id);
            if ($request->update_action == 'personal') {
                $request->validate([
                    'firstname' => 'required',
                    'lastname' => 'required',
                    'phone' => 'required',
                    'update_action' => 'required',
                    'id' => 'required',
                ]);
                // Update profile information
                $student->update([
                    'firstname' => $request->firstname,
                    'lastname' => $request->lastname,
                    'phone' => str_replace(["(", ")", "-", " ", "+"], "", $request->phone),
                ]);
            } elseif ($request->update_action == 'password') {

                $req = $request->validate([
                    'password' => 'required|string|min:6|confirmed',
                ]);

                $student->update([
                    'password' => Hash::make($req['password']),
                ]);
            }
            return redirect()->route('dashboard.profile.index')->with('success', 'updated successfully');
        } catch (\Exception $e) {
            dd($e);
            return redirect()->route('dashboard.products.index')->with('error', 'products not updated.');
        }
    }
}
