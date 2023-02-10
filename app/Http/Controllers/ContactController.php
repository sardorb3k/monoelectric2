<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\DealerRequest;
use App\Models\JobsApplication;
use App\Models\SiteInformation;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $information = SiteInformation::first();
        return view('contact.contact',compact('information'));
    }
    public function jobapplication()
    {
        $information = SiteInformation::first();
        return view('contact.jobapplication');
    }
    public function dealerrequest()
    {
        $information = SiteInformation::first();
        return view('contact.dealerrequest');
    }

    public function contact_store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'subject' => 'required',
                'phonenumber' => 'required',
                'message' => 'required',
            ]);
            Contact::create([
                'fullname' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'phone' => $request->phonenumber,
                'message' => $request->message,
            ]);
            // PDF
            return redirect()->route('contact')->with('error', 'Done ');
        } catch (\Exception $e) {
            return redirect()->route('contact')->with('error', 'Error creating page ');
        }
    }
    public function jobs_store(Request $request)
    {
        // return dd($request);
        try {
            $request->validate([
                'identificationnumber' => 'required',
                'firstname' => 'required',
                'lastname' => 'required',
                'birthdate' => 'required',
                'gender' => 'required',
                'married' => 'required',
                'license' => 'required',
                'email' => 'required',
                'phonenumber' => 'required',
                'message' => 'required',
                'imageupload' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            if ($request->hasFile('upload')) {
                $image = $request->file('upload');
                $name = time() .'.'. $image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads');
                $image->move($destinationPath, $name);
            }
            JobsApplication::create([
                'tcidnumber' => $request->identificationnumber,
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'birthdate' => $request->birthdate,
                'gender' => $request->gender,
                'married' => $request->married,
                'license' => $request->license,
                'email' => $request->email,
                'phone' => $request->phonenumber,
                'message' => $request->message,
                'file' => $name,
            ]);
            // PDF
            return redirect()->route('jobapplication')->with('error', 'Done ');
        } catch (\Exception $e) {

            return redirect()->route('jobapplication')->with('error', 'Error creating page ');
        }
    }
    public function dealer_store(Request $request)
    {
        // return dd($request);
        try {
            $request->validate([
                'dealername' => 'required',
                'address' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'gsm' => 'required',
                'faks' => 'required',
                'taxadministration' => 'required',
                'taxnumber' => 'required',
                'website' => 'required',
                'shippingaddress' => 'required',
                'addresspayment' => 'required',
            ]);
            DealerRequest::create([
                'dealername' => $request->dealername,
                'address' => $request->address,
                'email' => $request->email,
                'phone' => $request->phone,
                'gsm' => $request->gsm,
                'faks' => $request->faks,
                'taxadministration' => $request->taxadministration,
                'taxnumber' => $request->taxnumber,
                'website' => $request->website,
                'shippingaddress' => $request->shippingaddress,
                'addresspayment' => $request->addresspayment,
            ]);
            // PDF
            return redirect()->route('dealrerequest')->with('error', 'Done ');
        } catch (\Exception $e) {
            return redirect()->route('dealrerequest')->with('error', 'Error ');
        }
    }



    // Dashboard

    public function dashboard_contact()
    {
        $contact = Contact::paginate(10);
        return view('dashboard.contact.index',compact('contact'));
    }
    public function dashboard_contact_show($id)
    {
        $contact = Contact::where('id', $id)->first();
        return view('dashboard.contact.show',compact('contact'));
    }
    // dashboard_dealerrequest_destroy 
    public function dashboard_contact_destroy(Request $request, $id){
        try {
            $page = Contact::find($id);
            $page->delete();
            return redirect()->route('dashboard.contact.index')->with('success', 'deleted successfully.');
        }catch (\Exception $e) {
            return redirect()->route('dashboard.contact.index')->with('error', 'Error ');
        }
    }
    // Jobs application

    public function dashboard_jobsapplication()
    {
        $jobs = JobsApplication::paginate(10);
        return view('dashboard.jobsapplication.index',compact('jobs'));
    }
    public function dashboard_jobsapplication_show($id)
    {
        $jobs = JobsApplication::where('id', $id)->first();
        return view('dashboard.jobsapplication.show',compact('jobs'));
    }
    // dashboard_dealerrequest_destroy 
    public function dashboard_jobsapplication_destroy(Request $request, $id){
        try {
            $page = JobsApplication::find($id);
            $page->delete();
            return redirect()->route('dashboard.jobsapplication.index')->with('success', 'deleted successfully.');
        }catch (\Exception $e) {
            return redirect()->route('dashboard.jobsapplication.index')->with('error', 'Error  ');
        }
    }

    public function dashboard_dealerrequest()
    {
        $dealerrequest = DealerRequest::paginate(10);
        return view('dashboard.dealerrequest.index',compact('dealerrequest'));
    }
    public function dashboard_dealerrequest_show($id)
    {
        $dealerrequest = DealerRequest::where('id', $id)->first();
        return view('dashboard.dealerrequest.show',compact('dealerrequest'));
    }
    // dashboard_dealerrequest_destroy 
    public function dashboard_dealerrequest_destroy(Request $request, $id){
        try {
            $page = DealerRequest::find($id);
            $page->delete();
            return redirect()->route('dashboard.dealerrequest.index')->with('success', 'deleted successfully.');
        }catch (\Exception $e) {
            return redirect()->route('dashboard.dealerrequest.index')->with('error', 'Error ');
        }
    }
}
