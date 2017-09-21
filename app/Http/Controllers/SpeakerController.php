<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Speaker;
use App\Tracker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Maatwebsite\Excel\Facades\Excel;

class SpeakerController extends Controller
{
    public function index()
    {
        $speakersInTrackers = DB::table('trackers')
                                        ->orderBy('speaker')
                                        ->get()
                                        ->unique('speaker');

        return view('speakers.index', ['speakers' => $speakersInTrackers]);
    }

    public function info(Tracker $id)
    {


        $trackers = DB::table('trackers')->where('speaker', '=', $id->speaker )->get();
        $sumLead = $trackers->sum('lead');
        $sumDeal = $trackers->sum('deal');
        $sumCall = $trackers->sum('call');
        $avg = $trackers->avg('iSecondsAvg');
        dd($trackers, $sumLead, $sumDeal, $sumCall, $avg);


        //return view('speakers.details', ['trackers' => $trackers]);
    }
}
