@extends('admin.layouts.apps')
@section('content')

<div class="card">
  <div class="card-header">
    <h3 class="card-title">DataTable with default features</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body" style="margin-left: 250px;">

  <div class="text-right">
            @can('Post create')
              <a href="{{route('admin.categories.create')}}" class="bg-blue-500 text-blue font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors ">New Category</a>
            @endcan
          </div>
  @if(session('success'))
    <div class="alert alert-success" id="success-message-container">
        {{ session('success') }}
    </div>
@endif
<br>

    <div class="table-responsive">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Title</th>
          
            {{-- <th>Description</th> --}}
            <th>Actions</th>


          </tr>
        </thead>
        <tbody>
        @can('Post access')
                @foreach($categories as $category)
          <tr>
            <td>{{ $category->cat_name }}</td>
            {{-- <td>{{ $category->cat_description }}</td> --}}
            {{-- <td class="py-4 px-6 border-b border-grey-light">
                      @if($category->publish)
                      <span class="text-blue inline-flex items-center justify-center px-2 py-1 mr-2 text-xs font-bold leading-none text-blue bg-green-500 rounded-full">Publish</span>
                      @else
                      <span class="inline-flex items-center justify-center px-2 py-1 mr-2 text-xs font-bold leading-none text-blue bg-gray-500 rounded-full">Draft</span>
                      @endif
                  </td> --}}
                  <td class="py-4 px-6 border-b border-grey-light text-right">

                    @can('Category edit')
                    <a href="{{route('admin.categories.edit',$category->id)}}" class="btn btn-info" style="margin-right: 150px;">Edit</a>
                    @endcan

                    @can('Category delete')
                    <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" class="inline">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" style="margin-top:-40px; margin-left: 50px;">Delete</button>
                    </form>
                    @endcan
                  </td>
          </tr>
          @endforeach
                    @endcan


          <!-- Add more table rows as needed -->
        </tbody>
      </table>
    </div>
  </div>
  <!-- /.card-body -->
</div>

@endsection

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
    });
  });
</script>
