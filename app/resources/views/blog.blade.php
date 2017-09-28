@extends('layouts.app')
@section('content')

<div class="container ">
<div class="topp" >
  <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
        <h1 class="page-header up" >
            Posts  
        </h1>     
        <div class="col-sm-4 pull-right">
                <form action="" method="GET" class="side-by-side" role="form">
                            
                <div class="input-group input-group-md" >
                        <input type="text" class="form-control" name="search" placeholder="Search Post">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </form>
            </div>
    </div>

    <div class="col-sm-10 col-sm-offset-1">
      
        @foreach($posts as $post)
            <div class="panel">
                <div class="panel-body p-t-10">
                    <div class="media-main">
                        <a class="pull-left" href="#">
                            <img class="" src="{{ asset('/blog/images/')}}/{{str_replace(" ","-",$post->title)}}.jpg" alt="">
                        </a>
                        
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    <h2>{{$post->title}}</h2>
                    <div class="well">
                    	@foreach($post->paras as $para)
                        <p>
                            {{$para->paragraph}}
                        </p>
                        @endforeach
                    </div>
                    <ul class="social-links list-inline p-b-10">
                        <li>
                            Posted by admin
                        </li>
                       
                    </ul>
                </div>
            </div>
       @endforeach()

        
        {{ $posts->links() }}
        
    </div>
  </div>
</div>
</div>

@endsection