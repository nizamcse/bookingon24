@extends('layouts.agency')

@section('content')
    <form action="{{ route('ta.post.partner.create') }}" method="post">
        @csrf
        <div class="card mb-3">
            <div class="card-header">General Information</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Partner Name *</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Partner Email *</label>
                            <input type="text" name="email" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Partner Phone</label>
                            <input type="text" name="phone" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Partner Contact No</label>
                            <input type="text" name="contact_no" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Contact Person</label>
                            <input type="text" name="contact_person" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Contact Person Designation</label>
                            <input type="text" name="contact_person_designation" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>TIN</label>
                            <input type="text" name="tin" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Trade License No</label>
                            <input type="text" name="trade_license_no" class="form-control" required>
                        </div>
                    </div>



                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header">Partner Address</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>City</label>
                            <input type="text" name="city" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>State/Division</label>
                            <input type="text" name="state" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Zip Code</label>
                            <input type="text" name="zip_code" class="form-control" required>
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
