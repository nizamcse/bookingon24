@extends('layouts.agency')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>List Of Partners <a href="{{ route('ta.get.partner.create') }}" class="btn btn-sm btn-info mr-auto">Create Partner</a></h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>SL</th>
                    <th>Partner Name</th>
                    <th>Contact No</th>
                    <th>Contact Person</th>
                    <th>Division</th>
                    <th>City</th>
                </tr>
                </thead>
                <tbody>
                @foreach($partners as $k => $partner)
                    <tr>
                        <td>{{ $k+1 }}</td>
                        <td><a href="#">{{ $partner->name }}</a></td>
                        <td>{{ $partner->contact_no }}</td>
                        <td>{{ $partner->contact_person }}</td>
                        <td>{{ $partner->state }}</td>
                        <td>{{ $partner->city }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
