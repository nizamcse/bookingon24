@extends('layouts.agency')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active">
                        {{ $transport_agency->name }}
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                    <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
                    <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                    <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h4>GENERAL INFORMATION</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <strong>Company Name: </strong> {{ $transport_agency->name }}
                            </div>
                            <div class="col-md-4">
                                <strong>Email: </strong> {{ $transport_agency->email }}
                            </div>
                            <div class="col-md-4">
                                <strong>Contact No: </strong> {{ $transport_agency->contact_no }}
                            </div>
                            <div class="col-md-4">
                                <strong>Division: </strong> {{ $transport_agency->state }}
                            </div>
                            <div class="col-md-4">
                                <strong>City: </strong> {{ $transport_agency->city }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>CONTACT PERSON INFORMATION</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <strong>Name: </strong> {{ $transport_agency->contact_person }}
                            </div>
                            <div class="col-md-4">
                                <strong>Designation: </strong> {{ $transport_agency->contact_person_designation }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>ACCOUNT INFORMATION</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <strong>Account Holder Name: </strong> {{ $transport_agency->account ? $transport_agency->account->name : '' }}
                            </div>
                            <div class="col-md-4">
                                <strong>Email: </strong> {{ $transport_agency->account ? $transport_agency->account->email : '' }}
                            </div>
                            <div class="col-md-4">
                                <strong>Contact No: </strong> {{ $transport_agency->account ? $transport_agency->account->contact_no : '' }}
                            </div>
                            <div class="col-md-4">
                                <strong>Account Created At: </strong> {{ $transport_agency->account ? $transport_agency->account->created_at : '' }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
