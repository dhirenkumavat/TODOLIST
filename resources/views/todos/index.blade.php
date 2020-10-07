@extends('todos.layouts.master')

@section('content')
    
<div class="container">
     <div class="row">
         <a href="{{ url('/create') }}" class="btn btn-secondary">Add Subject</a>
        <div class="col-md-12">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

<ul class="list-group">
    @foreach ($listsubject as $item)
    <li class="list-group-item">{{$item->Subject}}
    <a class="btn btn-warning float-right" href="{{ url('/edit',$item->id) }}">Edit</a>
    <form action="{{ url('/destroy',$item->id) }}" method="post" class="float-right">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit">Delete</button>
      </form>   
</li>
   
    @endforeach
      
     
</ul>
        </div>
    </div>
</div>
@endsection