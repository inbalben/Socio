<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Branch;

class BranchController extends Controller
{
     public function index() {
         $branches = Branch::all();
         return view('branch', compact('branches'));
     }
     
     public function store() {

        Branch::create([
            'company' => request('company'),
            'type' => request('type'),
            'user_id' => request('user_id'),
            'city' => request('city'),
            'street' => request('street')
        ]);

        return back();
     }
}
