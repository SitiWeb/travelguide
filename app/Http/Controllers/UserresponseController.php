<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userresponse;
class UserresponseController extends Controller
{
    public function index()
    {
        $userResponses = Userresponse::paginate(50);
        return view('userresponses.index', compact('userResponses'));
    }
}
