@extends('admin.layouts.apps')
@section('content')

    @if(session('success'))
    <div id="success-message" class="alert alert-success" style="margin-left:250px;">
        {{ session('success') }}
    </div>
@endif

    <div class="card card-primary" style="margin-left:250px;">
              <div class="card-header">
                <h3 class="card-title">Add Tag</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ route('admin.tags.store') }}" enctype="multipart/form-data">
                  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tag Name</label>
                    <input type="text" name="tag_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Tag name">
                  </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>

            
@endsection


