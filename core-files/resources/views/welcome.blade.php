@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Search Available Buses</div>

                    <div class="card-body">
                        <form action="#">
                            <div class="form-group">
                                <label for="from">From</label>
                                <input type="text" class="form-control" name="from" id="from" autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label for="to">To</label>
                                <input type="text" class="form-control" name="to" id="to" autocomplete="off">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group" style="position: relative">
                                        <label for="journey-date">Journey Date</label>
                                        <input type="date" class="form-control" name="journey_date" id="journey-date">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="return-date">Return Date</label>
                                        <input type="date" class="form-control" name="return_date" id="return-date">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="bus-company">Bus Company</label>
                                <select name="bus_company_id" id="bus-company" class="form-control">
                                    <option value="">Select Bus Company</option>
                                    @foreach($transport_companies as $transport_company)
                                        <option value="{{ $transport_company->id }}">{{ $transport_company->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-block btn-success">SEARCH</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection

@section('styles')
    <style>
        .twitter-typeahead{
            display: block !important;
            width: 100%;
        }
        .tt-menu{
            width: 100%;
            background-color: #fff;
        }
        .tt-suggestion{
            cursor: pointer;
            padding: 1rem 0.375rem;
            border-bottom: 1px solid #f8f9fa;
        }
    </style>
@endsection