<?php

namespace App\Http\Controllers;

use App\Criteria;
use App\Festival;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class FestivalController extends Controller
{

    public function index(Request $request)
    {
        $key = $request->get('name');
        $criteria = $request->get('ctr');
        $criterias = Criteria::all();
        if($key !== "" && !empty($key)) {
            if($criteria !== "" && !empty($criteria)) {
                $festivals = Festival::where('name', 'LIKE', "%$key%")
                ->where('criteria_id', $criteria)
                ->paginate(6);
            } else {
                $festivals = Festival::where('name', 'LIKE', "%$key%")
                ->paginate(6);
            }
        } else {
            if($criteria !== "" && !empty($criteria)) {
                $festivals = Festival::where('criteria_id', $criteria)
                ->paginate(6);
            } else {
                $festivals = Festival::paginate(6);
            }
        }
        return view('pages.festivals.index', compact('criterias', 'festivals'));
    }

    public function show($id)
    {
        $festival = Festival::find($id);
        return view('pages.festivals.show', compact('festival'));
    }
}
