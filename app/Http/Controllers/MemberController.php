<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Image;
use App\Models\Member;
use App\Models\Region;
use App\Models\Fonction;
use Illuminate\Http\Request;
use App\Models\Circonscription;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MemberController extends Controller
{
    public function index()
    {
        $regions = Region::all();
        
        return view('welcome', [
            'regions' => $regions
        ]);
    }

    public function show($id)
    {
        $region = Region::findOrFail($id);

        return view('region', [
            'region' => $region
        ]);
    }

    public function create()
    {
        $region_id = Auth::user()->region_id;
        $fonctions = Fonction::all();
        $circonscriptions = Circonscription::where('region_id', $region_id)->get();

        return view('inscription', [
            'fonctions' => $fonctions,
            'circonscriptions' => $circonscriptions
        ]);
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        $filename = time() . '.' . $request->file('avatar')->getClientOriginalExtension();

        $path = $request->file('avatar')->storeAs(
            'avatars',
            $filename,
            'public'
        );

        $member = Member::create([
            'name' => $user->name,
            'sexe' => $request->sexe,
            'fonction' => $request->fonction,
            'phone' => $request->phone,
            'circonscription_id' => $request->circonscription,
            'user_id' => $user->id
        ]);

        $image = new Image();
        $image->path = $path;

        $member->image()->save($image);

        dd('membre enregistre');
    }

    public function edite()
    {
        return view('modification', [

        ]);
    }
}
