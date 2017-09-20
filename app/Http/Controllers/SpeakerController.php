<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Speaker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;



class SpeakerController extends Controller
{
    public function index()
    {
        DB::table('speakers')->truncate();

        $trackers = DB::table('trackers')
                            ->get()
                            ->unique('speaker');

        foreach ($trackers as $tracker) {
            Speaker::create([
                'name' => $tracker->speaker
            ]);
        }

        $speakers = DB::table('speakers')->get();

        return view('speakers.index', ['speakers' => $speakers]);
    }
}
