<?php
namespace App\Repositories\Cms;

interface CmsInterface {
    public function getAllCms();
    public function getCms($slug);
    public function storeCms(array $data);
    public function updateCms(array $data, $slug);
    public function getAboutCms();
    public function getServiceCms();
    public function getEnquiries();
    public function deleteEnquiry($id);
    
}