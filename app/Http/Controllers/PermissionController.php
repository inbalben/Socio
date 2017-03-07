<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permission;


class PermissionController extends Controller
{
    public function index() {
         $permissions = Permission::all();
         return view('permission', compact('permissions'));
     }
     
     public function store() {

        Permission::create([
            'slug' => request('slug'),
            'name' => request('name')
        ]);

        return back();
     }
}
