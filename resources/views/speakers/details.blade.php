<!-- resources/views/tracker/index.blade.php -->

@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">

            </div>

            <!-- Current Tasks -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Sumary
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">

                            <!-- Table Headings -->
                            <thead>
                            <th>Date</th>
                            <th>Name</th>
                            <th>Sum of Calls</th>
                            <th>Sum of Leads</th>
                            <th>Sum of Deals</th>
                            <th>Seconds per call</th>
                            </thead>

                            <!-- Table Body -->
                            <tbody>
                                <tr>
                                    <!-- Displaying Date -->
                                    <td class="table-text">
                                        <div>All Records</div>
                                    </td>

                                    <!-- Displaying Name -->
                                    <td class="table-text">
                                        <div>{{ $speaker }}</div>
                                    </td>

                                    <!-- Displaying Calls-->
                                    <td class="table-text">
                                        <div>{{ $sumCall }}</div>
                                    </td>

                                    <!-- Displaying Leads -->
                                    <td class="table-text">
                                        <div>{{ $sumLead }}</div>
                                    </td>

                                    <!-- Displaying Deals -->
                                    <td class="table-text">
                                        <div>{{ $sumDeal}}</div>
                                    </td>

                                    <!-- Displaying AVG seconds per call -->
                                    <td class="table-text">
                                        <div>{{ $avg }}</div>
                                    </td>
                                </tr>
                            </tbody>


                        </table>
                    </div>
                </div>

        </div>
    </div>
@endsection

