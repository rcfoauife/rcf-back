@extends('layouts.admin')
@section('content')

                <div class="page-title">
                     
                </div>                   
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- START SEARCH -->                            
                            <div class="panel panel-default">
                                <div class="panel-body">                                    
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <form method="get" action="{{ url('admin/sort') }}">
                                                {!! csrf_field() !!}
                                            <fieldset>
                                                <div class="form-group">
                                                    <div class="col-md-2"> 
                                                        <label class="col-md-12 control-label">
                                                            <input type="checkbox" value="category" name="oalumni">category
                                                        </label>
                                                        <select class="form-control select" name="alumni">
                                                            <option value="1">alumni</option>
                                                            <option value="0">current</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-3"> 
                                                        <label class="col-md-12 control-label">
                                                            <input type="checkbox" value="grad" name="oYearOfGraduation">Graduating year
                                                        </label>
                                                        <select class="form-control select" name="YearOfGraduation">
                                                            @foreach($years as $year)
                                                                <option value="{{$year->session}}">{{$year->session}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-2"> 
                                                        <label class="col-md-12 control-label">
                                                            <input type="checkbox" value="dept" name="oDepartment">Deparment
                                                        </label>
                                                        <select class="form-control select" name="Department">
                                                            @foreach($departments as $department)
                                                                <option value="{{$department->name}}">{{$department->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-2"> 
                                                    <label class="col-md-12 control-label">
                                                      <input type="checkbox" value="group" name="ogroup_id">Sub Group  
                                                    </label>
                                                        <select class="form-control select" name="group_id">
                                                            @foreach($groups as $group)
                                                                <option value="{{$group->id}}">{{$group->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label class="col-md-6 control-label">-</label>
                                                        <button class=" form-control btn btn-primary ">   
                                                            sort
                                                        </button>
                                                    </div>

                                                </div>
                                            </fieldset>
                                        </form>
                                        </div>
                                        <form method="get" action="{{ url('admin/search') }}">
                                                {!! csrf_field() !!}
                                            
                                             <div class="col-md-5 " style="margin-top:50px;">
                                                <div class="input-group ">
                                                     <input type="text" class="form-control" name="q" placeholder="search user"/>
                                                        <div class="input-group-btn">
                                                            <button class="btn btn-primary"><span class="fa fa-search"></span></button>
                                                        </div>
                                                    </div> 
                                                </div>
                                        </form>
                                </div>                                                                
                            </div>
                            <!-- END SEARCH -->


                            <!-- CONTACT LIST WIDGET -->
                            <div class="panel panel-default">
                                
                                <div class="panel-body ">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>department</th>
                                                <th>DOB</th>
                                                <th>email</th>
                                                <th>address</th>
                                                <th>sub-Group</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($users as $user)
                                            <tr>
                                                <td><a>{{$user->name}}</a></td>
                                                <td>
                                                    <span class="contacts-title">{{ $user->profile->phone }}</span>
                                                </td>
                                                <td>{{ $user->profile->Department }}</td>
                                                <td>{{ $user->profile->birth }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>
                                                    {{ $user->profile->address }}
                                                </td>
                                                <td>
                                                    {{ $user->profile->group->name }}
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>                                
                                </div>
                            </div>
                            <!-- END CONTACT LIST WIDGET -->
                            {!! $users->links() !!}
                        </div>
                    </div>
                
                </div>
            </div>
                <!-- END PAGE CONTENT WRAPPER -->            
@endsection()