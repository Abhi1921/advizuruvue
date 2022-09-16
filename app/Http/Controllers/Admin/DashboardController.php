<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * For showing dashboard data
     *
     * @return View responce blade view with data
     */
    public function index()
    {
        return view('admin.modules.dashboard.index');
    }
           
}
