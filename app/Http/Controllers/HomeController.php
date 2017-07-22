<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guest;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Guest::all();

        return view('home', ['data' => $data]);
    }

    public function guest_delete($id)
    {
        $guest = Guest::where('guest_id', $id);

        $guest->delete();

        $success = 'Record has been deleted!';
        return redirect()->route('home')->withSuccess ($success) ;
    }
}
