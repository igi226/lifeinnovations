<?php

namespace App\Http\Controllers\User\Index;

use App\Http\Controllers\Controller;
use App\Repositories\Category\CategoryInterface;
use App\Repositories\TimelinePost\PostInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class IndexController extends Controller
{
   protected $categories;
   protected $posts;
   public function __construct( CategoryInterface $categories, PostInterface $posts )
   {
      $this->categories = $categories;
      $this->posts = $posts;
   }
   public function index()
   {
      $data = [
         "categories" => $this->categories->getAllCategories()->get(),
         "timeline_posts" => $this->posts->getAllPosts(),
      ];
        return view("User.Index.index", $data);
   }

   public function subcategoriesWisePost( Request $request ) {
      
      $html = '';
      foreach($this->posts->getSubcategoriesWisePost($request->id) as $post) {
         //  dd($post->post_galleries[0]);
         $html .= '<div class="list-post fl-wrap">';
                     if (isset($post->post_galleries[0])){
                        $html .= '  <a class="post-category-marker" href="javascript:void(0)">'.$post->category->category_name .'</a>
                        <div class="list-post-media">
                           <a href="javascript:void(0)">
                                 <div class="bg-wrap">';
                                       if (File::extension($post->post_galleries[0]->content) == 'mp4'){
                                       $html .= '<div class="bg" data-bg="'.asset("storage/Content/". $post->post_galleries[0]->content).'">
                                                <video height="240">
                                                   <source src="'.asset('storage/Content/' . $post->post_galleries[0]->content).'"
                                                         type="video/mp4">
                                                </video>
                                             </div>';
                                        } else {
                                       $html .= '<div class="bg" data-bg="'.asset("storage/Content/". $post->post_galleries[0]->content) .'"></div>';
                                       }
                                       
                                       $html .= '</div>
                           </a>
                           <span class="post-media_title">&copy; Image Copyrights Title</span>
                           
                        </div>';
                       }  
                        
                       $html .= '<div class="list-post-content">
                           
                           <h3><a href="javascript:void(0)">'.$post->title.'</a></h3>
                           <span class="post-date"><i class="far fa-clock"></i>'. $post->created_at->toFormattedDateString() .'</span>';
                           if (!isset($post->post_galleries[0])){
                              $html .= '<a class="post-category-marker noimgpostcategory" href="javascript:void(0)">'.$post->category->category_name.'</a>';
                           }
                           $html .= '<div class="clearfix"></div>
                           <p>'.implode(' ', array_slice(str_word_count($post->description, 2), 0, 20)).'</p>
                           <ul class="post-opt">
                                 <li><i class="far fa-comments-alt"></i> 6</li>
                                 <li><i class="fal fa-eye"></i> 587</li>
                           </ul>
                           <div class="author-link">
                                 <a href="javascript:void(0)">';
                                    if (isset($post->user->image) && !empty($post->user->image) && File::exists(public_path('storage/UserImage/' . $post->user->image))){
                                       $html .= '<img src="'.asset('storage/UserImage/' . $post->user->image) .'" alt="">';
                                    }else{
                                       $html .= '<img src="'.asset('noimg.png').'" alt="no-image">';
                                    }
                                    $html .= '<span>'.$post->user->name.'</span>
                                 </a>
                           </div>
                        </div>
                     </div>
                  ';
      }


      return $html;
     
   }
}
