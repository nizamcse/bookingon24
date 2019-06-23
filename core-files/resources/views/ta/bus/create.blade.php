@extends('layouts.agency')

@section('content')
    <form action="{{ route('ta.post.bus.create') }}" method="post">
        @csrf
        <div class="card mb-3">
            <div class="card-header">Bus Information</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="sku">SKU (Unique ID)</label>
                            <input type="text" name="sku" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="added_on">Bus Added On</label>
                            <input type="date" name="added_on" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="journey_start_from">Journey Start From</label>
                            <input type="date" name="journey_start_from" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="model">Model</label>
                            <input type="text" name="model" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Partner (If Needed) *</label>
                            <select name="partner_id" id="partner_id" class="form-control">
                                <option value="">Select Partnet</option>
                                @foreach($partners as $partner)
                                    <option value="{{ $partner->id }}">{{ $partner->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Vehicle Type *</label>
                            <select name="bus_type_id" id="bus_type_id" class="form-control">
                                <option value="">Select Vehicle Type</option>
                                @foreach($vehicle_types as $vehicle_type)
                                    <option value="{{ $vehicle_type->id }}">{{ $vehicle_type->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="layout-id">Seat Layout</label>
                            <select name="seat_layout_id" id="layout-id" class="form-control">
                                <option value="">Select Layout</option>
                                @foreach($layouts as $layout)
                                    <option value="{{ $layout->id }}">{{ $layout->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-check mt-5">
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
