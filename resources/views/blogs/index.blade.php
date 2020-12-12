<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

@extends('blogs.layout')        {{-- import layout.blade.php --}}
 
@section('content')             {{-- add this to section content --}}

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right" id="creatediv">
                <a class="btn-floating btn-large waves-effect waves-light blue" href="{{ route('blogs.create') }}"><i class="fas fa-plus-circle"></i></a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered animate__animated animate__fadeInDown">
        <tr>
            <th>No</th>
            <th>Names</th>
            <th>Quotes</th>
            <th width="250px">Actions</th>
        </tr>
        @foreach ($blogs as $blog)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $blog->title }}</td>
            <td>{{ $blog->description }}</td>
            <td>
                <form action="{{ route('blogs.destroy',$blog->id) }}" method="POST" class="actionlinks">
   
                    <a class="btn btn-outline-info" href="{{ route('blogs.show',$blog->id) }}"><i class="far fa-eye"></i></a>
    
                    <a class="btn btn-outline-primary" href="{{ route('blogs.edit',$blog->id) }}"><i class="far fa-edit"></i></a>
   
                    @csrf   {{-- Cross-Site Request Forgery --}}
                    
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
@endsection