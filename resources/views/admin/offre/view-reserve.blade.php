@extends('layouts.adminLayout.admin_design')
@section('content')


</div>
<div id="content">
  <div id="content-header">
   <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Offre</a> <a href="#" class="current">View Offres</a> </div>
    <h1>Offres</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5> View Offres</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Passager</th>
                  <th>id_reservation</th>
                  <th>Conducteur</th>
          
                  
                </tr>
              </thead>
              <tbody>
                


              @foreach($users as $users)
              <tr>
              
               <td>{{$users->demandeur}}</td>
                  <td>{{$users->id_reservation}}</td>
                  <td>{{$users->offrant}}</td>
                  
                  
                    </tr>
                 @endforeach
                
                
                
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection