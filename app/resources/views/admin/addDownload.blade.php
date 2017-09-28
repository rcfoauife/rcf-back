@extends('layouts.admin')
@section('content')


<!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    @if (count($errors) > 0)
                        <div class="alert alert-info">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (session()->has('success_message'))
                        <div class="alert alert-success">
                            {{ session()->get('success_message') }}
                        </div>
                    @endif
                    @if (session()->has('error_message'))
                        <div class="alert alert-info">
                            {{ session()->get('error_message') }}
                        </div>
                    @endif
                    <div class="row" style="margin-top:20px;" >
                        <div class="col-md-8 col-sm-offset-2" >
                            
                            <form class="form-horizontal" accept-charset="UTF-8" action="{{ url('admin/file') }}" method="post" class="form" enctype="multipart/form-data">
                                {!! csrf_field() !!}
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3><span style="color:#fff;background:#ff0000;border-radius:10px;padding:5px;">{{$uploads->count()}}</span> file Uploaded </h3>
                                    <h3 class="panel-title"><strong>Put up a download</strong> (messages,pdf etc) </h3>
                                </div>
                                
                                <div class="panel-body">                                                                        
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Recommended file name</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="recommend" class="form-control"/>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">File</label>
                                        <div class="col-md-6 col-xs-12">                                                                                                                                        
                                            <input type="file" class="fileinput btn-primary" name="fileField" id="filename" title="Browse file"/>
                                            
                                        </div>
                                    </div>
                                    
                                    

                                    <div class="form-group"> 
                                        <div class="col-md-4 col-md-offset-5">                                      
                                            <button class="btn btn-danger btn-block ">Upload</button>
                                        </div>
                                    </div>
                                    

                                </div>
                               
                            </div>
                            </form>
                            
                        </div>
                    </div>                    
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->     
@endsection()