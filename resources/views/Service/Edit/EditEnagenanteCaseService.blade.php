@extends('Service.Edit.EditCaseService')
@section('notices')

      	<label for="notices_one_date">Fecha de (Priver aviso) Registrada:{{$ServiceCase->notices_one_date}} </label> 
     	<input name="notices_one_date" class="input long" id="notices_one_date" type="date" value="{{$ServiceCase->notices_one_date}}"/> 
      	<label for="notices_two_date">Fecha de (Segundo aviso) Registrada:{{$ServiceCase->notices_two_date}} </label> 
     	<input name="notices_two_date" class="input long" id="notices_two_date" type="date" value="{{$ServiceCase->notices_two_date}}"/> 
     	
@stop