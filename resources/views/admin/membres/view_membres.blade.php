@extends('layouts.adminLayout.admin_design')
@section('content')

<!DOCTYPE html>
<html>
<head>
  
     <script type="text/javascript" src="asset{{('js/backend_js/jquery.min.js')}}"></script>
    
    
    
  <title>Membres</title>
</head>
<body>

 

</div>
<div id="content">
  <div id="content-header">
   <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Membres</a> <a href="#" class="current">View Membres</a> </div>
    <h1>Membres</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5> Voir Membres</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr >
                  <th>Email</th>
                  <th>Nom</th>
                  <th>Prenom</th>
                  <th>AnneNaiss</th>
                  <th>NumeroTel</th>
                  <th>Genre</th>
                  <th>MiniBio</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($membres as $membre)

                 @if($membre->signaler >=3)
             
                 
                <tr style="background-color: red" class="gradeX">
                  <td>{{$membre->email}}</td>
                  <td>{{$membre->nom}}</td>
                  <td>{{$membre->prenom}}</td>
                  <td>{{$membre->anneeNaiss}}</td>
                  <td>{{$membre->numeroTel}}</td>
                  <td>{{$membre->genre}}</td>
                   <td>{{$membre->miniBio}}</td>
                  <td class="center"> <a id="del" href="{{url('/login/delete-membre/'.$membre->email)}}" class="btn btn-danger btn-mini">Supprimer</a></td>
                </tr> 
                      @elseif($membre->signaler < 3)
               <tr  class="gradeX">
                  <td>{{$membre->email}}</td>
                   <td>{{$membre->nom}}</td>
                  <td>{{$membre->prenom}}</td>
                  <td>{{$membre->anneeNaiss}}</td>
                  <td>{{$membre->numeroTel}}</td>
                  <td>{{$membre->genre}}</td>
                   <td>{{$membre->miniBio}}</td>
                  <td class="center"> <a id="del" href="{{url('/login/delete-membre/'.$membre->email)}}" class="btn btn-danger btn-mini">Supprimer</a></td>
                </tr>
                @endif
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

 

</body>
</html>