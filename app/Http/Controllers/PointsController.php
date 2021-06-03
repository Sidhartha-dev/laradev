<?php

namespace App\Http\Controllers;

use App\Point;
use App\User;
use Illuminate\Http\Request;

class PointsController extends Controller
{
    public function PointIndex()
    {
        $pagination =5;
        $points = Point::paginate($pagination);
        return view('admin.Users.points', compact('points'));
    }

    // public function pointUser()
    // {
    //     $pointusers = User::with(['points'=>function($query)
    //     {
    //         $query::all();
    //     }])->get();
    //     return view('admin.dashboard', compact('poinrusers'));
    // }

    public function PointAdd()
    {
        $users = User::all();
        $point = new Point();
        return view('admin.Users.pointadd', compact('users', 'point'));
    }

    public function PointStore()
    {
        Point::create($this->validateRequest());
        return redirect('/points');
    }

    public function destroypoints($id)
    {
        $point = Point::findOrFail($id);
        $point->delete();
        return redirect('/points');
    }

    private function validateRequest()
    {
        return request()->validate([
            'points' =>'sometimes',
            'user_id' => 'required',
            'point_status'=> 'required',
            'recieving_email'=> 'sometimes',
        ]);
    }
}
