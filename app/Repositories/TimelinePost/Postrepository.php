<?php
namespace App\Repositories\TimelinePost;

use App\Models\PostGallery;
use App\Models\TimelinePost;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class Postrepository implements PostInterface
{

    public function getAllPosts() {
        return TimelinePost::orderBy("id", "DESC")->paginate(10);
    }

    public function createPost(array $data){
        $slug = Str::slug($data['title']);
        $slug_count = DB::table('timeline_posts')->where('slug',$slug)->count();
            if($slug_count>0){
                $slug = time().rand(100000, 999999).'-'.$slug;
            }
       
        $post =  TimelinePost::create([
            "title" => $data["title"],
            "user_id" => $data["user_id"], 
            "slug" => $slug, 
            "category_id" => $data["category_id"],
            "subcategory_id" => $data["subcategory_id"],
            "description" => $data["description"],
        ]);
       
        if (isset($data["content"])) {
            return $this->contentUpload($data["content"], $post->id, $data["user_id"]);
        }
    }

    
    public function editPost($slug) {
        return TimelinePost::where("slug", $slug)->first();  
    }

    public function updatePost(array $data, $id){
        $post =  TimelinePost::where("id", $id)->update(["title" => $data["title"], "user_id" => $data["user_id"]]);
        if (isset($data["content"])) {
        // $post =  TimelinePost::where("id", $id)->update(["title" => $data["title"], "user_id" => $data["user_id"]]);
            return $this->contentUpload($data["content"], $id, $data["user_id"]);
        }

    }

    public function detetePost($slug) {
        $find_post= TimelinePost::where("slug", $slug)->first();
        foreach ($find_post->post_galleries as $content) {
            File::delete("storage/Content/" . $content->content);
            $content->delete();
        }

        foreach ($find_post->post_comments as $comment) {
            $comment->delete();
        }
        return $find_post->delete();
    }

    public function contentDelete($id)
    {
        $delete = PostGallery::findOrFail($id);
        File::delete("storage/Content/" . $delete->content);

        return $delete->delete();
    }
    public function contentUpload($data, $id, $user_id){
            foreach ( $data as $content ) 
            {
                $content_db =
                time() .
                rand(0000, 9999) .
                "." .
                $content->getClientOriginalExtension();
                if( $content->getClientOriginalExtension() == 'jpg' || $content->getClientOriginalExtension() == 'jpeg' || $content->getClientOriginalExtension() == 'png' || $content->getClientOriginalExtension() == 'JPG' )
                {
                    $content_type = "image";
                } elseif ( $content->getClientOriginalExtension() == 'mp4' || $content->getClientOriginalExtension() == 'gif' )
                {
                    $content_type = "video";
                }
                $content->storeAs("public/Content", $content_db);
                DB::table("post_galleries")->insert(
                    [
                    'post_id' => $id,
                    'user_id' => $user_id,
                    'content' => $content_db,
                    'content_type' => $content_type,
                    ]);
            }
            
     
    }


    public function getSubcategoriesWisePost($subcategory_id){
       return TimelinePost::where("subcategory_id", $subcategory_id)->get();
    }   

    
}
