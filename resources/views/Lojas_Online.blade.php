@extends('layouts.dashboard')
@section('page_heading','Lojas Online')

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

      <script src="{{ asset("js/custom.min.js") }}" type="text/javascript"></script>
  <script src="{{ asset("js/nprogress.javascript") }}" type="text/javascript"></script>
  <script src="{{ asset("js/bootstrap-progressbar.min.js") }}" type="text/javascript"></script>


<div class="row">
  <div class="col-sm-12">
    @section ('cotable_panel_title','Lista das Lojas')
    @section ('cotable_panel_body')

          <p align="right">

                          <button type="button"  class="btn btn-round btn-primary" onclick="window.location='{{ url("/publicar_loja") }}'">adicionar</button>
</p>

<!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 1%">#</th>
                          <th style="width: 20%">Lojas</th>
                          <th>Data de Inico</th>
                          <th>Data de Termino</th>
                          <th>Tempo Restante</th>
                          <th>Produtos</th>
                          <th>Produtos Cadastrados</th>


                          <th style="width: 20%">#Edit</th>
                        </tr>
                      </thead>
                      <tbody>
                @foreach($listOnline as $val)

                        <tr>
                          <td>#</td>
                          
                          <td><?php 
$id=$val->ID_loja;
        $listOnlinee=DB::table('loja_reg')->where('ID',$id)->first();

echo "".$listOnlinee->Nome;
                          ?> </td>
                         <td>{{$val->DataInicio}} </td>
                                                  <td>{{$val->DataInicio}} </td>

 <td>
                            <button type="button" class="btn btn-success">


__                            </button>
                          </td>
                         <td>  {{$val->QuantT}}      </td>
                        
                          <td>
                           {{$val->QuantD}}
                          </td>
                           <td>
                            <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>



    <!-- bootstrap-progressbar -->
    
    <!-- Custom Theme Scripts -->

    @endsection
    @include('widgets.panel', array('header'=>true, 'as'=>'cotable'))
  </div>
</div>  

@stop