<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Permission;
use App\Users_ACL;



class UsersController extends Controller
{
    public function index() {
        //$user = Auth::user();
        $users = User::all();
        $permissions = Permission::all();
        $users_permmision = Users_ACL::all();
        $users_slug = [];
        foreach($users_permmision as $user_permmision){
            $users_slug[$user_permmision->user_id][] = $user_permmision->acl_slug;
        }
        return view('users', compact('users', 'users_slug', 'permissions'));
     }
     
     public function storePermissions() {

        if(isset($_POST['save'])){
            Users_ACL::create([
               'user_id' => request('user_id'),
               'acl_slug' => request('acl_slug')
           ]);
        }
        else{
            Users_ACL::where('user_id', '=', request('user_id'))->where('acl_slug', '=', request('acl_slug'))->delete();
        }

        return back();
     }
}
