<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $usersql = DB::select("SELECT * FROM user");
        return view('user/index', ['user' => $usersql]);
    }

    public function store() {

    }

    public function create() {
        return view('user/create');
    }

    public function show() {

    }

    public function update() {

    }

    public function destroy() {

    }

    public function edit() {
        
    }
}
