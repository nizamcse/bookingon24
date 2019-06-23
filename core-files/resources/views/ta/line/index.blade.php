@extends('layouts.agency')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>List Of Avaiable Routes <a href="{{ route('ta.get.line.create') }}" class="btn btn-sm btn-info mr-auto">Create Line</a></h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>SL</th>
                    <th>Line Name</th>
                    <th>Departure</th>
                    <th>Arrival</th>
                    <th>Description</th>
                </tr>
                </thead>
                <tbody>
                @foreach($lines as $k => $line)
                    <tr>
                        <td>{{ $k+1 }}</td>
                        <td>{{ $line->name }}</td>
                        <td>{{ $line->departureStation->name }}</td>
                        <td>{{ $line->arrivalStation->name }}</td>
                        <td>{{ $line->description }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
