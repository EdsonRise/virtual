<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;	
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
class adminController extends Controller
{
	    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function insert(Request $req){
    
    $Nome = $req->input('Nome');
    $Email = $req->input('Email');
    $Celular = $req->input('Celular');
    $Password = $req->input('Password');
    $estado = $req->input('estado');
    $previlegio = $req->input('previlegio');


$admin= array("ID_Admin"=>null,"Celular"=>$Celular, "Username"=>$Nome, "Password"=>password_hash($Password, PASSWORD_DEFAULT), "Status"=>$estado, "previlege"=>$previlegio, "Email"=>$Email, "Create_date"=> date("Y/m/d"), "Modify_date"=> date("Y/m/d") , "nullable"=>1	);

$age = array("id"=>null, "title"=>"37", "post"=>"43");

    	DB::table('admin')->insert($admin);

return redirect()->route('listad')->with('dasdsdsa', 'IT WORKS!');

    }


    function list(){

    	$listadmin['listadmin']=DB::table('admin')->get();

        if (count($listadmin)>  0) {
        	# code...
        	return view('admin',$listadmin);
        }
        else
        {
        	return  view('admin');
        }


    }



}
