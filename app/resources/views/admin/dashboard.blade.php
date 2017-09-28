@extends('layouts.admin')
@section('content')

<!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    <div class="row" style="margin-top:100px;">
                     <div class="col-md-6">
                            @if (count($errors) > 0)
                              <div class="alert alert-info" style="margin-top:15px;">
                                <ul>
                                  @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                  @endforeach
                                </ul>
                              </div>
                             @endif
                            <!-- START WIDGET MESSAGES -->
                            <div class="widget widget-default widget-item-icon" >
                                <div class="widget-item-left">
                                    <span class="glyphicon glyphicon-time"></span>
                                </div>                             
                                <div class="widget-data">
                                    <form action="{{url('/admin/setSession')}}" method="post">
                                        {!! csrf_field() !!}
                                        <div class="widget-int num-count">{{ $current['current'] ? $current['session'] : 'choose a Session' }}</div>
                                        <div class="widget-title">Current Session</div>
                                        <div class="widget-subtitle col-sm-4">
                                            <select class="form-control" name="session">
                                                @foreach($years as $year)
                                                    <option value="{{$year->id}}">{{$year->session}}</option>
                                                @endforeach
                                            </select>
                                            <button class="btn btn-danger">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>                            
                            <!-- END WIDGET MESSAGES -->
                            
                        </div>
                        <div class="col-md-6">
                            
                            <!-- START WIDGET REGISTRED -->
                            <div class="widget widget-default widget-item-icon" >
                                <div class="widget-item-left">
                                    <span class="fa fa-user"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count">{{$users->count()}}</div>
                                    <div class="widget-title">Registred users</div>
                                </div>                          
                            </div>                            
                            <!-- END WIDGET REGISTRED -->
                            
                        </div>
                    </div>
                    </div>
                        @endsection()