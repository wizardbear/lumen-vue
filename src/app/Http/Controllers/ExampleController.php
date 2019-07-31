<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Router;

class ExampleController extends Controller
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
     * @param Router $router
     * @return \Illuminate\View\View
     */
    public function show(Router $router) {
        return view('main');
    }
}
