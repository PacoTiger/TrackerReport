<!-- resources/views/tracker/index.blade.php -->

@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">


            </div>

            <!-- Current Tasks -->
            @if (count($speakers) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Current Tasks
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">

                            <!-- Table Headings -->
                            <thead>
                            <th>Task</th>
                            <th>&nbsp;</th>
                            </thead>

                            <!-- Table Body -->
                            <tbody>
                            @foreach ($speakers as $speaker)
                                <tr>
                                    <!-- Task Name -->
                                    <td class="table-text">
                                        <div>{{ $speaker->speaker }}</div>
                                    </td>

                                    <!-- Delete Button -->
                                    <td>

                                        <form action="{{ url('speakers/'.$speaker->id) }}" method="GET">



                                            <button type="submit" id="delete-task-{{ $speaker->id }}" class="btn btn-danger">
                                                <i class="fa fa-btn fa-trash"></i>Info
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection

