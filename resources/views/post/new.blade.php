@extends('admin.layouts.apps')
@section('content')
   <!-- <div class="container mx-auto" style="max-width: 800px;">
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-1 pb-16">
              <div class="bg-white shadow-md rounded my-6 p-5">
                <form method="POST" action="{{ route('admin.posts.store') }}" enctype="multipart/form-data">
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
                <h3 class="card-title">Add Post</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              {{-- <form method="POST" action="{{ route('admin.posts.store') }}" enctype="multipart/form-data"> --}}
              <form method="POST" action="{{ route('admin.blog-posts') }}" enctype="multipart/form-data">
                  @csrf
               <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Title</label>
              <input type="text" name="title" class="form-control" id="exampleInputEmail1" value="{{ old('slug') }}" placeholder="Enter Title">

              @if ($errors->has('slug'))
              <span class="invalid-feedback">{{ $errors->first('slug') }}</span>
          @endif
            </div>
            <div class="form-group">
              <label for="exampleInputMetaTitle">Meta Title</label>
              <input type="text" name="meta_title" class="form-control" id="exampleInputMetaTitle" placeholder="Enter Meta Title max 150 characters from main title">
            </div>
            <div class="form-group">
              <label for="exampleInputMetaTitle">Meta Description</label>
              <textarea name="meta_description" class="form-control" id="exampleInputMetaDescription" placeholder="Enter max 500 characters from starting description"></textarea>
            </div>
            <div class="form-group">
              {{-- <form name="myform">
              <label for="exampleInputMetaDescription">Meta Description</label>
              <textarea name="limitedtextarea" class="form-control"  onKeyDown="limitText(this.form.limitedtextarea,this.form.countdown,200);" 
              onKeyUp="limitText(this.form.limitedtextarea,this.form.countdown,200); "  placeholder="Enter max 500 characters from starting description">
              </textarea><br>
              <font size="1">(Maximum characters: 200)<br>
              You have <input readonly type="text" name="countdown" size="6" value="200" > characters left.</font>
              </form>
            </div> --}}
            <div class="form-group">
              <label for="exampleInputMetaKeywords">Meta Keywords</label>
              <input type="text" name="meta_keywords" class="form-control" id="exampleInputMetaKeywords" placeholder="Enter Meta Keywords like: SEO, IT, BLOGS">
            </div>
            <div class="form-group">
              <label for="exampleInputMetaKeywords">Category</label>
              <select name="cat_id" id="cat" class="form-control" required> 
                <option value="">--Select Category--</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->cat_name }}</option>
                @endforeach
            </select>
            </div>

            
            {{-- <div class="form-group">
              <label for="exampleInputMetaKeywords">Tag</label>
              <select name="tag" id="cat" class="form-control" required> 
                <option value="">--Select Tag--</option>
                @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->tag_name }}</option>
                @endforeach
            </select>
            </div>
          </div>
                     --}}
               
                  {{-- <div class="form-group">
                   <label for="exampleInputPassword1">Description</label>
                    <!-- 
                    <textarea name="description" class="form-control" id="exampleInputPassword1" placeholder="Enter Description"> </textarea> -->
                  </div> --}}
                           <div class="form-group" >
            <label for="exampleInputFile">Upload File</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="image" class="custom-file-input" id="exampleInputFile" onchange="previewImage(event)">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    <span class="input-group-text">Upload</span>
                </div>
                {{-- <div class="input-group-append">
                  
                </div> --}}
            </div>
        </div>


        <div class="preview-container">
            <img id="preview" src="#" alt="Preview" style="display: none; max-width: 200px; max-height: 500px!important;">
        </div> 



  
   {{-- <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script> --}}

  
    <textarea name="description" id="editor" sytle="height: 350px;">
       
    </textarea>
    {{-- <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>  --}}
    {{-- <div class="form-group">
      <label for="description" class="col-form-label">Description</label>
      <textarea class="form-control" id="description" name="description">{{old('description')}}</textarea>
      @error('description')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div> --}}


    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script> --}}
{{-- 
<div class="editor-container" style="margin-left:22px!important;">
    <textarea  name="description" id="editor" rows="11" cols="50"></textarea>
</div> --}}




<div class="card-footer">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>


<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<style>
  /* .editor-container {
    height: 416px; /* Adjust the height as needed */
    overflow: hidden;
    border: 1px solid #ccc; Optional styling
    padding: 10px; /* Optional styling */
} */
#editor {
    resize: vertical;
    min-height: 200px!important; /* Adjust the minimum height as needed */
}


</style>
</body>
</html>
                </div>
                <!-- /.card-body -->

              
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

<script language="javascript" type="text/javascript">
  function limitText(limitField, limitCount, limitNum) {
    if (limitField.value.length > limitNum) {
      limitField.value = limitField.value.substring(0, limitNum);
    } else {
      limitCount.value = limitNum - limitField.value.length;
    }
  }
  </script>



