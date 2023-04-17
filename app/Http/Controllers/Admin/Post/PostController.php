<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\Postrequest;
use App\Models\PostGallery;
use App\Models\TimelinePost;
use App\Repositories\TimelinePost\PostInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    private $timeline_post;
    public function __construct( PostInterface $timeline_post )
    {
        $this->timeline_post = $timeline_post;        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data["posts"] =  $this->timeline_post->getAllPosts();
        return view("Admin.Post.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data["users"] = DB::table("users")->where("status", 1)->select("id", "name")->get();
        $data["categories"] = DB::table("categories")->select("id", "category_name")->get();
        return view("Admin.Post.create", $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Postrequest $request)
    {
        // dd("gg");
        $data = $request->except("_token");
        $this->timeline_post->createPost($data);
        return redirect()->route("posts.index")->with("msg", "Post uploded successfully.");
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $data["post"] = $this->timeline_post->editPost($slug);
        return view("Admin.Post.view", $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $data['particular_user'] = TimelinePost::where('slug', $slug)->select("user_id")->first();
        $data['users'] = DB::table('users')->where('status', 1)->whereNotIn('id', [$data['particular_user']->user_id])->get();
        // dd($data);
        $data["post"] = $this->timeline_post->editPost($slug);
        return view("Admin.Post.edit", $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Postrequest $request, $id)
    {
        $data = $request->except("_token", "_method");
        $this->timeline_post->updatePost($data, $id);
        return redirect()->route("posts.index")->with("msg", "Post updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
       if($this->timeline_post->detetePost($slug)){
            return back()->with("msg", "The post has been deleted successfully.");
       }else{
            return back()->with("msg", "Some error occur, try again!");
       }
    }

    public function contentDestroy(Request $request){
        $data = $request->id;
        $this->timeline_post->contentDelete($request->id);
        return response()->json([
            "msg" => "Content has been deleted successfully."
        ]);
    }

    public function postSubcategories( Request $request ) {
        $subcategories = DB::table("sub_categories")->where("catregory_id", $request->id)->get();
        if(isset($subcategories[0])){
            $html = '<select name="subcategory_id" class="js-example-basic-single form-select" required>';

                foreach ($subcategories as $subcategory){
                    $html .= '<option value="'.$subcategory->id.'">'.$subcategory->subcategory_name.'</option>';
                }
                  
        $html .= '</select>';
        }else{
            $html = '<p>No sub category found for this category, please choose abother.</p>';
        }
       
        return $html;
    }
    
}
