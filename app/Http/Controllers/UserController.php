<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\UserRequest;
use App\Province;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\ImageManagerStatic as Image;

class UserController extends Controller
{

    public $path;
    public $dimensions;
    public $user;

    public function __construct()
    {
        $this->path = public_path().'/img/users';
        $this->dimensions = 200;
        $this->user = Auth::user();
    }

    /**
     * Display a listing of the users
     *
     * @param  \App\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
        return view('users.index');
    }

    public function login()
    {
        return view('pages.auth.login');
    }

    public function register()
    {
        $provinces = Province::all();
        return view('pages.auth.register', compact('provinces'));
    }

    public function register_post(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $password = $request->password;
        $password2 = $request->password2;
        if($password !== $password2) {
            return response()->json([
                'success' => false,
                'message' => 'Error while confirm password',
            ]);
        }
        $user->password = Hash::make($password);
        $user->date_birthday = $request->date_birthday;
        $user->province_id = $request->province_id;
        $user->city_id = $request->city_id;
        $user->district_id = $request->district_id;
        $user->village_id = $request->village_id;

        if(!File::isDirectory($this->path)) {
            File::makeDirectory($this->path, 077, true);
        }
        $photo = $request->file('photo_profile');
        $photoName = Carbon::now()->timestamp.'_'.uniqid().'.'.$photo->getClientOriginalExtension();
        $img = Image::make($photo->path());
        $img->resize($this->dimensions, $this->dimensions, function($constraint) {
            $constraint->aspectRatio();
        })->save($this->path.'/'.$photoName, 80);

        $user->photo_profile = $photoName;
        $user->save();
        return response()->json([
            'success' => true,
            'data' => $user,
        ]);
    }

    public function login_post(Request $request)
    {
        if(Auth::attempt($request->only('email', 'password'))) {
            $this->user;
            return response()->json([
                'success' => true,
                'message' => 'Berhasil',
            ]);
        } else {
            return response()->json([
                'success' => false,
            ]);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
