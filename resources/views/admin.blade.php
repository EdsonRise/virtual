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
		@section ('cotable_panel_title','Lista da Admininstração')
		@section ('cotable_panel_body')

					<p align="right">

                          <button type="button"  class="btn btn-round btn-primary" onclick="window.location='{{ url("/Registo_admin") }}'">adicionar</button>
</p>

	<table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 1%">#</th>
                          <th style="width: 20%">Nome</th>
                          <th>Email</th>
                          <th>Status</th>
                          <th style="width: 20%">#Edit</th>
                        </tr>
                      </thead>
                      <tbody>
                       @foreach($listadmin as $val)
                        <tr>

                          <td>
                            <a> {{$val->ID_Admin }}</a>
                            <br />
                            <small></small>
                          </td>
                          <td>
                          	{{$val->Username }}
                             </td>
                             <td>
                            {{$val->Email }}
                             </td>
                          	  <td>

                            <button type="button" class="btn btn-success btn-xs" >

<?php
 $x=$val->Status ;
 if ($x==1) {
echo "Online";

 }
else
echo"Offline"
?>
                            </button>
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
		@endsection
		@include('widgets.panel', array('header'=>true, 'as'=>'cotable'))
	</div>
</div>	

@stop