@extends('admin.layouts.app')
@section('title')
    {{ trans('main.Testimonial') }}
@endsection
@section('css')
    <style>
        .form-label {
            color: #777;
            font-size: 18px;
            letter-spacing: 1.5px;
        }

        .check {
            border-radius: 15px;
            background: #f8f8f8;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .c {
            margin-bottom: 10px
        }
    </style>
@endsection
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Add New Order</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form method="POST" action="{{ route('testimonial.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <div class="row mb-4">
                                    <div class = "col"><label class="form-label">Name</label> <br>
                                        <input class="form-control" name="name" type="text"
                                            value="{{ old('name') }}">
                                    </div>
                                    <div class = "col"><label class="form-label">Address</label> <br>
                                        <input class="form-control" name="address" type="text"
                                            value="{{ old('address') }}">
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class = "col"><label class="form-label">description</label> <br>
                                        <textarea class="form-control c" name="description" id="editor" value="{{ old('description') }}" rows="3"></textarea>
                                    </div>
                                </div>

                                <div class="row mb-4 border rounded-lg p-3">
                                    <div class="col"><label class="form-label" for="file">Image</label> <br>
                                        <input type="file" name="image" id="file" required>
                                    </div>
                                    <div class="col"><label class="form-label" for="range">Rate</label> <br>
                                        <input type="range" name="rate" id="range" class="form-control-range"
                                            required>
                                    </div>
                                </div>

                            </div>
                            <button class="btn btn-success">Submit</button>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection

@section('title_page')
    {{ trans('main.Testimonial') }}
@endsection

@section('js')
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
    <script>
        $(function() {
            $("#example1").DataTable();
            // $('#example2').DataTable({
            //     "paging": true,
            //     "lengthChange": false,
            //     "searching": false,
            //     "ordering": true,
            //     "info": true,
            //     "autoWidth": false,
            // });
        });
    </script>
@endsection
