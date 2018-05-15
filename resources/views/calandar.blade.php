<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
<script src="{{asset('js/backend_js/jquery.min.js')}}"></script> 
<script src="{{asset('js/backend_js/jquery.ui.custom.js')}}"></script> 
<script src="{{asset('js/backend_js/bootstrap.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('js/backend_js/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/backend_js/fullcalendar.min.js')}}"></script>

<script type="text/javascript" src="{{asset('js/backend_js/fullcalendar.js')}}"></script>
<!--<script type="text/javascript" src="{{asset('js/backend_js/fullcalendar.min.js')}}"></script>-->
<script type="text/javascript">
	
	 

var initialise_calandar; 

initialise_calandar= function(){

$('.calendar').fucntion()
{
	var calendar = $(this);
	calendar.fullCalendar({
		header:{
			left:'prev,next today',
			center:'title',
			right:'month,agendaWeek,agendaDay'

		},
		selectable:true,
		selectHelper:true,
		editabe:true,
		eventLimit:true,
	});
}

	
};
$(document).on('turbolinks:load',initialise_calandar);

</script>
</html>