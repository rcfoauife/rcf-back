@extends('layouts.admin')
@section('content')

            
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row" style="margin-top:50px;">
                        <div class="col-md-8 col-md-offset-2">

                            <!-- CONTACT LIST WIDGET -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                            
                                    @if($users->count() > 0)
                                        @foreach($users as $user)
                                        <a href="{{ url('admin/users/addRole',[$user->id]) }}">{{$user->name}}</a>
                                        @endforeach
                                    @endif
                                </div>
                                
                            </div>
                            <!-- END CONTACT LIST WIDGET -->

                        </div>
                    </div>
                
                </div>
                <!-- END PAGE CONTENT WRAPPER -->           

@endsection()