<?php

namespace App\Http\Controllers;
use Backpack\MenuCRUD\app\Models\MenuItem;
use Illuminate\Http\Request;
use App\Http\Requests;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $this->data['menu_items'] = MenuItem::getTree();
        // return view('front.anasayfa', $this->data);
        return view('front.anasayfa');
    }
}
