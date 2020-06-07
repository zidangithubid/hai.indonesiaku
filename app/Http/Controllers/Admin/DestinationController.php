<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Destination;
use App\Http\Controllers\Controller;
use App\Province;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;

class DestinationController extends Controller
{

    public $path;
    public $dimensions;
    public $user;

    public function __construct()
    {
        $this->path = public_path().'/img/destinations';
        $this->dimensions = 500;
        $this->user = Auth::user();
    }

    public function index()
    {
        $destinations = Destination::paginate(10);
        return view('pages.destinations.admin.index', ['destinations' => $destinations]);
    }

    public function category_index()
    {
        $categories = Category::paginate(10);
        return view('pages.destinations.admin.category.index', ['categories' => $categories]);
    }

    public function category_create()
    {
        return view('pages.destinations.admin.category.create');
    }

    public function category_store(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return response()->json([
            'success' => true,
            'data' => $category,
        ]);
    }

    public function category_edit(Request $request, $id)
    {
        $category = Category::find($id);
        return view('pages.destinations.admin.category.edit', ['category' => $category]);
    }

    public function category_update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->name;
        $category->save();
        return response()->json([
            'success' => true,
            'data' => $category,
        ]);
    }

    public function category_destroy(Request $request, $id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('admin/destinations/categories');
    }

    public function create()
    {
        $categories = Category::all();
        $provinces = Province::all();
        return view('pages.destinations.admin.create', ['provinces' => $provinces, 'categories' => $categories]);
    }

    public function store(Request $request)
    {
        $destination = new Destination();
        $destination->name = $request->name;
        $destination->category_id = $request->category_id;
        $destination->province_id = $request->province_id;
        $destination->city_id = $request->city_id;
        $destination->district_id = $request->district_id;
        $destination->village_id = $request->village_id;

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

        $destination->picture = $pictureName;
        $description = $request->input('description');
        $destination->description = htmlspecialchars($description);
        $destination->save();

        return response()->json([
            'success' => true,
            'data' => $destination,
        ]);
    }

    public function edit(Request $request, $id)
    {
        $provinces = Province::all();
        $destination = Destination::find($id);
        $categories = Category::all();
        return view('pages.destinations.admin.edit', ['destination' => $destination, 'provinces' => $provinces, 'categories' => $categories]);
    }

    public function update(Request $request, $id)
    {
        $destination = Destination::find($id);
        $destination->name = $request->name;
        $destination->category_id = $request->category_id;
        $destination->province_id = $request->province_id;
        $destination->city_id = $request->city_id;
        $destination->district_id = $request->district_id;
        $destination->village_id = $request->village_id;

        // proses upload
        if($request->hasFile('picture')) {
            File::delete($this->path.'/'.$destination->picture);
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
            $destination->picture = $pictureName;
        }
        // end proses upload

        $description = $request->input('description');
        $destination->description = htmlspecialchars($description);
        $destination->save();

        return response()->json([
            'success' => true,
            'data' => $destination,
        ]);
    }

    public function destroy($id)
    {
        $destination = Destination::find($id);
        $destination->delete();
        File::delete($this->path.'/'.$destination->picture);
        return redirect('admin/destinations');
    }

}
