<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Userrequest;
use App\Repositories\User\UserInterface;
use App\Repositories\User\Userrepository;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public $user;

    
    public function __construct(UserInterface $user)
    {
        $this->user = $user;
        
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data["users"] = $this->user->getAllUsers()->paginate(10);
        return view("Admin.User.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view("Admin.User.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Userrequest $request)
    {
        $data = $request->except("_token");
        $this->user->createUser($data);
        return redirect()->route("users.index")->with("msg", "User inserted successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data["user"] = $this->user->editUser($id);
        return view("Admin.User.edit", $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Userrequest $request, $id)
    {
        $data = $request->except("_token", "_method");
        $update = $this->user->updateUser($data, $id);
        if($update)
        {
            return redirect()->route("users.index")->with("msg", "User informations updated successfully");
        }else
        {
            return back()->with("msg", "Some error occur");
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
        if($this->user->deteteUser($id))
        {
            return back()->with("msg", "User deleted successfully.");
        }else
        {
            return back()->with("msg", "Some error occur!");
        }

    }

    public function changeUserS(Request $request) {
       
        $data = $request->id;
       
        if($this->user->userChangeS($data)){
            return response()->json([
                "status" => 1,
                "msg"=> "Status updated successfully."
            ]);
        }else{
            return response()->json([
                "status" => 0,
                "msg" => "Some error occur!"
            ]);
         
        }
    }
}
