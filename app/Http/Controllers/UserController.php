<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function addUser(Request $request){
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        if($user->save()){
            return redirect('user-list');
        }else{
            return 'User Data Not Added';
        }

    }
    function userList(Request $request){
        //$userData=User::all();
        $userData=User::paginate(2);
        return view('user-list',['users'=>$userData]);
    }
    
    function edituser(Request $request,$id){
        $userData=User::find($id);
        return view('user-update',['users'=>$userData]);
   

    }
    function updateuser(Request $request,$id){
        $userData=User::find($id);       
        $userData->name=$request->name;
        $userData->email=$request->email;
        $userData->password=$request->password;
        if($userData->save()){
            return redirect('user-list');
        }else{
            return 'User Data Not Updated';
        }

    }


    function deleteUser($id){
        $userDelete=User::destroy($id);
        //$userData=User::all();
        //return view('user-list',['users'=>$userData]);
        return redirect('user-list');
    }

    function searchUser(Request $request){
        $userData=User::where('name','like',"%$request->search%")->get();
        return view('user-list',['users'=>$userData]);
    }
}
