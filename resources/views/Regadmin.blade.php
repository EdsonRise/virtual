@extends('layouts.dashboard')
@section('page_heading','Administração')

@section('section')
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
<div class="row">
	<div class="col-sm-12">
		@section ('cotable_panel_title','Registo de Administrador')
		@section ('cotable_panel_body')


	<form class="form-horizontal form-label-left"  method="post"   action="{{ action('adminController@insert')}}" >
    {{csrf_field()}}
                  <div class="form-group">
                    <label class="control-label col-md-3" for="first-name">Nome Completo  <span class="required">*</span>
                    </label>
                    <div class="col-md-7">
                      <input type="text" id="Nome" name="Nome" placeholder="Nome Completo" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3" for="first-name">Email <span class="required">*</span>
                    </label>
                    <div class="col-md-7">
                      <input type="email" id="Email" name="Email" class="form-control" placeholder=" email" required="required">
                    </div>
                  </div>

 <div class="form-group">
                    <label class="control-label col-md-3" for="first-name">Celular <span class="required">*</span>
                    </label>
                 

                    <div class="col-md-7">

                        <input type="text" class="form-control" id="Celular" name="Celular" placeholder="Celular" required="required">
                      </div>
                    </div>
   

<div class="form-group">
                    <label class="control-label col-md-3" for="first-name">Password   <span class="required">*</span>
                    </label>
                    <div class="col-md-7">
                      <input type="text" id="Password" name="Password" required="required" placeholder="Password" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>

<div class="form-group">

 <label class="control-label col-md-3 col-sm-3 col-xs-12">Estado *:</label>
                      <p>
                        Activo   
                        <input type="radio" class="flat" name="estado" id="E1" value="1" checked="" required /> Inactivo
                        <input type="radio" class="flat" name="estado" id="E1" value="0" />
                      </p>

</div>

<div class="form-group">

 <label class="control-label col-md-3 col-sm-3 col-xs-12">Previlegios *:</label>
                      <p>
                        Gestão   
                        <input type="radio" class="flat" name="previlegio" id="PT" value="T" checked="" required /> Total
                        <input type="radio" class="flat" name="previlegio" id="PG" value="G" />
                      </p>

</div>




<p align="center">
                                               <button type="submit" class="btn btn-success">Registar</button>

                  </p>     

<input type="hidden" name="_token" value="{{Session ::token()}}">
                 </form>


		@endsection
		@include('widgets.panel', array('header'=>true, 'as'=>'cotable'))
	</div>
</div>	

@stop