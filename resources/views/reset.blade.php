@extends('master')
@section('content')
<div class="container">
	
   {{!! Form::open(["url"=>"/password/email"])!!}}
   <table class="table" style="width: 50%; margin: 0 auto ; ">
   	
      @if(count($errors)>0)
      <tr>
      	


      	<td colspan="2">
      		
      		<div class="alert alert-danger">
      			<ul>
      				
      				@foreach($errors->all() as $error)
      				<li>   {{$error }}</li>
      				@endforeach
      			</ul>
      		</div>
      	</td>
      </tr>
        @endif
        <tr>
        	<td colspan="2">
        		<h1 colspan="2" class="well text-center"></h1>
        	</td>
        	
        </tr>
         <tr>
         	<td>enter your e-email addresse : </td>
         	<td>{{!! Form::email("email") !!}}</td>
         </tr>
         <tr>
         	
          <td colspan="2">
          	{{!! Form::submit("send password reset link ") !!}}
          </td>

         </tr>


   </table>
   {!! Form::close() !!}
 

</div>
@stop 