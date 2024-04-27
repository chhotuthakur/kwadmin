@extends('layouts.app')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Site Configuration</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('configure.save') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Website and App Title</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                                </div>
                                <div class="form-group">
                                    <label for="copyright">Copyright text</label>
                                    <input type="text" class="form-control" id="copyright" name="copyright" placeholder="Copyright text">
                                </div>
                            </div>
                            <!-- /.card-body -->
                        
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                        
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
@endsection
