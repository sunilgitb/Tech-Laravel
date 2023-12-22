@extends('admin.layouts.apps')
@section('content')
   <!-- <div class="container mx-auto" style="max-width: 800px;">
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-1 pb-16">
              <div class="bg-white shadow-md rounded my-6 p-5">
                <form method="POST" action="{{ route('admin.categories.store') }}" enctype="multipart/form-data">
                  @csrf
                  <div class="flex flex-col space-y-2">
                    <label for="title" class="text-gray-700 select-none font-medium">Title</label>
                    <input id="title" type="text" name="title" value="{{ old('title') }}"
                      placeholder="Enter title" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    />
                </div>

                <div class="flex flex-col space-y-2">
                    <label for="description" class="text-gray-700 select-none font-medium">Description</label>
                    <textarea name="description" id="description" placeholder="Enter description" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200" rows="5">{{ old('description') }}</textarea>
                </div>
                <div class="flex flex-col space-y-2">
                    <label for="image" class="text-gray-700 select-none font-medium">image</label>
                    <input type="file" name="image" id="image" placeholder="Enter image" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200" rows="5">
                </div>

                <h3 class="text-xl my-4 text-gray-600">Role</h3>
                <div class="grid grid-cols-3 gap-4">
                  <div class="relative inline-flex">
                    <select class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none" name="publish">
                      <option value="0">Draft</option>
                      <option value="1">Publish</option>
                    </select>
                  </div>
                </div>
                <div class="text-center mt-16 mb-16">
                  <button type="submit" class="btn btn-info">Submit</button>
                </div>
              </div>


            </div>
        </main>
    </div> -->

    @if(session('success'))
    <div id="success-message" class="alert alert-success" style="margin-left:250px;">
        {{ session('success') }}
    </div>
@endif

    <div class="card card-primary" style="margin-left:250px;">
              <div class="card-header">
                <h3 class="card-title">Add Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ route('admin.categories.store') }}" enctype="multipart/form-data">
                  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Category Name</label>
                    <input type="text" name="cat_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Category name">
                  </div>
                    
               
                  {{-- <div class="form-group">
                   <label for="exampleInputPassword1">Description</label>
                    <!-- 
                    <textarea name="description" class="form-control" id="exampleInputPassword1" placeholder="Enter Description"> </textarea> -->
                  </div> --}}
            {{-- <div class="form-group">
            <label for="exampleInputFile">Upload File</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="image" class="custom-file-input" id="exampleInputFile" onchange="previewImage(event)">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                </div>
            </div>
        </div> --}}
        {{-- <div class="preview-container">
            <img id="preview" src="#" alt="Preview" style="display: none; max-width: 200px; max-height: 200px;">
        </div>  --}}



  
    <!-- <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>

  
    <textarea name="description" id="editor" sytle="height: 350px;">
       
    </textarea>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script> -->

    
</body>
</html>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>

            
@endsection


<script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>

    
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
  </script>
<script>
    function previewImage(event) {
        var input = event.target;
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                var previewElement = document.getElementById('preview');
                previewElement.src = e.target.result;
                previewElement.style.display = 'block';
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

<script>
    // Wait for the document to be ready
    document.addEventListener('DOMContentLoaded', function() {
        // Get the success message element
        const successMessage = document.getElementById('success-message');
        
        // Check if the success message exists
        if (successMessage) {
            // Hide the success message after 2 seconds
            setTimeout(function() {
                successMessage.style.display = 'none';
            }, 3000);
        }
    });
</script>

