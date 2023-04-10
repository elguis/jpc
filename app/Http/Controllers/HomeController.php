<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Models\Circonscription;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $nbr = Member::where('user_id', $user->id)->count();
        if($nbr != 0)
        {
            $member = Member::where('user_id', $user->id)->first();
            $circonscription = Circonscription::find($member->circonscription_id);

            return view('home', [
                'nbr' => $nbr,
                'member' => $member,
                'circonscription' => $circonscription
            ]);
        }
        else
        {
            return view('home', [
                'nbr' => $nbr,
            ]);
        }
    }
}
