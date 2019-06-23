@extends('layouts.app')

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

                        <h1>WELCOME TO <span class="text-danger">BOOKINGON24</span>{{ !Auth::user() ? ', PLEASE LOGIN TO PROCEED' : ' ADMIN DASHBOARD' }}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="#">
                    <div class="row justify-content-center">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="from">From</label>
                                <input type="text" name="from" id="from">
                                <input type="hidden" name="from_id">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="to">To</label>
                                <input type="text" name="to" id="to">
                                <input type="hidden" name="to_id">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
