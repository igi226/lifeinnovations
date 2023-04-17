<?php
namespace App\Repositories\Sitesetting;

use App\Models\Admin;
use App\Models\SiteInformation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SiteRepository implements SiteInterface {
public function siteInformation() {
        return DB::table("site_information")->where("slug", "site_information")->first();
}

public function siteSettingsUpdate(array $data){
    // $old_logo = $this->siteInformation()->logo_image;
    $old_favicon = $this->siteInformation()->favicon_image;
    if (!empty($data["logo_image"])) {
        $logo_image =
            time() .
            rand(0000, 9999) .
            "." .
            $data["logo_image"]->getClientOriginalExtension();
            $data["logo_image"]->storeAs("public/SiteImages", $logo_image);
        $data["logo_image"] = $logo_image;
    }else{
        $data["logo_image"] = $this->siteInformation()->logo_image;
    }

    if (!empty($data["favicon_image"])) {
        $favicon_image =
            time() .
            rand(0000, 9999) .
            "." .
            $data["favicon_image"]->getClientOriginalExtension();
            $data["favicon_image"]->storeAs("public/SiteImages", $favicon_image);
        $data["favicon_image"] = $favicon_image;
    }else{
        $data["favicon_image"] = $this->siteInformation()->favicon_image;
    }
        return SiteInformation::where("slug", "site_information")->update($data);
}

    public function adminProfileUpdate(array $data) {
            return Admin::where("slug", "admin-lifeinnovations")->update($data);
    }

    public function changePassword(array $data) {
        $old_password = Admin::where("slug", "admin-lifeinnovations")->first();
        if (Hash::check($data["current_password"], $old_password->password)) {
            $old_password->update(['password' => Hash::make($data["new_password"])]);
            return 'Password updated successfully';
            
        }else{
            return"Current Password does not Match";
        }

    }

}
