@extends('layouts.dashboard')
@section('page_heading','Usuarios')

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
    @section ('cotable_panel_title','Lista dos Usuarios')
    @section ('cotable_panel_body')



<!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 20%">Nome</th>
                          <th>Conta</th>
                          <th style="width: 20%">#Edit</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <a>Edson</a>
                            <br />
                          </td>
                          <td class="project_progress">
                            <a>Edson</a>
                          
                          <td>
                            <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                        </tr>
                        
                      </tbody>
                    </table>



    <!-- bootstrap-progressbar -->
    
    <!-- Custom Theme Scripts -->

    @endsection
    @include('widgets.panel', array('header'=>true, 'as'=>'cotable'))
  </div>
</div>  

@stop