<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use App\Guest;

class FrontController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Guest::all();

        return view('front.index', ['data' => $data]);
    }

    public function guest_post(Request $request)
    {
        $this->validate($request, [
            'guest_name' => 'required|max:50',
            'guest_address' => 'required|max:255',
            'guest_phone' => 'required|max:20',
            'guest_note' => 'required|max:4000'
        ]);

        $guest = new Guest;

        $guest->guest_name = $request->guest_name;
        $guest->guest_address = $request->guest_address;
        $guest->guest_phone = $request->guest_phone;
        $guest->guest_note = $request->guest_note;

        $guest->save();

        $success = 'Thank you!';
        return redirect()->route('front')->withSuccess ($success) ;
    }
}
