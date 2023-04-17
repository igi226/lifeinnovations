<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Repositories\Sitesetting\SiteInterface;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
   private $site_settings;
    
   public function __construct(SiteInterface $site_settings)
   {
      $this->site_settings = $site_settings;
   }
   
   public function dashboard () {
    return view("Admin.Dashboard.dashboard");
   }

   public function siteSettings() {
      $data["site_infos"] = $this->site_settings->siteInformation();
      return view("Admin.Dashboard.siteInfos", $data);
   }

   public function siteSettingsUpdate( Request $request ){
      $request->validate([
         'site_name' => 'required|string',
         'email' => 'required|email'
     ]);
      $data = $request->except("_method", "_token");
      $update = $this->site_settings->siteSettingsUpdate($data);
      if ($update) {
         return redirect()
             ->back()
             ->with("msg", "Site Information Updated Successfully");
     } else {
         return redirect()
             ->back()
             ->with("msg", "Some Error Occur!");
     }

   }

   public function adminProfile(){
      // $data["adminProfile"] = $this->site_settings->adminProfile();
      return view("Admin.Dashboard.profile");
   }
   public function adminProfileUpdate( Request $request ) {
      $request->validate([
         "name" => "required|string",
         "email" => "required|email",
      ]);
      $data = $request->only("name", "email");
      $update = $this->site_settings->adminProfileUpdate($data);
      if ($update) {
         return redirect()
             ->back()
             ->with("msg", "Your Information Updated Successfully");
     } else {
         return redirect()
             ->back()
             ->with("msg", "Some Error Occur!");
     }

   }

   public function adminChangePassword() {
      return view("Admin.Dashboard.changePassword");
   }

   public function changePassword(Request $request){
      $request->validate([
         'current_password' => 'required',
         'new_password' => 'required|string|min:8',
         'confirm_password' => 'same:new_password',
     ]);
      $data = $request->except("_token");
      return back()->with("msg", $this->site_settings->changePassword($data));  
   }
}
