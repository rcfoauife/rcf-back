@extends('layouts.app')
@section('content')

  <div class="formContainer" style="margin-top:150px;">  
     <div class="well">
        <h1>Thanks for your response</h1>
        <a href="{{ url('/edit') }}">you can return back to edit your details here</a>
     </div>   
  </div>
@endsection