<?php 

namespace App\Repository ;

use App\Models\User;
use App\Repository\UserInterfaceRepo ;
use Illuminate\Support\Facades\Hash;

class UserRepo implements UserInterfaceRepo {
    public function getAllUsers(){
        return User::all()->toArray();
    }

    public function getUser($id){
        // return User::where('id' , $id)->get(); // return array
        return User::find($id); // return the specific User
    }

    public function insert($request) {
        return $request ;
    }

    public function createOrUpdate( $id = null , $collection = []) {
        
        if( is_null($id)) {
            User::create([
                'name' => $collection['username'] ,
                'password' => Hash::make($collection['password']),
                'email' => $collection['email']
            ]);
        } else {
            User::find($id) -> update([
                'name' => $collection['username'] ,
                'password' => Hash::make($collection['password']),
                'email' => $collection['email']
            ]);
        }
        
    }




}