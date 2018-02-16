@extends('layouts.dashboard')
@section('page_heading','Publicar Loja')

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
		@section ('cotable_panel_title','Publicar Loja')
		@section ('cotable_panel_body')

	<form class="form-horizontal form-label-left"  method="POST" action="{{ action('lojaController@insertOnline')}}" enctype="multipart/form-data">
        {{csrf_field()}}


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Loja_Bairro_Provincia</label>
                        <div class="col-md-7">
                          <select class="form-control col-md-7 col-xs-12" name="loja">
                           
                                  @foreach($dropdown as $role)
            <option value="{{ $role->ID }}" {}>{{ $role->Nome }} | {{ $role->Bairro }} | {{ $role->Provincia }}</option>    

    @endforeach


                          </select>
                        </div>
                      </div>

        
                  <div class="form-group">
                    <label class="control-label col-md-3" for="first-name" >Data de Inicio :  <span class="required">*</span>
                    </label>
                    <div class="col-md-7">
                      <input type="date" id="Nome" placeholder="Nome Completo" name="dataI"  required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
<div class="form-group">
                    <label class="control-label col-md-3" for="first-name" >Data de termino :  <span class="required">*</span>
                    </label>
                    <div class="col-md-7">
                      <input type="date" id="Nome" placeholder="Nome Bairro" name="dataF" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>

<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Quantidade de produtos</label>
                        <div class="col-md-7">
                          <select class="form-control col-md-7 col-xs-12" name="quant">
                            <option>50</option>
                            <option>100</option>
                            <option>150</option>
                            <option>200</option>
                          </select>
                        </div>
                      </div>

<p align="center">
                                               <button type="submit" class="btn btn-success">Registar</button>

                  </p>     


                 </form>


		@endsection
		@include('widgets.panel', array('header'=>true, 'as'=>'cotable'))
	</div>
</div>	

@stop
}