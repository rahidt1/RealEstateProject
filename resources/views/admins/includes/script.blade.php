<!-- JQuery -->
<script src="{{ asset('/adminstyle/js/vendor/jquery-1.12.4.min.js') }}"></script>
<!-- bootstrap JS -->
<script src="{{ asset('/adminstyle/js/bootstrap.min.js') }}"></script>
<!-- wow JS -->
<script src="{{ asset('/adminstyle/js/wow.min.js') }}"></script>
<!-- price-slider JS -->
<script src="{{ asset('/adminstyle/js/jquery-price-slider.js') }}"></script>
<!-- meanmenu JS -->
<script src="{{ asset('/adminstyle/js/jquery.meanmenu.js') }}"></script>
<!-- owl.carousel JS -->
<script src="{{ asset('/adminstyle/js/owl.carousel.min.js') }}"></script>
<!-- sticky JS -->
<script src="{{ asset('/adminstyle/js/jquery.sticky.js') }}"></script>
<!-- mCustomScrollbar JS -->
<script src="{{ asset('/adminstyle/js/jquery.scrollUp.min.js') }}"></script>
<script src="{{ asset('/adminstyle/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ asset('/adminstyle/js/scrollbar/mCustomScrollbar-active.js') }}"></script>
<!-- metisMenu JS -->
<script src="{{ asset('/adminstyle/js/metisMenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('/adminstyle/js/metisMenu/metisMenu-active.js') }}"></script>

<script src="{{ asset('/adminstyle/js/sparkline/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('/adminstyle/js/sparkline/jquery.charts-sparkline.js') }}"></script>
<script src="{{ asset('/adminstyle/js/calendar/moment.min.js') }}"></script>
<script src="{{ asset('/adminstyle/js/calendar/fullcalendar.min.js') }}"></script>
<script src="{{ asset('/adminstyle/js/calendar/fullcalendar-active.js') }}"></script>
<script src="{{ asset('/adminstyle/js/flot/jquery.flot.js') }}"></script>
<script src="{{ asset('/adminstyle/js/flot/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('/adminstyle/js/flot/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('/adminstyle/js/flot/jquery.flot.tooltip.min.js') }}"></script>
<script src="{{ asset('/adminstyle/js/flot/jquery.flot.orderBars.js') }}"></script>
<script src="{{ asset('/adminstyle/js/flot/curvedLines.js') }}"></script>
<script src="{{ asset('/adminstyle/js/flot/flot-active.js') }}"></script>
<!-- tab JS -->
<script src="{{ asset('/adminstyle/js/tab.js') }}"></script>
<!-- incheck JS -->
<script src="{{ asset('/adminstyle/js/icheck/icheck.min.js') }}"></script>
<script src="{{ asset('/adminstyle/js/icheck/icheck-active.js') }}"></script>
<!-- plugins JS -->
<script src="{{ asset('/adminstyle/js/plugins.js') }}"></script>
<!-- main JS -->
<script src="{{ asset('/adminstyle/js/main.js') }}"></script>

<script src="{{ asset('/webstyle/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('/webstyle/styles/bootstrap4/popper.js') }}"></script>
<script src="{{ asset('/webstyle/styles/bootstrap4/bootstrap.min.js') }}"></script>
<script src="{{ asset('/webstyle/plugins/greensock/TweenMax.min.js') }}"></script>
<script src="{{ asset('/webstyle/plugins/greensock/TimelineMax.min.js') }}"></script>
<script src="{{ asset('/webstyle/plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
<script src="{{ asset('/webstyle/plugins/greensock/animation.gsap.min.js') }}"></script>
<script src="{{ asset('/webstyle/plugins/greensock/ScrollToPlugin.min.js') }}"></script>
<script src="{{ asset('/webstyle/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
<script src="{{ asset('/webstyle/plugins/easing/easing.js') }}"></script>
<script src="{{ asset('/webstyle/plugins/rangeslider.js-2.3.0/rangeslider.min.js') }}"></script>
<script src="{{ asset('/webstyle/plugins/parallax-js-master/parallax.min.js') }}"></script>
<script src="{{ asset('/webstyle/https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA') }}"></script>
<script src="{{ asset('/webstyle/js/property.js') }}"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!-- Jquery DataTable -->


 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/b-1.5.6/b-html5-1.5.6/r-2.2.2/sc-2.0.0/datatables.min.js"></script>

<script>
	$(document).ready( function () {
	    $('#tanvir').DataTable({
    	    dom: 'Bfrtip',
		    buttons: [

			            {
			                extend: 'pdfHtml5',
			                exportOptions: {
			                    columns: [ 0, 1, 2, 3,4,5,6 ]
			                }
		            	},
		    		]
			    });
	} );
</script>

