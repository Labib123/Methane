<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddScheduleController  extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Display all the static pages when authenticated
     *
     * @param string $page
     * @return \Illuminate\View\View
     */
    public function index()
    {
            return view("add-schedule");

    }
}
