@extends('layouts.admin')

@section('content')
    <div class="container">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact No</th>
                <th>Account Created</th>
            </tr>
            </thead>
            <tbody>
            @foreach($agents as $k => $agent)
                <tr>
                    <td>{{ $k+1 }}</td>
                    <td>{{ $agent->name }}</td>
                    <td>{{ $agent->email }}</td>
                    <td>{{ $agent->contact_no }}</td>
                    <td>{{ $agent->created_at->diffForHumans() }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
