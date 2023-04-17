<?php
namespace App\Repositories\Cms;

use App\Models\EnqueryForm;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use illuminate\Support\Str;
class CmsRepository implements CmsInterface {
     public function storeCms( $data ) {
        $slug = Str::slug($data['title']);
        $slug_count = DB::table('cms')->where('slug',$slug)->count();
        if($slug_count>0){
            $slug = random_int(100000, 999999).'-'.$slug;
        }
        $data['slug'] = $slug;
        if(!empty($data['image'])){
            $data['image'] = $this->imageUpload($data['image']);
        }
        return DB::table('cms')->insert($data);
     }

    public function updateCms(array $data, $slug){
      if(!empty($data['image'])){
            $data['image'] = $this->imageUpload($data['image']);
      }
      return DB::table('cms')->where('slug', $slug)->update($data);
    }


     public function imageUpload($image){

        $cmsImg = time().rand(0000, 9999).".".$image->getClientOriginalExtension();
        // dd($cmsImg);
        $image->storeAs("public/CmsImage", $cmsImg);
      //   File::delete("storage/CmsImage/" . $delete->content);

        return $cmsImg;
     }

     public function getAllCms()
     {
        
     }

     public function getCms($slug) {
      return DB::table('cms')->where('slug', $slug)->first();
     }

     public function getAboutCms(){
        return DB::table('cms')->where('page','about-us')->get();
     }
    public function getServiceCms(){
      return DB::table('cms')->where('page','service')->get();
    }

    public function getEnquiries()
   {
      return DB::table('enquery_forms')->get();
   }

   public function deleteEnquiry($id){
      return EnqueryForm::findOrFail($id)->delete();
   }
}