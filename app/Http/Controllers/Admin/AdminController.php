<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ApplicationForm;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function check(Request $request){
         //Validate Inputs
         $request->validate([
            'email'=>'required|email|exists:admins,email',
            'password'=>'required|min:5|max:30'
         ],[
             'email.exists'=>'This email is not exists in admins table'
         ]);

         $creds = $request->only('email','password');

         if( Auth::guard('admin')->attempt($creds) ){
             return redirect()->route('admin.home');
         }else{
             return redirect()->route('admin.login')->with('fail','Incorrect credentials');
         }
    }

    function logout(){
        Auth::guard('admin')->logout();
        return redirect('/');
    }
    //applican test
    public function test(){
        $application_data=ApplicationForm::get();
        return view('dashboard.admin.test',compact('application_data'));
    }
        // ---------------Active-----------------
        public function Active($id){
            ApplicationForm::findOrFail($id)->update(['status' => 'Approved',]);
           return redirect()->back();
            }
        // -----------------deactive----------------------
        public function Deactive($id){
            ApplicationForm::findOrFail($id)->update(['status' => 'Proccessing',]); 
            return redirect()->back();
        }
           //delete
    public function delete($id){
        ApplicationForm::find($id)->delete();
        return redirect()->back()
        ->with('success','employee deleted successfully');
    }

}
