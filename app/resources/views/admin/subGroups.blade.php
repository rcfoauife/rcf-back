@extends('layouts.admin')
@section('content')

            
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row" style="margin-top:50px;">
                        <div class="col-md-8 col-md-offset-2">

                            <!-- CONTACT LIST WIDGET -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h1 class="panel-title">Administrative Users</h1>         
                                    <div class="col-md-8 ">
                                                <form action="{{ url('/admin/users/search') }}" method="get">
                                                    {!! csrf_field() !!}
                                                    <div class="input-group-btn">
                                                        <input class="form-control" name="user">
                                                        <button href="" class="btn btn-primary">add</button>
                                                    </div>
                                                </form>
                                        </div>
                                </div>
                                <div class="panel-body ">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Admin </th>
                                                <th>roles 
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($users as $user)
                                                @if($user->roles->count() > 0)
                                                    <tr>
                                                        <td>
                                                            <span class="contacts-title">{{$user->name}}</span>
                                                        </td>
                                                        <td>
                                                            @foreach($user->roles as $role)
                                                            <div class="btn-group" style="margin-left:10px; margin-bottom:3px;" >
                                                                <button class="btn btn-default " >
                                                                    {{$role->name}}
                                                                </button>
                                                            </div>
                                                            
                                                            @endforeach
                                                            <div class="btn-group" style="margin-left:50px; margin-bottom:3px;" >
                                                                <a href="{{ url('/admin/users/addRole') }}" class="btn btn-danger " >
                                                                    Edit
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @else
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>                                
                                </div>
                            </div>
                            <!-- END CONTACT LIST WIDGET -->

                        </div>
                    </div>
                
                </div>
                <!-- END PAGE CONTENT WRAPPER -->           

@endsection()