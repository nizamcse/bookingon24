@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Available Buses From <strong class="text-danger">{{ $from }}</strong> To <strong class="text-danger">{{ $to }}</strong></div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <th>SL</th>
                            <th>Operator Name</th>
                            <th>Departure Time</th>
                            <th>Arrival Time</th>
                            </thead>
                            <tbody>
                            @foreach($trips as $k => $trip)
                                <tr>
                                    <td>{{ $k+1 }}</td>
                                    <td>{{ $trip->line->transportAgency->name }}</td>
                                    <td>{{ $trip->departure_time }}</td>
                                    <td>{{ $trip->arrival_time }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
