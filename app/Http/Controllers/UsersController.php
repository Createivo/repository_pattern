<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\UserInterfaceRepo ;

class UsersController extends Controller
{

    public $users ;

    public function __construct(UserInterfaceRepo $users)
    {
        $this->users = $users ;
    }

    public function index(){
        return $this->users->getAllUsers();
    }

    public function show($id) {
        return $this->users->getUser($id);
    }

    public function createUser() {
        return view('form');
    }

    public function storeUser(Request $request , $id = null) {
        $collection = $request->except(['_token']);
        return $this->users->createOrUpdate($id , $collection);
    }

    public function update($id) {
        $users = $this->users->getUser($id);
        return view('formUpdate' , compact('users'));
    }

    public function edit(Request $request , $id = null) {
        $collection = $request->except(['_token' , '_method']);
        $this->users->createOrUpdate($id , $collection);
        return redirect()-> route('user.all');
    }
}
