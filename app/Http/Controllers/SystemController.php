<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteInformation;

class SystemController extends Controller
{
    private $system;
    public function __construct(SiteInformation $system)
    {
        $this->system = $system;
        $this->middleware('auth');
    }

    public function index()
    {
        $system = $this->system->first();
        return view('dashboard.system.index', compact('system'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'sitename' => 'required|string|max:255',
            'sitedescription' => 'required|string|max:255',
            'sitephonenumber' => 'required',
            'siteaddress' => 'required',
            'siteemail' => 'required',
            'siteinstagram' => 'required',
            'sitefacebook' => 'required',
            'siteyoutube' => 'required',
            'sitetelegram' => 'required',
            'sitelogo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'sitelogofooter' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        // dd($request->all());
        $system = $this->system->findOrFail('1');
        // image upload to public/images folder and store image name to database students table
        if ($request->hasFile('sitelogo')) {
            if (!empty($system->site_logo)) {
                $file_path = 'uploads/' . $system->site_logo;
                unlink($file_path);
            }
            $image = $request->file('sitelogo');
            $logoname = time() . '-logo.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads');
            $image->move($destinationPath, $logoname);
        }
        // image upload to public/images folder and store image name to database students table
        if ($request->hasFile('sitelogofooter')) {
            if (!empty($system->site_logo_footer)) {
                $file_path = 'uploads/' . $system->site_logo_footer;
                unlink($file_path);
            }
            $image = $request->file('sitelogofooter');
            $logofootername = time() . '-footer.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads');
            $image->move($destinationPath, $logofootername);
        }
        $system->update([
            'site_name' => $request->sitename,
            'site_logo' => $logoname ?? $system->site_logo,
            'site_logo_footer' => $logofootername ?? $system->site_logo_footer,
            'site_email' => $request->siteemail,
            'site_phone' => str_replace(["(", ")", "-", " "], "", $request->sitephonenumber),
            'site_address' => $request->siteaddress,
            'site_description' => $request->sitedescription,
            'site_facebook' => $request->sitefacebook,
            'site_instagram' => $request->siteinstagram,
            'site_youtube' => $request->siteyoutube,
            'site_telegram' => $request->sitetelegram,
        ]);
        return redirect()->route('dashboard.system.index')->with('success', 'System updated successfully');
    }
}
