@extends('layouts.agency')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>
                LIST OF PRODUCTS
                <button type="button" class="btn btn-sm pull-right btn-info" data-toggle="modal" data-target="#product-modal">
                    <i class="fa fa-plus-circle"></i> CREATE NEW
                </button>
            </h3>
        </div>
        <div class="card-body">
            <table id="products-table" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Created By</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $k => $product)
                    <tr>
                        <td>{{ $k+1 }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->createdBy() }}</td>
                        <td class="text-right">
                            <button data-id="{{ $product->id }}" class="btn btn-warning btn-xs flat btn-edit" data-toggle="modal" data-target="#edit-product"><i class="fa fa-edit" ></i>Edit</button>
                            <button data-url="{{ route('delete-product',['id' => $product->id]) }}" class="btn btn-danger btn-xs flat btn-delete" data-toggle="modal" data-target="#delete-content-modal"><i class="fa fa-trash-o"></i>Delete</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade in" id="product-modal" tabindex="-1" role="dialog" aria-labelledby="product">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ route('create-product') }}" method="post">
                    {{ csrf_field() }}
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel1">CREATE PRODUCT</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name" class="control-label">Name *</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label>Category</label>
                            <select name="category_id" class="form-control">
                                <option value="">Select Category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Unit</label>
                            <select name="unit_id" class="form-control">
                                <option value="">Select Unit</option>
                                @foreach($units as $unit)
                                    <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                                @endforeach
                            </select>
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
    <div class="modal fade in" id="edit-product" tabindex="-1" role="dialog" aria-labelledby="edit-product">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="#" id="edit-product-form" method="post">
                    {{ csrf_field() }}
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel1">UPDATE PRODUCT</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name" class="control-label">Name *</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label>Category</label>
                                <select name="category_id" class="form-control">
                                    <option value="">Select Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Unit</label>
                                <select name="unit_id" class="form-control">
                                    <option value="">Select Unit</option>
                                    @foreach($units as $unit)
                                        <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                                    @endforeach
                                </select>
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
            var url = "{{ route('product',['id' => '']) }}/";
            $(document).on('click','.btn-edit',function () {
                console.log("Hello");
                var id = $(this).data('id');
                var api_url = url +id;

                $.ajax({url: api_url, success: function(result){
                        $("#edit-product-form").attr('action',api_url);
                        $("#edit-product-form input[name='name']").val(result.name);
                    }});
            });

            $('#products-table').DataTable()
        });
    </script>
@endsection
