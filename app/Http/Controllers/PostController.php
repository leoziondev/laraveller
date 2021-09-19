<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {


        return view('posts.index', ['users' => User::all()]);
    }

    public function show($id) {


        return view('posts.show', ['id' => $id]);
    }
}
