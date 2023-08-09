<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userresponse;
class UserresponseController extends Controller
{
    public function index(Request $request)
{
    $query = Userresponse::orderBy('created_at', 'desc');

    if ($request->input('filter') == 'rating_not_null') {
        $query->whereNotNull('rating');
    }

    $userResponses = $query->paginate(50);

    return view('userresponses.index', compact('userResponses'));
}


}
