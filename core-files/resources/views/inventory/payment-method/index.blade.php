@extends('layouts.agency')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>
                LIST OF PAYMENT METHODS
                <button type="button" class="btn btn-sm pull-right btn-info" data-toggle="modal" data-target="#payment-method-modal">
                    <i class="fa fa-plus-circle"></i> CREATE NEW
                </button>
            </h3>
        </div>
        <div class="card-body">
            <table id="categories-table" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Created By</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($payment_methods as $k => $payment_method)
                    <tr>
                        <td>{{ $k+1 }}</td>
                        <td>{{ $payment_method->name }}</td>
                        <td>{{ $payment_method->createdBy() }}</td>
                        <td class="text-right">
                            <button data-id="{{ $payment_method->id }}" class="btn btn-warning btn-xs flat btn-edit" data-toggle="modal" data-target="#edit-payment-method"><i class="fa fa-edit" ></i>Edit</button>
                            <button data-url="{{ route('delete-payment-method',['id' => $payment_method->id]) }}" class="btn btn-danger btn-xs flat btn-delete" data-toggle="modal" data-target="#delete-content-modal"><i class="fa fa-trash-o"></i>Delete</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade in" id="payment-method-modal" tabindex="-1" role="dialog" aria-labelledby="payment-method">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ route('create-payment-method') }}" method="post">
                    {{ csrf_field() }}
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel1">CREATE CATEGORY</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name" class="control-label">Name *</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-sm btn-flat" data-dismiss="modal">CLOSE</button>
                        <button type="submit" class="btn btn-primary btn-sm btn-flat">CREATE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade in" id="edit-payment-method" tabindex="-1" role="dialog" aria-labelledby="edit-payment-method">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="#" id="edit-payment-method-form" method="post">
                    {{ csrf_field() }}
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel1">UPDATE CATEGORY</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name" class="control-label">Name *</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-sm btn-flat" data-dismiss="modal">CLOSE</button>
                        <button type="submit" class="btn btn-primary btn-sm btn-flat">UPDATE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $(document).on('ready',function () {
            console.log("Hello");
            var url = "{{ route('payment-method',['id' => '']) }}/";
            $(document).on('click','.btn-edit',function () {
                console.log("Hello");
                var id = $(this).data('id');
                var api_url = url +id;

                $.ajax({url: api_url, success: function(result){
                        $("#edit-payment-method-form").attr('action',api_url);
                        $("#edit-payment-method-form input[name='name']").val(result.name);
                    }});
            });

            $('#categories-table').DataTable()
        });
    </script>
@endsection
