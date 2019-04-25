@extends('admins.layouts.admin')
@section('abc')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
        <div class="col-md-6 col-md-6 col-sm-6 col-xs-12">
            <div class="text-center custom-login">
                <h3 style="color: orange">Register Property</h3>
                <!-- <p>Admin template with very clean and aesthetic style prepared for your next app. </p> -->
            </div>
            <div class="hpanel">
                <div class="panel-body">
                    <form action="#" id="loginForm">
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <label>Property Name</label>
                                <input type="text" class="form-control" name="propertyname">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Location</label>
                                <input type="text" class="form-control" name="location">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Price</label>
                                <input type="number" class="form-control" name="price">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Address</label>
                                <input type="text" class="form-control" name="address">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Owner</label>
                                <input type="text" class="form-control" name="owner">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Agent Name</label>
                                <input type="text" class="form-control" name="agentname">
                            </div>
                            <div class="checkbox col-lg-12">
                                <input type="checkbox" class="i-checks" checked> Sigh up for our newsletter
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-success loginbtn">Register</button>
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


				
				