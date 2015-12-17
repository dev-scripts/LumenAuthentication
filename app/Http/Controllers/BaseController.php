<?php
/**
 * User: prakash
 * Date: 12/16/15
 * Time: 4:27 PM
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Laravel\Lumen\Routing\Controller;

class BaseController extends Controller {

    function __construct()
    {
        $this->middleware('auth');
    }
}