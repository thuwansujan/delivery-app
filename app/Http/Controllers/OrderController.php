<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    /**
     * Show the application orders in the map.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $data = [];
        $latitude = 25.286106;
        $longitude = 51.534817;
        $radius = $request->radius ? $request->radius*1000 : 0;
        if ($radius != 0) {
            $data['orders'] = Order::selectRaw("id, +
            date, amount, latitude, longitude, status,
            ( 6371000 * acos( cos( radians(?) ) *
              cos( radians( latitude ) )
              * cos( radians( longitude ) - radians(?)
              ) + sin( radians(?) ) *
              sin( radians( latitude ) ) )
            ) AS distance", [$latitude, $longitude, $latitude])
                ->where('status', '=', 'delivered')
                ->having("distance", "<", $radius)
                ->orderBy("date",'desc')
                ->filter($request)->get();
        } else {
            $data['orders'] = Order::selectRaw("id, +
            date, amount, latitude, longitude, status,
            ( 6371000 * acos( cos( radians(?) ) *
              cos( radians( latitude ) )
              * cos( radians( longitude ) - radians(?)
              ) + sin( radians(?) ) *
              sin( radians( latitude ) ) )
            ) AS distance", [$latitude, $longitude, $latitude])
                ->where('status', '=', 'delivered')
                ->orderBy("date",'desc')
                ->filter($request)->get();
        }
        return view('track-my-order',$data);
    }
}
