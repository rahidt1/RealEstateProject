@extends('admins.layouts.admin')
@section('abc')
<div class="container-fluid">
    
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
        <div class="col-md-6 col-md-6 col-sm-6 col-xs-12">
            <div class="text-center custom-login">
                <h3 style="color: orange">Edit User Details</h3>
                <!-- <p>Admin template with very clean and aesthetic style prepared for your next app. </p> -->
            </div>
            <div class="hpanel">
                <div class="panel-body">
                    <form method="post" action="{{URL::to('/updateprofile/'.$editprofilelist->id)}}" id="loginForm">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $editprofilelist->name }}">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" value="{{ $editprofilelist->email }}">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" value="{{ $editprofilelist->username }}">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Phone</label>
                                <input type="tel" class="form-control" name="phone" value="{{ $editprofilelist->phone }}">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Address</label>
                                <input type="text" class="form-control" name="address" value="{{ $editprofilelist->address }}">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Date Of Birth</label>
                                <input type="date" class="form-control" name="date_of_birth" value="{{ $editprofilelist->date_of_birth }}">
                            </div>
                        </div>
                        <br>
                        <div class="text-center">
                            <button class="btn btn-success loginbtn">Update</button>
                            <button class="btn btn-default">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
    </div>
    <div class="row">
        <br>
        <div class="col-md-12 text-center">
            <p>Copyright © 2018 <a href="https://colorlib.com/wp/templates/">Colorlib</a> All rights reserved.</p>
        </div>
    </div>
</div>
@stop


				
				