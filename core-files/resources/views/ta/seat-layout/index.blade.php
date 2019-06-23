@extends('layouts.agency')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>List Of Seat Layout <a href="{{ route('ta.get.seat-layout.create') }}" class="btn btn-sm btn-info mr-auto">Create Layout</a></h4>
        </div>
        <div class="card-body">
            <seat-layout layouts="{{ $seat_layouts }}"></seat-layout>
        </div>
    </div>
@endsection
