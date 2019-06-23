@extends('layouts.agency')

@section('content')

    <form action="{{ route('ta.post.trip.create') }}" method="post">
        @csrf
        <div class="card mb-3">
            <div class="card-header">Trip Information</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="sel1">Line</label>
                            <select class="form-control text-center" id="line-id" name="line_id" required>
                                <option value="">Select Line</option>
                                @foreach($lines as $line)
                                    <option value="{{ $line->id }}">{{ $line->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="buss-id">Bus</label>
                            <select class="form-control text-center" id="bus-id" name="bus_id" required>
                                <option value="">Select Bus</option>
                                @foreach($buses as $bus)
                                    <option value="{{ $bus->id }}">{{ $bus->model }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="operational_interval_id">Operational Interval</label>
                            <select class="form-control text-center" id="operational_interval_id" name="operational_interval_id">
                                <option value="">Select Operational Interval</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="departure_time">Departure Time</label>
                            <pick-time :input-name="'departure_time'"></pick-time>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="arrival_time">Arrival Time</label>
                            <pick-time :input-name="'arrival_time'"></pick-time>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="ticket-price">Ticket Price</label>
                            <input type="number" min="1" class="form-control" id="ticket-price" name="ticket_price" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-check">
                            <input type="checkbox" name="air_condition" value="1" class="form-check-input" id="air_condition">
                            <label class="form-check-label" for="air_condition">Air Conditioned</label>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="form-group text-right">
            <button class="btn btn-info" type="submit">CREATE</button>
        </div>
    </form>



@endsection
