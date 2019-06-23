@extends('layouts.agency')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>List Of Partners <a href="{{ route('ta.get.bus.create') }}" class="btn btn-sm btn-info mr-auto">Create Bus</a></h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>SL</th>
                    <th>Bus Owner</th>
                    <th>Model</th>
                    <th>Bus Type</th>
                    <th>Air Conditioned</th>
                    <th>Journey Starts Date</th>
                </tr>
                </thead>
                <tbody>
                @foreach($buses as $k => $bus)
                    <tr>
                        <td>{{ $k+1 }}</td>
                        <td><a href="#">{{ $bus->owner() }}</a></td>
                        <td>{{ $bus->model }}</td>
                        <td>{{ $bus->busType->name }}</td>
                        <td>{{ $bus->air_condition ? 'AC' : 'NON AC' }}</td>
                        <td>{{ $bus->journey_start_from }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
