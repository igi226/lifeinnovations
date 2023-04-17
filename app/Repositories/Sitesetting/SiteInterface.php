<?php
namespace App\Repositories\Sitesetting;

interface SiteInterface {
    public function siteInformation();
    public function siteSettingsUpdate(array $data);
    public function adminProfileUpdate(array $data);
    public function changePassword(array $data);
    
}