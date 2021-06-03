<?php

namespace App\Http\Controllers;

use App\Mail\Pointadded;
use App\Point;
use App\PointCheck;
use App\User;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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

    public function index()
    {
        $pointusers = Point::where([
            'user_id'=> Auth::user()->id,
            'point_status'=> false,
        ])->get();
        return view('home', compact('pointusers'));
    }

    public function completeindex()
    {
        $pointComplete = Point::where([
            'user_id'=> Auth::user()->id,
            'point_status'=> true,
        ])->get();
        return view('completecard', compact('pointComplete'));
    }

    public function pointshow($id)
    {
        $point = Point::find($id);
        return view('admin.Users.pointcard', compact('point'));
    }

    public function earningshow()
    {
        $checkpoints =Point::where([
            'user_id'=> auth()->user()->id,
            'point_status'=> true,
        ])->sum('points');
        // dd($checkpoints);
        return view('admin.Users.earnings', compact('checkpoints'));
    }

    public function updatePoints(Request $request , $id)
    {
        $this->validate($request, [
            'points' =>'sometimes',
            'point_status'=> 'required',
            'recieving_email'=> 'sometimes',
        ]);

        $point = Point::find($id);
        $point->points = $request->input('points');
        $point->point_status = $request->input('point_status');
        $point->recieving_email = $request->input('recieving_email');
        Mail::to($request->recieving_email)->send(new Pointadded($point));
        $point->save();
        return redirect('/earnings');
    }

}
