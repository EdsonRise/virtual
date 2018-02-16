@extends('layouts.dashboard')
@section('page_heading','Loja')

@section('section')
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
<div class="row">
	<div class="col-sm-12">
		@section ('cotable_panel_title','Registo de Loja')
		@section ('cotable_panel_body')

	<form class="form-horizontal form-label-left"  method="POST" action="{{ action('lojaController@insert')}}" enctype="multipart/form-data">
        {{csrf_field()}}


                  <div class="form-group">
                    <label class="control-label col-md-3" for="first-name">Nome :  <span class="required">*</span>
                    </label>
                    <div class="col-md-7">
    <div class="col-md-7">
                          <select class="form-control col-md-7 col-xs-12" name="loja">
                          

        @foreach($dropdown as $role)
            <option value="{{ $role->Nome }}" {}>{{ $role->Nome }}</option>    

    @endforeach



                          </select>
                        </div>                      <button class="btn btn-success">Adicionar </button>
                    </div>
                  </div>
<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Provincia</label>
                        <div class="col-md-7">
                          <select class="form-control col-md-7 col-xs-12" name="Provincia">
                            <option>Maputo</option>
                            <option>Gaza</option>
                            <option>Inhambane</option>
                            <option>Sofala</option>
                            <option>Manica</option>
                            <option>Zambezia</option>
                            <option>Tete</option>
                            <option>Niassa</option>
                            <option>Nampula</option>

                                                                                                                                            <option>Cabo delegado</option>




                          </select>
                        </div>
                      </div>

<div class="form-group">
                    <label class="control-label col-md-3" for="first-name">Bairro :  <span class="required">*</span>
                    </label>
                    <div class="col-md-7">
                      <input type="text" id="Nome" placeholder="Nome Bairro" required="required" name="Bairro"  class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>



                  <div class="form-group">
                    <label class="control-label col-md-3" for="first-name">Email <span class="required">*</span>
                    </label>
                    <div class="col-md-7">
                      <input type="email" id-="Email" class="form-control" placeholder=" email" name="Email" required="required">
                    </div>
                  </div>

 <div class="form-group">
                    <label class="control-label col-md-3" for="first-name">Celular <span class="required">*</span>
                    </label>
                 

                    <div class="col-md-7">

                        <input type="text" class="form-control" id="Celular" name="Celular" placeholder="Celular"   required="required">
                      </div>
                    </div>
   <div class="form-group">
                    <label class="control-label col-md-3" for="first-name">Localização :  <span class="required">*</span>
                    </label>
                    <div class="col-md-7">
                      <input type="text" id="Nome" name="Localizacao" placeholder="Nome Completo" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>


<div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" >Logotipo</label>
                <input  type="file" name="photo">
            </div>

<div class="form-group">
                    <label class="control-label col-md-3" for="first-name">Descrição   <span class="required">*</span>
                    </label>
                    <div class="col-md-7">
                      <input type="text"  name="descricao" required="required" placeholder="" class="form-control col-md-7 col-xs-12">

                    </div>
                  </div>
            <hr>
<h2>Responsavel</h2>
<div class="form-group">
                    <label class="control-label col-md-3" for="first-name">Nome :   <span class="required">*</span>
                    </label>
                    <div class="col-md-7">
                      <input type="text"  name="nomeR" required="required" placeholder="" class="form-control col-md-7 col-xs-12">
                      
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3" for="first-name">Email   <span class="required">*</span>
                    </label>
                    <div class="col-md-7">
                      <input type="mail"  name="emailR" required="required" placeholder="" class="form-control col-md-7 col-xs-12">
                      
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3" for="first-name">Contacto   <span class="required">*</span>
                    </label>
                    <div class="col-md-7">
                      <input type="number"  name="contactoR" required="required" placeholder="" class="form-control col-md-7 col-xs-12">
                      
                    </div>
                  </div>

            <div class="form-group">
                    <label class="control-label col-md-3" for="first-name">Password   <span class="required">*</span>
                    </label>
                    <div class="col-md-7">
                      <input type="text" id="Password" name="Password" required="required" placeholder="Password" class="form-control col-md-7 col-xs-12">
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