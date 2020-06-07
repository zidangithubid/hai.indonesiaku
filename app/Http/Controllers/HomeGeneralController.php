<?php

namespace App\Http\Controllers;

use App\Category;
use App\Festival;
use App\Province;
use Illuminate\Http\Request;

class HomeGeneralController extends Controller
{
    public function index(Request $request)
    {
        $criteria = $request->get('criteria');
        $provinces = Province::all();
        $categories = Category::all();
        if($criteria !== "" && !empty($criteria)) {
            $festivals = Festival::where('criteria_id', $criteria)->paginate(6);
        } else {
            $festivals = Festival::paginate(6);
        }
        return view('welcome', compact('provinces', 'categories', 'festivals'));
    }
}
