<?php
namespace App\Repositories\Category;

interface CategoryInterface {
    public function getAllCategories();
    public function createCategory(array $data,$data2);
    public function editCategory($id);
    public function updateCategory(array $data,$data2,$id);
    public function deteteCategory($id);
    public function subcategoryDelete($id);
  
}