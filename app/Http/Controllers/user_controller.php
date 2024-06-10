<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class user_controller extends Controller
{
    public function UserIndex(){
        return view("User.Userindex");
    }

    public function saveuser(){

        return view('User.UserReg');

    }
    

    public function storeUser(Request $request){
        $data = $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);


        $newUser = user::create($data);

        return redirect(route('user.index'));
    
    }

    


}
