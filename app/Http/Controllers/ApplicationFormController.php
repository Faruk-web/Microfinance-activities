<?php

namespace App\Http\Controllers;
use App\Models\ApplicationForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class ApplicationFormController extends Controller
{
    //Application
    public function Application(){
        return view('form.index');
    }
    public function Application_store(Request $request)
    {
// dd($request);
        $application = new ApplicationForm;

        $applicant_id = ApplicationForm::count('id');
        $update_count = $applicant_id + 1;
        $applicant_number = "S".rand(1000, 9999).$update_count;
        $application->applicant_number = $applicant_number;
        $application->status ='Proccessing';
        $application->status_st  = '0';
        $application->centerName = $request->input('centerName');
        $application->subcenterName = $request->input('subcenterName');
        $application->district = $request->input('district');
        $application->upazila = $request->input('upazila');
        $application->union = $request->input('union');
        $application->villageArea = $request->input('villageArea');
        $application->applicationyear = $request->input('applicationyear');
        $application->session = $request->input('session');
        $application->english_name = $request->input('english_name');
        $application->name_bn = $request->input('name_bn');
        $application->nid = $request->input('nid');
        $application->day = $request->input('day');
        $application->month = $request->input('month');
        $application->year = $request->input('year');
        $application->religion = $request->input('religion');
        $application->education_qualification = $request->input('education_qualification');
        $application->mobile = $request->input('mobile');
        $application->guardian_name = $request->input('guardian_name');
        $application->mothers_name = $request->input('mothers_name');
        $application->guardianmobile = $request->input('guardianmobile');
        $application->marital_status = $request->input('marital_status');
        $application->occupation = $request->input('occupation');
        
        $application->amount = $request->input('amount');
        $application->costamount = $request->input('costamount');
        $application->sector = $request->input('sector');
        $application->amount_cost = $request->input('amount_cost');
        $application->confirm = $request->input('confirm');
        $application->email = $request->input('email');     
        if($request->hasfile('photo'))
        {
            $file = $request->file('photo');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/image/', $filename);
            $application->photo = $filename;
        
        }
        if($request->hasfile('signature'))
        {
            $file = $request->file('signature');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/image/', $filename);
            $application->signature = $filename;
        }
        $application->save();
        return redirect()->back()->with('status','Application Form Added Successfully');
    }
}
