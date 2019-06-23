@extends('layouts.agent')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h1>WELCOME TO <span class="text-danger">BOOKINGON24</span>{{ !Auth::user() ? ', PLEASE LOGIN TO PROCEED' : ' AGENT DASHBOARD' }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
