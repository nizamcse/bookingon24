@extends('layouts.agency')

@section('content')
    <div class="card mb-3">
        <div class="card-body">
            <h4>PASSENGER INFORMATION</h4>
            <table class="table table-bordered mb-3">
                <thead>
                <tr>
                    <th>Passenger Name: {{ $customer_name }}</th>
                    <th>Contact No: {{ $customer_contact_no }}</th>
                    <th>Gender: {{ $gender ==1 ? 'Male' : 'Female' }}</th>
                </tr>
                </thead>
            </table>
            <h4>COACH INFORMATION</h4>
            <table class="table table-bordered mb-3">
                <thead>
                <tr>
                    <th>TRIP NO: XXXXX</th>
                    <th>
                        SEATS:
                        @foreach($ticket_no as $k => $seat)
                            {{ $seat }} {{ $k+1 < count($ticket_no) ? ',' : '' }}
                        @endforeach
                    </th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection
