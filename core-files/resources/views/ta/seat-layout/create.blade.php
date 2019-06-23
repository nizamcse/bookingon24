@extends('layouts.agency')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Create Seat Layout</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('ta.post.seat-layout.create') }}" method="post">
                @csrf
                <create-seat-layout></create-seat-layout>
            </form>
        </div>
    </div>
@endsection
