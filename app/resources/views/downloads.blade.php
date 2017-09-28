@extends('layouts.app')
@section('content')
<div class="container ">
<div class="topp" >
  <div class="row">
    <div class="col-sm-12">
      <div class="col-sm-12 ">
        <h1 class="page-header up" >
            Downloads  
        </h1>     
        <div class="col-sm-4 pull-right">
                <form action="" method="GET" class="side-by-side" role="form">
                            
                <div class="input-group input-group-md" >
                        <input type="text" class="form-control" name="search" placeholder="Search Downloads">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </form>
            </div>
    </div>
    @foreach($downloads as $download)
       <div class="col-sm-4">
            <div class="panel">
                <div class="panel-body p-t-10">
                    <div class="media-main">
                        <a class="pullright btn btn-primary" href="{{url('/downloads',[$download->filename])}}">
                            {{$download->original_filename}}
                        </a>
                        <div class="info">
                            <h4>{{ $download->filename }}</h4>
                            <p class="text-muted">
                                @if($dt === $download->created_at )
                                    just now
                                @else()
                                    {{ $dt->diffForHumans($download->created_at) }}
                                @endif
                            </p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                   
                </div>
            </div>
        </div>
    @endforeach

        
    </div>
  </div>
</div>
</div>
@endsection()