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
      <li class="submenu"> <a href="#"><i class="icon icon-signal"></i> <span>Statistiques </span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="{{url('/login/my-chart')}}">Statistiques sur les membres</a></li>
       
        <li><a href="{{url('/login/chartres')}}">statistiques sur les réservations</a></li>
        <li><a href="{{url('/login/chartgenre')}}">statistiques </a></li>
       
      </ul>
    </li>

     
      
   
   
   
  </ul>
</div>
<!--sidebar-menu-->