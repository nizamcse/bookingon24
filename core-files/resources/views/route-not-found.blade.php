@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-body">
                        {{ $message }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection