@extends('admin.layouts.apps')
@section('content')
   <!-- <div>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-1 pb-16">
              <div class="bg-white shadow-md rounded my-6 p-5">
                <form method="POST" action="{{ route('admin.categories.update',$category->id)}}">
                  @csrf
                  @method('put')
                  <div class="flex flex-col space-y-2">
                    <label for="title" class="text-gray-700 select-none font-medium">Title</label>
                    <input id="title" type="text" name="title" value="{{ old('title',$category->cat_name) }}"
                      placeholder="Enter title" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    />
                </div>
        
    
              
             
            </div>
        </main>
    </div>
</div> -->
@if(session('success'))
    <div id="success-message" class="alert alert-success" style="margin-left:250px;">
        {{ session('success') }}
    </div>
@endif

    <div class="card card-primary" style="margin-left:250px;">
              <div class="card-header">
                <h3 class="card-title">Edit Cateogory</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ route('admin.categories.update',$category->id)}}">
                  @csrf
                  @method('put')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Category</label>
                    <input type="text" name="cat_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Title" value="{{ old('tag_name',$category->cat_name) }}">
                  </div>
                

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>

            
@endsection
