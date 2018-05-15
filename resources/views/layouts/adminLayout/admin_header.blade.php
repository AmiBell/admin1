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
