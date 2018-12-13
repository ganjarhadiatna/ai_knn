<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Main;
use App\Result;

class MainController extends Controller
{
	//public
    function index()
    {
    	$data = Main::paginate(10);
    	return view('index', [
    		'data' => $data
    	]);
    }
    function create()
    {
    	return view('create');
    }
    function edit($id)
    {
    	$data = Main::where('id_penerimaan_modal', $id)->get();
    	return view('edit', [
    		'data' => $data
    	]);
    }
    function cluster()
    {
    	return view('cluster');
    }
    function result($k, $a, $b, $c, $d)
    {
    	$data = Result::GetAll($k);
    	return view('result', [
    		'data' => $data,
    		'a' => $a,
    		'b' => $b,
    		'c' => $c,
    		'd' => $d
    	]);
    	/*
    	//pengurutan dan hasil
    	$result = Result::Get($nilai_k);
    	foreach ($result as $rs) {
    		echo '('.$rs->lama_usaha.' - '.$lama_usaha.')^2 + ';
    		echo '('.$rs->jumlah_pekerja.' - '.$jumlah_pekerja.')^2 + ';
    		echo '('.$rs->omzet.' - '.$omzet.')^2 + ';
    		echo '('.$rs->jumlah_aset.' - '.$jumlah_aset.')^2 = '.$rs->jarak;
    		echo ' => '.$rs->hasil_keputusan.'<br>';
    	}
    	*/
    }

    //private
    function publish(Request $req)
    {
    	$data = [
    		'nama_ukm' => $req['nama_ukm'],
    		'lama_usaha' => $req['lama_usaha'],
    		'jumlah_pekerja' => $req['jumlah_pekerja'],
    		'omzet' => $req['omzet'],
    		'jumlah_aset' => $req['jumlah_aset'],
    		'hasil_keputusan' => $req['hasil_keputusan']
    	];
    	$rest = Main::insert($data);
    	if ($rest) 
    	{
    		return redirect(route('main-create'));
    	} 
    	else 
    	{
    		echo '<script>alert("failed insert data")</script>';
    		return redirect(route('main-create'));
    	}
    }
    function put(Request $req)
    {
    	$id = $req['id'];
    	$data = [
    		'nama_ukm' => $req['nama_ukm'],
    		'lama_usaha' => $req['lama_usaha'],
    		'jumlah_pekerja' => $req['jumlah_pekerja'],
    		'omzet' => $req['omzet'],
    		'jumlah_aset' => $req['jumlah_aset'],
    		'hasil_keputusan' => $req['hasil_keputusan']
    	];
    	$rest = Main::where('id_penerimaan_modal', $id)->update($data);
    	if ($rest) 
    	{
    		return redirect(route('main-page'));
    	} 
    	else 
    	{
    		echo '<script>alert("failed update data")</script>';
    		return redirect(route('main-page'));
    	}
    }
    function remove(Request $req)
    {
    	$id = $req['id'];
    	$rest = Main::where('id_penerimaan_modal', $id)->delete();
    	if ($rest) 
    	{
    		return redirect(route('main-page'));
    	} 
    	else 
    	{
    		echo '<script>alert("failed delete data")</script>';
    		return redirect(route('main-page'));
    	}
    }
    function cluster_result(Request $req)
    {
    	//unused variable
    	$sorting = [];


    	//fix variable
    	$lama_usaha = $req['lama_usaha'];
    	$jumlah_pekerja = $req['jumlah_pekerja'];
    	$omzet = $req['omzet'];
    	$jumlah_aset = $req['jumlah_aset'];

    	//menentukan nilai k
    	$nilai_k = $req['nilai_k'];

    	//delete result
    	Result::query()->delete();

    	$data = Main::get();
    	foreach ($data as $dt) {
    		$a = ($dt->lama_usaha - $lama_usaha)**2;
    		$b = ($dt->jumlah_pekerja - $jumlah_pekerja)**2;
    		$c = ($dt->omzet - $omzet)**2;
    		$d = ($dt->jumlah_aset - $jumlah_aset)**2;
    		$f = $a + $b + $c + $d;

    		//add to result
    		Result::insert([
    			'id_penerimaan_modal' => $dt->id_penerimaan_modal,
    			'jarak' => $f
    		]);
    	}

    	return redirect(route('main-result', [
    		$nilai_k, 
    		$lama_usaha,
    		$jumlah_pekerja,
    		$omzet,
    		$jumlah_aset
    	]));

    }
}
