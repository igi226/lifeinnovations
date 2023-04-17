<?php
namespace App\Repositories\User;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class Userrepository implements UserInterface
{

    public function getAllUsers() {
        return DB::table("users");
    }

    public function createUser(array $data){
        if (!empty($data["image"])) {
            $user_image =
                time() .
                rand(0000, 9999) .
                "." .
                $data["image"]->getClientOriginalExtension();
                $data["image"]->storeAs("public/UserImage", $user_image);
            $data["image"] = $user_image;
        }
        DB::table("users")->insert($data);
    }

    public function editUser($id) {
        return DB::table("users")->where("id", $id)->first();  
    }

    public function updateUser(array $data, $id){
        $img = DB::table("users")->where("id", $id)->first();
        if (!empty($data["image"])) {
            $user_image =
                time() .
                rand(0000, 9999) .
                "." .
                $data["image"]->getClientOriginalExtension();
                $data["image"]->storeAs("public/UserImage", $user_image);
            $data["image"] = $user_image;
        } else {
            $data["image"] = $img->image;
        }
        if($data['password'] != null){
            $data['password'] = Hash::make($data['password']);
        }else{
            $data['password'] = $img->password;
        }
        // dd($data);
        return User::where("id", $id)->update($data);
    }

    public function deteteUser($id) {
        $find_user = User::findOrFail($id);
        File::delete("storage/UserImage/" . $find_user->image);
        return $find_user->delete();
    }

    public function userChangeS( $data ) {
        $status = User::findOrFail($data);
       if($status->status == 1){
            return $status->update(["status" => 0]);
       }else{
        return $status->update(["status" => 1]);
       }
    }
    
}
