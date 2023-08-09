<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserResponse;
class UserresponseController extends Controller
{
    public function index()
    {
        $userResponses = UserResponse::paginate(50);
        return view('userresponses.index', compact('userResponses'));
    }
}
