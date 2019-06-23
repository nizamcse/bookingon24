@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h1>WELCOME TO <span class="text-danger">BOOKINGON24</span>{{ !Auth::user() ? ', PLEASE LOGIN TO PROCEED' : ' ADMIN DASHBOARD' }}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card mt-5">
                    <div class="card-body">
                        <h4><a href="{{ route('admin.get.users') }}">USERS <span class="text-success">{{ $users }}</span></a></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mt-5">
                    <div class="card-body">
                        <h4><a href="{{ route('admin.get.agents') }}">AGENTS <span class="text-success">{{ $agents }}</span></a></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mt-5">
                    <div class="card-body">
                        <h4><a href="{{ route('admin.get.transport-agencies') }}">TRANSPORT COMPANY <span class="text-success">{{ $transport_agencies }}</span></a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
