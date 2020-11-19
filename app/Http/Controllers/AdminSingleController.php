<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Session;
use Illuminate\Support\Facades\Hash;
use App\Setting;
use App\Lives;
class AdminSingleController extends Controller
{
    public function _construct(){
      $this->middleware('auth:admin');
      $this->middleware('role:supervisor');
    }
    public function updateSiteSettings(Request $request){

         $this->validate($request,[
           'name'=>'required',
           'site_email'=>'required',
           'phone'=>'required',
           'address'=>'required',
        ]);


        $settings = Setting::findorfail(1);
        $logo=$request->logo;
        if($logo){
            $fich=time().$logo->getClientOriginalName();
            $logo->move(public_path('img/'),$fich);
        }else{
            $fich=$settings->logo;
        }

         $settings->site_name = $request->name;
         $settings->site_email = $request->site_email;
         $settings->address = $request->address;
         $settings->phone = $request->phone;
         $settings->fax = $request->fax;
         $settings->youtube_link = $request->youtube_link;
         $settings->facebook_link = $request->facebook_link;
         $settings->instagram_link = $request->instagram_link ;
         $settings->logo = $fich;
         $settings->save();
         Session::flash('success','تم تغيير الإعدادات بنجاح');
         return redirect()->back();
  }
  public function updateAccount(Request $request){
    //dd($request);
    $this->validate($request,[
      'name'=>'required',
      'email'=>'required',
   ]);

   $admin = auth('admin')->user();
   $admin->name = $request->name;
   $admin->email = $request->email;
   $admin->password = $request->password ? Hash::make($request->password) : $admin->password;
   $admin->save();
    Session::flash('success','تم تعديل الحساب بنجاح');
    return redirect()->back();
  }
  public function live(){
    $live = Lives::first();
    return view('admin.live',compact('live'));
  }
  public function updateLiveLink(Request $request){
        $this->validate($request,['link'=>'url']);
        $live = Lives::first();
        $live->link = $request->link;
        $live->save();
        Session::flash('success','تم رفع النقاط بنجاح');
        return back();
  }
}
