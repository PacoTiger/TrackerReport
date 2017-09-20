<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Tracker;
use App\Http\Controllers\Controller;

class ImportController extends Controller
{
    public function import()
    {
        Excel::load('SLCTdb170720.csv', function($reader) {

            foreach ($reader->get() as $tracker) {
                Tracker::create([
                    'day' => $tracker->day,
                    'time' =>$tracker->time,
                    'agent' =>$tracker->agent,
                    'speaker' =>$tracker->speaker,
                    'segmentation' =>$tracker->s,
                    'lead' =>$tracker->l,
                    'call' =>$tracker->c,
                    'tMinute' =>$tracker->t,
                    'deal' =>$tracker->d,
                    'iSegundos' =>$tracker->ts,
                    'tAvg' =>$tracker->avg,
                    'iSecondsAvg' =>$tracker->avgs
                    ]);
            }
        });

        return Tracker::all();
    }
}
