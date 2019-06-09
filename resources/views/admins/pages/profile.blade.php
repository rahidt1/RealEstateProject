@extends('admins.layouts.admin')
@section('abc')
{{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> --}}

{{-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script> --}}

<!------ Include the above in your HEAD tag ---------->

<div class="container-fluid">
	  <div class="row">        
      <div class="col-md-8 ">

        <div class="panel panel-default">
          <div class="panel-heading">  <h4 >User Profile</h4></div>
            <div class="panel-body">
             
            <div class="box box-info">
              
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
                          <th>{{ $userdata->email }}</</th>
                          <th class="text-center">

                            <a class="btn btn-raised btn-primary btn-sm" href="{{ URL::to('/editprofile/'.$userdata->id) }}" ><i class="fas fa-user-edit"></i></a> 
                          </th>
                        </tr>
                        <tr>
                          <th>Username</th>
                          <th>{{ $userdata->username }}</</th>
                          <th class="text-center">

                            <a class="btn btn-raised btn-primary btn-sm" href="{{ URL::to('/editprofile/'.$userdata->id) }}" ><i class="fas fa-user-edit"></i></a> 
                          </th>
                        </tr>
                        <tr>
                          <th>Phone</th>
                          <th>{{ $userdata->phone }}</</th>
                          <th class="text-center">

                            <a class="btn btn-raised btn-primary btn-sm" href="{{ URL::to('/editprofile/'.$userdata->id) }}" ><i class="fas fa-user-edit"></i></a> 
                          </th>
                        </tr>
                        <tr>
                          <th>Address</th>
                          <th>{{ $userdata->address }}</</th>
                          <th class="text-center">

                            <a class="btn btn-raised btn-primary btn-sm" href="{{ URL::to('/editprofile/'.$userdata->id) }}" ><i class="fas fa-user-edit"></i></a>
                          </th>
                        </tr>
                        <tr>
                          <th>Date Of Birth</th>
                          <th>{{ $userdata->date_of_birth }}</</th>
                          <th class="text-center">

                            <a class="btn btn-raised btn-primary btn-sm" href="{{ URL::to('/editprofile/'.$userdata->id) }}" ><i class="fas fa-user-edit"></i></a> 
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
@stop