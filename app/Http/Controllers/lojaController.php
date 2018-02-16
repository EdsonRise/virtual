<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;	
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;



class lojaController extends Controller
{
	    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function insert(Request $req){
        $Nome = $req->input('loja');
        $Provincia = $req->input('Provincia');
        $Bairro = $req->input('Bairro');
        $Email = $req->input('Email');
        $Celular = $req->input('Celular');
        $Localizacao = $req->input('Localizacao');
        $Password = $req->input('Password');
        $descricao = $req->input('descricao');
        $photo = $req->file('photo');
        $nomeR = $req->input('nomeR');
        $emailR = $req->input('emailR');
        $contactoR = $req->input('contactoR');

        $img  =$photo->getClientOriginalName();
        $dir_upload=public_path('upload_files/loja');
        if ($photo->move($dir_upload,$img)) {

$loja= array("ID"=>null,"Nome"=>$Nome, "Provincia"=>$Provincia, "Bairro"=>$Bairro ,"Celular"=>$Celular, "Localizacao"=>$Localizacao,"descricao"=>$descricao,"photo"=>$img, "Create_date"=> date("Y/m/d"), "Modify_date"=> date("Y/m/d"));
        DB::table('loja_reg')->insert($loja);
$id = DB::getPdo()->lastInsertId();;


$user= array("ID"=>null,"Nome"=>$nomeR, "Email"=>$emailR,"Contacto"=>$contactoR, "Loja"=>$id,"cargo"=>"super");
        DB::table('user_loja')->insert($user);

        

        }

    }

    function dropdown(Request $req){

    $dropdown['dropdown']=DB::table('loja')->get();

    return view('Regloja',$dropdown);

    }


    function list(){

    	$listadmin['listadmin']=DB::table('loja_reg')->get();

        if (count($listadmin)>  0) {
        	# code...
        	return view('lojas',$listadmin);
        }
        else
        {
        	return  view('lojas');
        }


    }

   function loja_bairro(Request $req){

    $dropdown['dropdown']=DB::table('loja_reg')->get();

    return view('publicar_loja',$dropdown);

    }
    function insertOnline(Request $req){
        $Nome = $req->input('loja');
                $dataI = $req->input('dataI');

                $dataF = $req->input('dataF');

        $quant = $req->input('quant');
        $admin= array("ID"=>null,"ID_loja"=>$Nome, "DataInicio"=>$dataI, "DataFim"=>$dataF, "QuantT"=>$quant, "QuantD"=>$quant, "status"=>1, "Create_date"=> date("Y/m/d"), "Modify_date"=> date("Y/m/d"));


        DB::table('loja_on')->insert($admin);

        }

        function listOnline(Request $req){
        

        $listOnline['listOnline']=DB::table('loja_on')->get();

        if (count($listOnline)>  0) {
            # code...
            return view('Lojas_Online',$listOnline);
        }
        else
        {
            return  view('Lojas_Online');
        }

        

        }



    }




