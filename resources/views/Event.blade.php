


<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{asset('css/backend_css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{asset('css/backend_css/bootstrap-responsive.min.css')}}" />
<link rel="stylesheet" href="{{asset('css/backend_css/fullcalendar.css')}}" />
<link rel="stylesheet" href="{{asset('css/backend_css/matrix-style.css')}}" />
<link rel="stylesheet" href="{{asset('css/backend_css/matrix-media.css')}}" />
<link href="{{asset('fonts/backend_fonts/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>


<!--Header-part-->
<div id="header">
  <h1><a href="{{url('/login/dashboard')}}"> Admin</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    
    <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Aller vers courrier</span> <span class="label label-important"></span> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a class="sAdd" title="" href="{{url('https://accounts.google.com/ServiceLogin/identifier?elo=1&flowName=GlifWebSignIn&flowEntry=AddSession')}}"><i class="icon-plus"></i> Voir message</a></li>
        
      </ul>
    </li>
    
    <li class=""><a title="" href="{{url('/logout')}}"><i class="icon icon-share-alt"></i> <span class="text">Déconnexion</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->






<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="{{url('/login/dashboard')}}"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
     <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span> Voir Membres</span> <span class="label label-important">1</span></a>
      <ul>
        <li><a href="{{url('/login/view-membre')}}">Voir les  membres</a>
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span> Les Réservations  </span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="{{url('/login/view-nonreseffectue')}}">Réservation Non Effectué</a></li>
        <li><a href="{{url('/login/view-reseffectue')}}">Réservation Effectué </a>
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Offre</span> <span class="label label-important">1</span></a>
      <ul>
        <li><a href="{{url('/login/view-memoffre')}}"> les Offres proposées</a></li>
       
      </ul>
    </li>
      <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Statistiques </span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="{{url('/login/my-chart')}}">Statistiques sur les membres</a></li>
       
        <li><a href="{{url('/login/chartres')}}">statistiques sur les réservations</a></li>
        
       
      </ul>
    </li>

     
      
   
   
   
  </ul>
</div>
<!--sidebar-menu-->
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"><a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Sample pages</a> <a href="#" class="current">Calendar</a></div>
    <h1>Calendar</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box widget-calendar">
          <div class="widget-title"> <span class="icon"><i class="icon-calendar"></i></span>
            <h5>Calendar</h5>
            <div class="buttons"> <a id="add-event" data-toggle="modal" href="#modal-add-event" class="btn btn-inverse btn-mini"><i class="icon-plus icon-white"></i> Add new event</a>
              <div class="modal hide" id="modal-add-event">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">×</button>
                  <h3>Add a new event</h3>
                </div>
                <div class="modal-body">
                  <p>Enter event name:</p>
                  <p>
                    <input id="event-name" type="text" />
                  </p>
                </div>
                <div class="modal-footer"> <a href="#" class="btn" data-dismiss="modal">Cancel</a> <a href="{{URL::to('/store')}}" id="add-event-submit" class="btn btn-primary">Add event</a> </div>{{csrf_field()}}
              </div>
            </div>
          </div>
          <div class="widget-content">
            <div class="panel-left">
              <div id="fullcalendar"></div>
            </div>
            <div id="external-events" class="panel-right">
              <div class="panel-title">
                <h5>Drag Events to the calander</h5>
              </div>
              <div class="panel-content">
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="../../js/backend_js/jquery.min.js"></script> 
<script src="../../js/backend_js/jquery.ui.custom.js"></script> 
<script src="../../js/backend_js/bootstrap.min.js"></script> 
<script src="../../js/backend_js/fullcalendar.min.js"></script> 
<script src="../../js/backend_js/matrix.js"></script> 
<script src="../../js/backend_js/matrix.calendar.js"></script>

</body>
</html>
