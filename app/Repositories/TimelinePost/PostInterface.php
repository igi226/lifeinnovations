<?php
namespace App\Repositories\TimelinePost;

interface PostInterface {
    public function getAllPosts();
    public function createPost(array $data);

    public function editPost($slug);
    public function updatePost(array $data, $id);
    public function detetePost($slug);
    public function contentDelete($id);

    public function getSubcategoriesWisePost(int $subcategory_id);
  
}