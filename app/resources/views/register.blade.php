@extends('layouts.app')
@section('content')

  <div class="formContainer">  
     
    <form id="contact" action="{{ url('/newUser') }}" method="post">
      {!! csrf_field() !!}
      <h3> Biodata form</h3>
      <h4> please fill your details below, to improve our database</h4>
      @if (count($errors) > 0)
      <div class="alert alert-info" style="margin-top:15px;">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
     @endif
      <fieldset>
        <input placeholder="name" type="text" tabindex="1" name="name" required autofocus>
      </fieldset>
     
      <fieldset>
        <input placeholder="Email Address" name="email" type="email" tabindex="2" required>
      </fieldset>
      
      <fieldset>
        <input placeholder="Phone Number " name="phone" type="tel" tabindex="3" required>
      </fieldset>
      
      <fieldset>
        <input placeholder="Address" name="address" type="tel" tabindex="4" required>
      </fieldset>
      
      <fieldset>
        <input type="radio" value="male" name="sex">&nbsp;&nbsp;<span>male</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="sex" value="female" >&nbsp;&nbsp;<span>female</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        <input type='text' placeholder="birthday   day-month" id="datepicker" name="birth" style="width:30%;" />
      </fieldset>
      <fieldset>
          <select style="width:30%;" name="group_id">
            <option>sub-Group</option>
            @foreach($groups as $group)
              <option value="{{$group->id}}">{{$group->name}}</option>
            @endforeach
          </select>
          &nbsp;&nbsp;&nbsp;&nbsp;
          <select style="width:30%;" name="department">
            <option>department</option>
            @foreach($departments as $department)
              <option value="{{$department->name}}">{{$department->name}}</option>
            @endforeach
          </select>
              &nbsp;&nbsp;&nbsp;&nbsp;
          <select style="width:30%;" name="graduating">
            <option>Graduated / Graduating</option>
            @foreach($years as $year)
              <option value="{{$year->id}}">{{$year->session}}</option>
            @endforeach
          </select>
      </fieldset>
      <fieldset>
        <button name="submit" type="submit" id="contact-submit" >Submit</button>
      </fieldset>
      <p class="copyright pull-right">Powered by RCFOAU ICT</p>
    </form>
  </div>
@endsection