<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TrackerController extends Controller
{
    public function index()
    {
      $trackers = DB::table('trackers')
                                    ->get()
                                    ->unique('speaker');



      return view('tracker.index', ['trackers' => $trackers]);

    }
}
