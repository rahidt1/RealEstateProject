<div class="newsletter">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('/webstyle/images/newsletter.jpg') }}" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_content d-flex flex-lg-row flex-column align-items-start justify-content-start">
						<div class="newsletter_title_container">
							<div class="newsletter_title">Are you buying or selling?</div>
							<div class="newsletter_subtitle">Search your dream home</div>
						</div>
                    <div class="flash-message">
                        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                          @if(Session::has('alert-' . $msg))

                          <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="{{ route('login') }}" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                          @endif
                        @endforeach
                    </div> 
						<div class="newsletter_form_container">
							<form action="{{ route('subscribe') }}" method="post" class="newsletter_form">
								<input type="text" name="email" class="newsletter_input" placeholder="Your e-mail address" required="required">
								{{ csrf_field() }}
								<button type="submit" class="newsletter_button">subscribe now</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>