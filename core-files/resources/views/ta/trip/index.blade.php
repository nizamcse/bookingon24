@extends('layouts.agency')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>List Of Trips <a href="{{ route('ta.get.trip.create') }}" class="btn btn-sm btn-info mr-auto">Create Trip</a></h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>SL</th>
                    <th>BUS</th>
                    <th>Route</th>
                    <th>Departure At</th>
                    <th>Arrival At</th>
                    <th>Price</th>
                    <th>Total Seat</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($trips as $k => $trip)
                        <tr>
                            <td>{{ $k+1 }}</td>
                            <td>{{ $trip->bus->model }}</td>
                            <td>
                                {{ $trip->line->departureStation->name }} -
                                {{ $trip->line->arrivalStation->name }}
                            </td>
                            <td>{{ $trip->departure_time }}</td>
                            <td>{{ $trip->arrival_time }}</td>
                            <td>{{ $trip->ticket_price }}</td>
                            <td>{{ $trip->bus->seatLayout ? $trip->bus->seatLayout->number_of_seat : 'N/A' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
