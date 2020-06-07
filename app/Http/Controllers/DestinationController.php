<?php

namespace App\Http\Controllers;

use App\Category;
use App\Destination;
use App\Province;
use Illuminate\Http\Request;

class DestinationController extends Controller
{

    public $page;

    public function __construct()
    {
        $this->page = 9;
    }

    public function index(Request $request)
    {
        $provinces = Province::all();
        $categories = Category::all();
        $key = $request->get('key');
        $category = $request->get('category');
        $province = $request->get('province');
        $city = $request->get('city');
        $district = $request->get('district');

        if($key !== "" && !empty($key)) {
            if($category !== "" && !empty($category)) {
                if($province !== "" && !empty($province)) {
                    if($city !== "" && !empty($city)) {
                        if($district !== "" && !empty($district)) {
                            $destinations = Destination::where('name', "LIKE", "%$key%")
                            ->where('category_id', $category)
                            ->where('province_id', $province)
                            ->where('city_id', $city)
                            ->where('district_id', $district)
                            ->paginate($this->page);
                        } else {
                            $destinations = Destination::where('name', "LIKE", "%$key%")
                            ->where('category_id', $category)
                            ->where('province_id', $province)
                            ->where('city_id', $city)
                            ->paginate($this->page);
                        }
                    } else {
                        $destinations = Destination::where('name', "LIKE", "%$key%")
                        ->where('category_id', $category)
                        ->where('province_id', $province)
                        ->paginate($this->page);
                    }
                } else {
                    $destinations = Destination::where('name', "LIKE", "%$key%")
                    ->where('category_id', $category)
                    ->paginate($this->page);
                }
            } else {
                if($province !== "" && !empty($province)) {
                    if($city !== "" && !empty($city)) {
                        if($district !== "" && !empty($district)) {
                            $destinations = Destination::where('name', "LIKE", "%$key%")
                            ->where('province_id', $province)
                            ->where('city_id', $city)
                            ->where('district_id', $district)
                            ->paginate($this->page);
                        } else {
                            $destinations = Destination::where('name', "LIKE", "%$key%")
                            ->where('province_id', $province)
                            ->where('city_id', $city)
                            ->paginate($this->page);
                        }
                    } else {
                        $destinations = Destination::where('name', "LIKE", "%$key%")
                        ->where('province_id', $province)
                        ->paginate($this->page);
                    }
                } else {
                    $destinations = Destination::where('name', "LIKE", "%$key%")->paginate($this->page);
                }
            }
        } else {
            if($category !== "" && !empty($category)) {
                if($province !== "" && !empty($province)) {
                    if($city !== "" && !empty($city)) {
                        if($district !== "" && !empty($district)) {
                            $destinations = Destination::where('category_id', $category)
                            ->where('province_id', $province)
                            ->where('city_id', $city)
                            ->where('district_id', $district)
                            ->paginate($this->page);
                        } else {
                            $destinations = Destination::where('category_id', $category)
                            ->where('province_id', $province)
                            ->where('city_id', $city)
                            ->paginate($this->page);
                        }
                    } else {
                        $destinations = Destination::where('category_id', $category)
                        ->where('province_id', $province)
                        ->paginate($this->page);
                    }
                } else {
                    $destinations = Destination::where('category_id', $category)
                    ->paginate($this->page);
                }
            } else {
                if($province !== "" && !empty($province)) {
                    if($city !== "" && !empty($city)) {
                        if($district !== "" && !empty($district)) {
                            $destinations = Destination::where('province_id', $province)
                                            ->where('city_id', $city)
                                            ->where('district_id', $district)
                                            ->paginate($this->page);
                        } else {
                            $destinations = Destination::where('province_id', $province)
                            ->where('city_id', $city)
                            ->paginate($this->page);
                        }
                    } else {
                        $destinations = Destination::where('province_id', $province)
                        ->paginate($this->page);
                    }
                } else {
                    $destinations = Destination::paginate($this->page);
                }
            }
        }
        return view('pages.destinations.index', compact('destinations', 'provinces', 'categories'));
    }

    public function show($id)
    {
        $destination = Destination::find($id);
        return view('pages.destinations.show', compact('destination'));
    }
}
