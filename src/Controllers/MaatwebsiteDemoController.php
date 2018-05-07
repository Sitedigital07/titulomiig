<?php

namespace Digitalmiig\Titulomiig\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Digitalmiig\Titulomiig\Item;
use Digitalmiig\Titulomiig\Colegio;
use Digitalmiig\Titulomiig\Titulo;
use DB;
use Input;
use Excel;

class MaatwebsiteDemoController extends Controller
{
	public function importExport()
	{
		return view('titulomiig::importExport');
	}

	public function downloadExcel($type)
	{
		$data = Item::get()->toArray();
		return Excel::create('itsolutionstuff_example', function($excel) use ($data) {
			$excel->sheet('mySheet', function($sheet) use ($data)
	        {
				$sheet->fromArray($data);
	        });
		})->download($type);
	}


	public function importExcel()
	{
		if(Input::hasFile('import_file')){
			$path = Input::file('import_file')->getRealPath();
			$data = Excel::load($path, function($reader) {
			})->get();
			if(!empty($data) && $data->count()){
				foreach ($data as $key => $value) {
					$insert[] = ['title' => $value->title, 'description' => $value->description];
				}
				if(!empty($insert)){
					DB::table('items')->insert($insert);
					dd('Insert Record successfully.');
				}
			}
		}
		return back();
	}


public function exportadores()
	{

Excel::create('Filename', function($excel) {

    $excel->sheet('Sheetname', function($sheet) {

      
       $colegios = Colegio::all();
       $sheet->fromArray($colegios);

    });

})->export('xls');
}


	public function exportador($type)
	{
		$data = Titulo::get()->toArray();
		return Excel::create('titulos', function($excel) use ($data) {
			$excel->sheet('mySheet', function($sheet) use ($data)
	        {
				$sheet->fromArray($data);
	        });
		})->download($type);
	}

	public function importador()
	{
		if(Input::hasFile('import_file')){
			$path = Input::file('import_file')->getRealPath();
			$data = Excel::load($path, function($reader) {
			})->get();
			if(!empty($data) && $data->count()){
				foreach ($data as $key => $value) {
					$insert[] = ['nombre' => $value->nombre, 'grado' => $value->grado, 'asignatura' => $value->asignatura, 'precio' => $value->precio,];
				}
				if(!empty($insert)){
					DB::table('titulo')->insert($insert);
					dd('Insert Record successfully.');
				}
			}
		}
		return back();
	}


}
