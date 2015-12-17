<?php
namespace App\Http\Controllers;

/**
 * User: prakash
 * Date: 12/16/15
 * Time: 10:07 AM
 */

class DashboardController extends BaseController {

    public function index()
    {
       return view('dashboard');
    }
}