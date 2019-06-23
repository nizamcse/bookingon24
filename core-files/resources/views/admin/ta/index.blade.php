@extends('layouts.admin')

@section('content')
    <div class="container">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Agency Name</th>
                    <th>Contact No</th>
                    <th>Contact Person</th>
                    <th>Division</th>
                    <th>City</th>
                </tr>
            </thead>
            <tbody>
            @foreach($transport_agencies as $k => $transport_agency)
                <tr>
                    <td>{{ $k+1 }}</td>
                    <td><a href="{{ route('transport-agency',['slug' => $transport_agency->slug]) }}">{{ $transport_agency->name }}</a></td>
                    <td>{{ $transport_agency->contact_no }}</td>
                    <td>{{ $transport_agency->contact_person }}</td>
                    <td>{{ $transport_agency->state }}</td>
                    <td>{{ $transport_agency->city }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
