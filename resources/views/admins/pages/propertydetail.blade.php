@extends('admins.layouts.admin')
@section('abc')
	        <!-- Single pro tab start-->
        <div class="single-product-tab-area mg-t-0 mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
						<div class="single-product-pr">
							<div class="row">
								<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
									<div id="myTabContent1" class="tab-content">
										<div class="product-tab-list tab-pane fade active in" id="single-tab1">
											<img src="{{ asset('/adminstyle/img/product/bg-1.jpg')}}" alt="" />
										</div>
										<div class="product-tab-list tab-pane fade" id="single-tab2">
											<img src="{{ asset('/adminstyle/img/product/bg-2.jpg')}}" alt="" />
										</div>
										<div class="product-tab-list tab-pane fade" id="single-tab3">
											<img src="{{ asset('/adminstyle/img/product/bg-3.jpg')}}" alt="" />
										</div>
										<div class="product-tab-list tab-pane fade" id="single-tab4">
											<img src="{{ asset('/adminstyle/img/product/bg-1.jpg')}}" alt="" />
										</div>
										<div class="product-tab-list tab-pane fade" id="single-tab5">
											<img src="{{ asset('/adminstyle/img/product/bg-2.jpg')}}" alt="" />
										</div>
									</div>
									<ul id="single-product-tab">
										<li class="active">
											<a href="#single-tab1"><img src="{{ asset('/adminstyle/img/product/1.jpg')}}" alt="" /></a>
										</li>
										<li>
											<a href="#single-tab2"><img src="{{ asset('/adminstyle/img/product/2.jpg')}}" alt="" /></a>
										</li>
										<li>
											<a href="#single-tab3"><img src="{{ asset('/adminstyle/img/product/3.jpg')}}" alt="" /></a>
										</li>
										<li>
											<a href="#single-tab4"><img src="{{ asset('/adminstyle/img/product/1.jpg')}}" alt="" /></a>
										</li>
									</ul>
								</div>
								<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
									<div class="single-product-details res-pro-tb">
										<h1>{{ $propertydata->propertyname }}</h1>
										<span class="single-pro-star">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</span>
										<div class="single-pro-price">
											<span class="single-regular">$150.00</span><span class="single-old">{{-- <del>$20.00</del> --}}</span>
										</div>
										<div class="single-pro-cn">
											<h3>OVERVIEW</h3>
											<p>	Type : {{ $propertydata->view }} <br>
												Location : {{ $propertydata->address }},&nbsp&nbsp{{ $propertydata->location }},&nbsp&nbsp{{ $propertydata->country }}</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
        <!-- Single pro tab End-->
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    	<div class="single-tb-pr">
                    		<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<ul id="myTab" class="tab-review-design">
										<li class="active"><a href="#description">description</a></li>
										<li><a href="#reviews"><span><i class="fa fa-circle"></i></span> reviews</a></li>
									</ul>
									<div id="myTabContent" class="tab-content">
										<div class="product-tab-list product-details-ect tab-pane fade active in" id="description">
											<div class="row">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<div class="review-content-section">
														<p class="pro-b-0">{{ $propertydata->description }}</p>
													</div>
												</div>
											</div>
										</div>
										<div class="product-tab-list tab-pane fade" id="reviews">
											<div class="row">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<div class="review-content-section">
														<div class="review-content-section">
															<div class="card-block">
																<div class="text-muted f-w-400">
																	<p>No reviews yet.</p>
																</div>
																<div class="m-t-10">
																	<div class="txt-primary f-18 f-w-600">
																		<p>Your Rating</p>
																	</div>
																	<div class="stars stars-example-css detail-stars">
																		<div class="review-rating">
																			<fieldset class="rating">
																				<input type="radio" id="star5" name="rating" value="5">
																				<label class="full" for="star5"></label>
																				<input type="radio" id="star4half" name="rating" value="4 and a half">
																				<label class="half" for="star4half"></label>
																				<input type="radio" id="star4" name="rating" value="4">
																				<label class="full" for="star4"></label>
																				<input type="radio" id="star3half" name="rating" value="3 and a half">
																				<label class="half" for="star3half"></label>
																				<input type="radio" id="star3" name="rating" value="3">
																				<label class="full" for="star3"></label>
																				<input type="radio" id="star2half" name="rating" value="2 and a half">
																				<label class="half" for="star2half"></label>
																				<input type="radio" id="star2" name="rating" value="2">
																				<label class="full" for="star2"></label>
																				<input type="radio" id="star1half" name="rating" value="1 and a half">
																				<label class="half" for="star1half"></label>
																				<input type="radio" id="star1" name="rating" value="1">
																				<label class="full" for="star1"></label>
																				<input type="radio" id="starhalf" name="rating" value="half">
																				<label class="half" for="starhalf"></label>
																			</fieldset>
																		</div>
																		<div class="clear"></div>
																	</div>
																</div>
																<div class="input-group mg-b-15 mg-t-15">
																	<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
																	<input type="text" class="form-control" placeholder="Name">
																</div>
																
																<div class="input-group mg-b-15">
																	<span class="input-group-addon"><i class="far fa-envelope" aria-hidden="true"></i></span>
																	<input type="text" class="form-control" placeholder="Email">
																</div>
																<div class="form-group review-pro-edt mg-b-0-pr">
																	<button type="submit" class="btn btn-primary waves-effect waves-light">Submit
																		</button>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
                    	</div>
                    </div>
                </div>
            </div>
        </div>
@stop