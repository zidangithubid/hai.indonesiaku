<?php

namespace App\Http\Controllers\Admin;

use App\Criteria;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Festival;
use App\Province;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;

class FestivalController extends Controller
{
    public $path;
    public $dimensions;
    public $user;

    public function __construct()
    {
        $this->path = public_path().'/img/festivals';
        $this->dimensions = 500;
        $this->user = Auth::user();
    }

public function category_index()
    {
        $categories = Criteria::paginate(10);
        return view('pages.festivals.admin.category.index', ['categories' => $categories]);
    }

    public function category_create()
    {
        return view('pages.festivals.admin.category.create');
    }

    public function category_store(Request $request)
    {
        $category = new Criteria();
        $category->name = $request->name;
        $category->save();
        return response()->json([
            'success' => true,
            'data' => $category,
        ]);
    }

    public function category_edit(Request $request, $id)
    {
        $category = Criteria::find($id);
        return view('pages.festivals.admin.category.edit', ['category' => $category]);
    }

    public function category_update(Request $request, $id)
    {
        $category = Criteria::find($id);
        $category->name = $request->name;
        $category->save();
        return response()->json([
            'success' => true,
            'data' => $category,
        ]);
    }

    public function category_destroy(Request $request, $id)
    {
        $category = Criteria::find($id);
        $category->delete();
        return redirect('admin/festivals/categories');
    }

    public function index()
    {
        $festivals = Festival::paginate(10);
        return view('pages.festivals.admin.index', compact('festivals'));
    }

    public function create()
    {
        $provinces = Province::all();
        $criterias = Criteria::all();
        return view('pages.festivals.admin.create', compact('provinces', 'criterias'));
    }

    public function store(Request $request)
    {
        $festival = new Festival();
        $festival->name = $request->name;
        $festival->criteria_id = $request->criteria_id;
        $festival->province_id = $request->province_id;
        $festival->city_id = $request->city_id;
        $festival->district_id = $request->district_id;
        $festival->village_id = $request->village_id;
        $festival->date = $request->date;
        // proses upload
        if(!File::isDirectory($this->path)) {
            File::makeDirectory($this->path, 077, true);
        }
        $picture = $request->file('picture');

        $pictureName = Carbon::now()->timestamp.'_'.uniqid().'.'.$picture->getClientOriginalExtension();
        $canvas = Image::canvas($this->dimensions, $this->dimensions - 150);
        $resize = Image::make($picture)->resize($this->dimensions, null, function($constraint) {
            $constraint->aspectRatio();
        });
        $canvas->insert($resize, 'center');
        $canvas->save($this->path.'/'.$pictureName, 80);
        // end proses upload

        $festival->picture = $pictureName;
        $description = $request->input('description');
        $festival->description = htmlspecialchars($description);
        $festival->save();

        return response()->json([
            'success' => true,
            'data' => $festival,
        ]);
    }

    public function edit($id)
    {
        $festival = Festival::find($id);
        $provinces = Province::all();
        $criterias = Criteria::all();
        return view('pages.festivals.admin.edit', compact('festival', 'provinces', 'criterias'));
    }

    public function update(Request $request, $id)
    {
        $festival = Festival::find($id);
        $festival->name = $request->name;
        $festival->criteria_id = $request->criteria_id;
        $festival->province_id = $request->province_id;
        $festival->city_id = $request->city_id;
        $festival->district_id = $request->district_id;
        $festival->village_id = $request->village_id;
        $festival->date = $request->date;
        if($request->hasFile('picture')) {
            // proses upload
            if(!File::isDirectory($this->path)) {
                File::makeDirectory($this->path, 077, true);
            }
            File::delete($this->path."/".$festival->picture);
            $picture = $request->file('picture');
            $pictureName = Carbon::now()->timestamp.'_'.uniqid().'.'.$picture->getClientOriginalExtension();
            $canvas = Image::canvas($this->dimensions, $this->dimensions - 150);
            $resize = Image::make($picture)->resize($this->dimensions, null, function($constraint) {
                $constraint->aspectRatio();
            });
            $canvas->insert($resize, 'center');
            $canvas->save($this->path.'/'.$pictureName, 80);
            $festival->picture = $pictureName;
            // end proses upload
        }
        $description = $request->input('description');
        $festival->description = htmlspecialchars($description);
        $festival->save();

        return response()->json([
            'success' => true,
            'data' => $festival,
        ]);
    }

    public function destroy($id)
    {
        $festival = Festival::find($id);
        File::delete($this->path."/".$festival->picture);
        $festival->delete();
        return redirect('admin/festivals');
    }
}
