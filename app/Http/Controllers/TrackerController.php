<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TrackerController extends Controller
{
    public function index()
    {
      $trackers = DB::table('trackers')->paginate(9);

      return view('tracker.index', ['trackers' => $trackers]);

    }
}
