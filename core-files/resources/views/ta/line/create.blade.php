@extends('layouts.agency')

@section('content')
    <form action="{{ route('ta.post.line.create') }}" method="post">
        @csrf
        <div class="card mb-3">
            <div class="card-header">Line Information</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="name">Line Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>From Location*</label>
                            <select name="departure_station" id="departure_station" class="form-control">
                                <option value="">Select Location</option>
                                @foreach($locations as $location)
                                    <option value="{{ $location->id }}">{{ $location->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>To Location*</label>
                            <select name="arrival_station" id="arrival_station" class="form-control">
                                <option value="">Select Location</option>
                                @foreach($locations as $location)
                                    <option value="{{ $location->id }}">{{ $location->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="desciption">Description</label>
                            <textarea name="description" id="description" cols="30" rows="4" class="form-control"></textarea>
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
