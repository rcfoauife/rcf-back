@extends('layouts.admin')
@section('content')

<!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    <div class="col-md-3">

                            <!-- CONTACT LIST WIDGET -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Birthdays</h3>         
                                    
                                </div>
                                <div class="panel-body list-group list-group-contacts">                                
                                    <a href="#" class="list-group-item">                                 
                                        <div class="list-group-status "></div>
                                        <span class="contacts-title">Brad Pitt</span>
                                        <p>Actor and Film Producer</p>                                  
                                    </a>
                                    <a href="#" class="list-group-item">                                 
                                        <div class="list-group-status "></div>
                                        <span class="contacts-title">Dmitry Ivaniuk</span>
                                        <p>Web Developer/Designer</p>
                                    </a>                                
                                    <a href="#" class="list-group-item">                                    
                                        <div class="list-group-status"></div>
                                        <span class="contacts-title">Nadia Ali</span>
                                        <p>Singer-Songwriter</p>                         
                                    </a>                                                                
                                    <a href="#" class="list-group-item">         
                                        <div class="list-group-status "></div>
                                        <span class="contacts-title">John Doe</span>
                                        <p>UI/UX Designer</p>                     
                                    </a>                                
                                </div>
                            </div>
                            <!-- END CONTACT LIST WIDGET -->

                        </div>
                    <div class="row" style="margin-top:30px;">
                        <div class="col-md-9">
                            <!-- START SEARCH -->                            
                            <div class="panel panel-default">
                                <div class="panel-body">                                    
                                    <div class="row ">
                                        <div class="col-md-8 ">
                                            <div class="input-group ">
                                                <span class="input-group-addon"><span class="fa fa-search"></span></span>
                                                <input type="text" class="form-control" placeholder="enter name to add to group"/>
                                                <div class="input-group-btn">
                                                    <button class="btn btn-primary">add</button>
                                                </div>
                                            </div> 
                                        </div>
                                        
                                    </div>
                                </div>  
                                
                            <!-- END SEARCH -->


                            <!-- CONTACT LIST WIDGET -->
                            <div class="panel panel-default">
                                <div class="row" style="margin-top:30px;">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="col-md-4">                                        
                                                        <select class="form-control select">
                                                            <option>All</option>
                                                            <option>2015/2016</option>
                                                            <option>2014/2015</option>
                                                            <option>2014/2013</option>
                                                            <option>2013/2012</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">                                        
                                                        <select class="form-control select">
                                                            <option>department</option>
                                                            <option>botany</option>
                                                            <option>2014/2015</option>
                                                            <option>2014/2013</option>
                                                            <option>2013/2012</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">                                        
                                                        <button class="btn btn-primary">sort</button>
                                                    </div>
                                                </div>
                                            </div>                                                              
                            </div>
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
                                                <th>action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a>Oshiole dami</a></td>
                                                <td>
                                                    <span class="contacts-title">234 8129909843</span>
                                                </td>
                                                <td>botany</td>
                                                <td>24 July</td>
                                                <td>wale@yahoo.com</td>
                                                <td>
                                                    24, arulogun aseyor close ibadan
                                                </td>
                                                <td>
                                                    <button class="btn btn-danger pull-right btn-xs">   
                                                        Remove
                                                    </button>
                                                </td>
                                            </tr>
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