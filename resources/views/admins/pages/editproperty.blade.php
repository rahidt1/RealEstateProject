@extends('admins.layouts.admin')
@section('abc')
<div class="container-fluid">
    
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
        <div class="col-md-6 col-md-6 col-sm-6 col-xs-12">
            <div class="text-center custom-login">
                <h3 style="color: orange">Edit Property</h3>
                <!-- <p>Admin template with very clean and aesthetic style prepared for your next app. </p> -->
            </div>
            <div class="hpanel">
                <div class="panel-body">
                    <form method="post" action="{{URL::to('/updateaddproperty/'.$editlist->id)}}" id="loginForm">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <label>Property Name</label>
                                <input type="text" class="form-control" name="propertyname" value="{{ $editlist->propertyname }}">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Location</label>
                                <input type="text" class="form-control" name="location" value="{{ $editlist->location }}">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Price</label>
                                <input type="number" class="form-control" name="price" value="{{ $editlist->price }}">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Address</label>
                                <input type="text" class="form-control" name="address" value="{{ $editlist->address }}">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Owner</label>
                                <input type="text" class="form-control" name="owner" value="{{ $editlist->owner }}">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Agent Name</label>
                                <input type="text" class="form-control" name="agentname" value="{{ $editlist->agentname }}">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Agent Role</label>
                                <input type="text" class="form-control" name="agentrole" value="{{ $editlist->agentrole }}">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Agent Phone</label>
                                <input type="tel" class="form-control" name="agentphone" value="{{ $editlist->agentphone }}">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Area</label>
                                <input type="number" class="form-control" name="area" value="{{ $editlist->area }}">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Bedroom</label>
                                <input type="number" class="form-control" name="bed" value="{{ $editlist->bed }}">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Bathroom</label>
                                <input type="number" class="form-control" name="bath" value="{{ $editlist->bath }}">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Patio</label>
                                <input type="number" class="form-control" name="patio" value="{{ $editlist->patio }}">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Garage</label>
                                <input type="number" class="form-control" name="garage" value="{{ $editlist->garage }}">
                            </div>

                        </div>
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
        <div class="col-md-12 text-center">
            <p>Copyright © 2018 <a href="https://colorlib.com/wp/templates/">Colorlib</a> All rights reserved.</p>
        </div>
    </div>
</div>
@stop


				
				