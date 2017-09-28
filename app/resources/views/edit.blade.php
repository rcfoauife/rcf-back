@extends('layouts.app')
@section('content')
<div class="formContainer">  
    <form id="contact" action="" method="post">
    
      <h3> Sign in to edit your details</h3>
      <h4 class="alert alert-info"> Use the email provided on registration, as both email and password</h4>
      
      <fieldset>
          <div class="col-md-12">
            <input id="email" type="email" class="form-control" tabindex="1" name="email" value="{{ old('email') }}" required autofocus>
              @if ($errors->has('email'))
                <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
              @endif
          </div>
      </fieldset>
     
      <fieldset>
        <div class="col-md-12">
            <input id="password" tabindex="2" type="password" class="form-control" name="password" required>
              @if ($errors->has('password'))
                  <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
        </div>
      </fieldset>
 
      
      <fieldset >
        <input type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <span><label>remember me</label></span>

      </fieldset>
      <fieldset>
        <button name="submit" type="submit" class="btn-block" style="width:100%;" >Submit</button>
      </fieldset>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <p class="copyright pull-right">Powered by RCFOAU ICT</p>
    </form>
  </div>
@endsection