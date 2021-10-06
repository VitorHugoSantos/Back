<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\UsersService;

class UsersController extends Controller{
    public function __construct(){
        $this->middleware('auth');
        $this->service = new UsersService;
    }

    public function index(Request $request) {
        return $this->service->index($request);
    }
}
