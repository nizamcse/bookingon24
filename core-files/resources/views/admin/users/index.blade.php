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
            @foreach($users as $k => $user)
                <tr>
                    <td>{{ $k+1 }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->contact_no }}</td>
                    <td>{{ $user->created_at->diffForHumans() }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
