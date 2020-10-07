@extends('todos.layouts.master')
@section('content')
    
<div class="container">
     <div class="row">
        <a href="{{ url('/') }}" class="btn btn-secondary">All Subject</a>

        <div class="col-md-12">
          @if(Session::has('success'))
          <div class="alert alert-success">
              {{ Session::get('success') }}
              @php
                  Session::forget('success');
              @endphp
          </div>
          @endif
<form method="POST" action="{{ url('create') }}">
  {{ csrf_field() }}

  <div class="form-group">
    <label>Subject:</label>
    <input type="text" name="subject" class="form-control" placeholder="subject" id="subject">
    @if ($errors->has('subject'))
        <span class="text-danger">{{ $errors->first('subject') }}</span>
    @endif
</div>


<div class="form-group">
    <button class="btn btn-success btn-submit">Submit</button>
</div>
</form>
        </div>
    </div>
</div>
@endsection