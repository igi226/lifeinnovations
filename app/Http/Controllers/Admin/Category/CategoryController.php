<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Repositories\Category\CategoryInterface;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $category;
    public function __construct( CategoryInterface $category)
    {
        $this->category = $category;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data["categories"] = $this->category->getAllCategories()->paginate(10);
        return view("Admin.Category.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Admin.Category.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([ "category_name" => "required|string"]);
        $data = $request->only("category_name");
        $data2 = $request->subCategory_name;
        if($this->category->createCategory($data, $data2)){
            return redirect()->route("categories.index")->with("msg", "Category inserted successfully.");
        }else{
            return back()->with("msg", "Some error occur.");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data["category"] = $this->category->editCategory($id);
        return view("Admin.Category.edit", $data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $request->validate([ "category_name" => "required|string"]);
        $data = $request->only("category_name");
        $data2 = $request->subCategory_name;
        if($this->category->updateCategory($data,$data2, $id))
        {
            return redirect()->route("categories.index")->with("msg", "The particular category has been updated successfully.");
        }else{
            return back()->with("msg", "Some error occur!");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if($this->category->deteteCategory($id))
        {
            return back()->with("msg", "Category deleted successfully.");
        }else
        {
            return back()->with("msg", "Some error occur!");
        }
    }

    function subcategoryDestroy( Request $request ) {
        if($this->category->subcategoryDelete($request->id))
        {
            return response()->json([
                "msg" => "Subcategory has been deleted successfully."
            ]);
        }else
        {
            return response()->json([
                "msg" => "Some error occur!"
            ]);
        }
    }
}
