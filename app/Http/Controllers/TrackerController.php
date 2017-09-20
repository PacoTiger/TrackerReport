<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TrackerController extends Controller
{
    public function index()
    {
      $trackers = DB::table('trackers')->paginate(5);


      return view('tracker.index', ['trackers' => $trackers]);
    }
}
