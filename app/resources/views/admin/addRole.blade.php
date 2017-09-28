@extends('layouts.admin')
@section('content')

            
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row" style="margin-top:50px;">
                        <div class="col-md-8 col-md-offset-2">

                            <!-- CONTACT LIST WIDGET -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h1 class="panel-title">add roles to {{$user->name}}</h1>         
                                    
                                </div>
                                <div class="panel-body ">
                                    <form method="post" action="{{ url('admin/user/update') }}">
                                        {!! csrf_field() !!}
                                    <div class="well" style="padding-bottom:40px;">
                                        <input type="hidden" name="user_id" value="{{$user->id}}">
                                        <div class="form-group ">
                                            <div class="col-md-3" >
                                                <label class="text" ><input type="checkbox" class="iradio" name="1"/> blogger</label>
                                            </div>
                                            <div class="col-md-3" >
                                                <label class="text" ><input type="checkbox" class="iradio" name="2"/> upload</label>
                                            </div>
                                            <div class="col-md-3" >
                                                <label class="text" ><input type="checkbox" class="iradio" name="3"/> admin</label>
                                            </div>
                                            <div class="col-md-3" >
                                                <label class="text" ><input type="checkbox" class="iradio" name="4"/> Sub-Group</label>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        
                                        <div class="col-md-4" style="margin-top:20px;">
                                            <label class="text" ><input type="checkbox" class="iradio" name="5"/> leader</label>
                                            <input type="text" class="form-control" name="6" placeholder="name">
                                        </div>
                                    </div>
                                    <div class="form-group" >
                                        <div class="col-md-12" style="margin-top:50px;">                               
                                            <button class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </form>
                                </div>
                            </div>
                            <!-- END CONTACT LIST WIDGET -->

                        </div>
                    </div>
                
                </div>
                <!-- END PAGE CONTENT WRAPPER -->           

@endsection()