<!-- resources/views/tracker/index.blade.php -->

@extends('layouts.layout')

@section('content')
    <div class="btn-group btn-group-justified" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <a href="/import">
                <button type="button" class="btn btn-default btn-lg">Import</button>
            </a>
        </div>
        <div class="btn-group" role="group">
            <a href="/trackers">
                <button type="button" class="btn btn-lg btn-primary">All data</button>
            </a>
        </div>
        <div class="btn-group" role="group">
            <a href="/speakers">
                <button type="button" class="btn btn-lg btn-primary">Speakers</button>
            </a>
        </div>
    </div>
@endsection

