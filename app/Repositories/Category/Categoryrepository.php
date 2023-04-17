<?php
namespace App\Repositories\Category;

use App\Models\Categories;
use App\Models\SubCategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class Categoryrepository implements CategoryInterface
{

    public function getAllCategories() {
        return Categories::orderBy('created_at', 'desc');
    }

    public function createCategory(array $data, $data2){
        
        $category = Categories::create($data);
        $sub_categories = []; 
        foreach($data2 as $sub_category) {
           if($sub_category != null){
            $new = [
                "catregory_id" => $category->id,
                "subcategory_name" => $sub_category
            ];
            array_push($sub_categories, $new);
           }
        }
        return DB::table("sub_categories")->insert($sub_categories);

    }

    public function editCategory($id) {
        return Categories::findOrFail($id);  
    }

    public function updateCategory(array $data,$data2, $id){
        // dd();
        Categories::where("id", $id)->update($data);
        if($data2 != null){
            $sub_categories = []; 
        foreach($data2 as $sub_category) {
           if($sub_category != null){
            $new = [
                "catregory_id" => $id,
                "subcategory_name" => $sub_category
            ];
            array_push($sub_categories, $new);
           }
        }
        return DB::table("sub_categories")->insert($sub_categories);
        }
    }

    public function deteteCategory($id) {
        $find_Category = Categories::findOrFail($id);
        return $find_Category->delete();
    }

    public function subcategoryDelete($id){
        return SubCategory::findOrFail($id)->delete();
    }

    
}
