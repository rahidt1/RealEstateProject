@extends('admins.layouts.admin')
@section('abc')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="{{ asset('adminstyle/profile.css') }}">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
	<div class="row">        
       <div class="col-md-7 ">

<div class="panel panel-default">
  <div class="panel-heading">  <h4 >User Profile</h4></div>
   <div class="panel-body">
       
    <div class="box box-info">
        
            <div class="box-body">
                     <div class="col-sm-6">

                      {{-- Template profile image --}}
                     {{-- <div  align="center"> <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive">  --}}
                
                {{-- <input id="profile-image-upload" class="hidden" type="file"> --}}
                {{-- <a href="#"><img src="{{ asset('/adminstyle/img/notification/icon.png') }}" alt="" /></a>
					<div style="color:#999;" ></div> --}}
                <!--Upload Image Js And Css-->
           
              
   
                
                
                     
                     
                     </div>
              
              <br>
    
              <!-- /input-group -->
            </div>
            <div class="col-sm-6">
            <h4 style="color:#00b1b1;">{{ $userdata->name }}</h4></span>
              <span><p class="capitalize">{{ $userdata->role }}</p></span>            
            </div>
            <div class="clearfix"></div>
            <hr style="margin:5px 0 5px 0;">
        <div class="card mb-3">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="#" width="100%" cellspacing="0">
                <thead class="thead">
                  <tr>
                    <th>Email</th>
                    <th>r78@gmail.com</th>
                    <th class="text-center">

                      <a class="btn btn-raised btn-primary btn-sm" href="#" ><i class="fas fa-user-edit"></i></a> 

                      <a class="btn btn-danger" data-toggle="modal" data-target="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                      <div id="" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Delete Confirmation</h4>
                            </div>
                            <div class="modal-body">
                              <p>Are You sure you want to delete?</p>
                            </div>
                            <div class="modal-footer">
                              <a class="btn btn-success" href="">Yes</a>
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </th>
                  </tr>
                    <tr>
                    <th>Phone</th>
                    <th>r78@gmail.com</th>
                    <th class="text-center">

                      <a class="btn btn-raised btn-primary btn-sm" href="#" ><i class="fas fa-user-edit"></i></a> 

                      <a class="btn btn-danger" data-toggle="modal" data-target="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                      <div id="" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Delete Confirmation</h4>
                            </div>
                            <div class="modal-body">
                              <p>Are You sure you want to delete?</p>
                            </div>
                            <div class="modal-footer">
                              <a class="btn btn-success" href="">Yes</a>
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </th>
                  </tr>
                    <tr>
                    <th>Address</th>
                    <th>r78@gmail.com</th>
                    <th class="text-center">

                      <a class="btn btn-raised btn-primary btn-sm" href="#" ><i class="fas fa-user-edit"></i></a> 

                      <a class="btn btn-danger" data-toggle="modal" data-target="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                      <div id="" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Delete Confirmation</h4>
                            </div>
                            <div class="modal-body">
                              <p>Are You sure you want to delete?</p>
                            </div>
                            <div class="modal-footer">
                              <a class="btn btn-success" href="">Yes</a>
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </th>
                  </tr>
                </thead>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Last updated at {{ $userdata->updated_at }}</div>
        </div>

          			</div>

        		</div>
            
    		</div> 
    	</div>
	</div>  
</div>
</div>
@stop