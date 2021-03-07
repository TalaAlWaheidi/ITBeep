<?php

namespace App\Http\Controllers;

use App\Orders;
use App\Services;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $services = Services::all();
        $orders = Orders::all();
        return view('home', compact('services', 'orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        User::create($request->all());

        $to_name = $request->email;
        $to_email = $request->email;
    }
}
