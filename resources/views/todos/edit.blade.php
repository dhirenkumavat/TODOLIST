
    @extends('todos.layouts.master')

    @section('content')
        
    <div class="container">
         <div class="row">
         
            <div class="col-md-12">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ url('/edit',$items->id) }}">
                @csrf    
      <div class="form-group">
        <label>Subject:</label>
        <input type="text" class="form-control" id="subject" placeholder="Enter Subject" name="subject" value="{{ $items->Subject }}">        @if ($errors->has('subject'))
            
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







