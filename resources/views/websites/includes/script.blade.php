<script src="{{ asset('/webstyle/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('/webstyle/styles/bootstrap4/popper.js') }}"></script>
<script src="{{ asset('/webstyle/styles/bootstrap4/bootstrap.min.js') }}"></script>
<script src="{{ asset('/webstyle/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
<script src="{{ asset('/webstyle/plugins/easing/easing.js') }}"></script>
<script src="{{ asset('/webstyle/plugins/parallax-js-master/parallax.min.js') }}"></script>
<script src="{{ asset('/webstyle/js/custom.js') }}"></script>
<script src="{{ asset('/webstyle/plugins/greensock/TweenMax.min.js') }}"></script>
<script src="{{ asset('/webstyle/plugins/greensock/TimelineMax.min.js') }}"></script>
<script src="{{ asset('/webstyle/plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
<script src="{{ asset('/webstyle/plugins/greensock/animation.gsap.min.js') }}"></script>
<script src="{{ asset('/webstyle/plugins/greensock/ScrollToPlugin.min.js') }}"></script>
<script src="{{ asset('/webstyle/js/about.js') }}"></script>
<script src="{{ asset('/webstyle/js/properties.js') }}"></script>
<script src="{{ asset('/webstyle/plugins/rangeslider.js-2.3.0/rangeslider.min.js') }}"></script>
<script src="{{ asset('/webstyle/js/news.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="{{ asset('/webstyle/js/contact.js') }}"></script>

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> --}}
{{-- <script>
	$(document).ready(function () {
		$('#rent').on('change', function() {
		  var div_id = this.value ;
		  $.ajax({
		  	url:"http://127.0.0.1:8000/district/"+div_id,
		  	success:function(res){
		  		var dis = res.data;
		  		var temp = '';
		  		for(var i=0; i<dis.length; i++){
		  			var dis_name = dis[i].name;
		  			var dis_id = dis[i].id;
		  			if(i==0){
		  				temp = '<option>Select District</option>';
		  			}
		  			temp+='<option value="'+dis_id+'">'+dis_name+'</option>';
		  		}
		  		$('#district').html(temp);
		  		//console.log(temp);
		  	}
		  })
		});
	});
</script> --}}