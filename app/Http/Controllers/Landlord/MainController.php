<?php

namespace App\Http\Controllers\Landlord;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class MainController extends Controller
{
    public function index(){
        return response()->json(User::get(), 200);
    }
}
