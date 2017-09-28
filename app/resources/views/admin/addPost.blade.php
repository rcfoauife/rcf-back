@extends('layouts.admin')
@section('content')


<!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row" style="margin-top:20px;" ng-app="admin">
                        @if (count($errors) > 0)
                            <div class="alert alert-info" style="margin-top:15px;">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="col-md-4">
                            @if($posts->count() >0)
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="col-sm-5 col-md-5 col-lg-5">Title</th>
                                        <th class="col-sm-4 col-md-4 col-lg-4"></th>
                                        <th class="col-sm-4 col-md-4 col-lg-4">Action</th>
                                    </tr>
                                </thead>
                               <tbody>
                                    @foreach($posts as $post)
                                    <tr>
                                        <td class="col-sm-5 col-md-5 col-lg-5">{{ $post->title }}</td>
                                        <td class="col-sm-3 col-md-3 col-lg-3"></td>
                                        <td class="col-sm-4 col-md-4 col-lg-4">
                                            <form action="{{ url('admin/blog', [$post->id]) }}" method="POST" class="side-by-side">
                                                {!! csrf_field() !!}
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="submit" class="btn btn-default" value="Remove post">
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach()
                               </tbody>
                           </table>
                           {!! $posts->links() !!}
                           @else
                           <div class="alert alert-danger">
                                <p>There are no posts yet!</p> 
                           </div>
                           @endif
                        </div>
                        <div class="col-md-8 " ng-controller="postController as post">
                            
                            
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Post Something New</strong> </h3>
                                </div>
                                <div class="panel-body">
                                <form class="form-horizontal" action="{{ url('admin/blog') }}" method="post" enctype="multipart/form-data">                                                                        
                                    {!! csrf_field() !!}

                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Title of Post</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="title" class="form-control" />
                                                <input type="text" ng-hide="true" name="string" ng-model="post.textSubmit"  >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Picture</label>
                                        <div class="col-md-6 col-xs-12">                                                                                                                                        
                                            <input type="file" class="fileinput btn-primary" name="fileUpload" id="filename" title="Browse file"/>
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Contents</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <textarea ng-model="post.textArea" class="form-control" rows="5"></textarea>
                                            <a href="#" class="btn btn-primary" ng-click="post.add()">add paragraph</a>
                                            
                                            <blockquote ng-repeat="posts in paragraphs">
                                                <p>@{{ posts.text }} <a href="#" class="btn btn-default btn-xs pull-right" ng-click="post.remove($index)">
                                                    <span class="fa fa-times"></span>
                                                </a>
                                                </p>
                                            </blockquote>
                                        </div>
                                    </div>

                                    <div class="form-group"> 
                                        <div class="col-md-4 col-md-offset-5">                                      
                                            <button ng-disabled="paragraphs.length < 1" class="btn btn-danger btn-block ">Post !</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>                    
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->     
@endsection()