<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Simulasi;
use DB;

class SimulasiController extends Controller
{
    public function index()
    {
        $simulasi = Simulasi::Paginate(5); 
        return view ('simulasi.index',['simulasi' => $simulasi]);
    }
    public function hasil()
    {
        $simulasi = Simulasi::all()->last()->TARGET;
        return view ('simulasi.hasil',['simulasi' => $simulasi]);
    }

    public function store(Request $request)
    {
        //insert ke table simulasi
        $request->validate([
            'CODE_GENDER' => 'required',
            'FLAG_OW0_CAR' => 'required',
            'FLAG_OW0_REALT1' => 'required',
            'CNT_CHILDREN' => 'required',
            'AMT_INCOME_TOTAL' => 'required',
            'NAME_EDUCATION_TYPE' => 'required',
            'NAME_FAMILY_STATUS' => 'required',
            'NAME_HOUSING_TYPE' => 'required',
            'DAYS_BIRTH' => 'required',
            'DAYS_EMPLOYED' => 'required',
            'FLAG_MOBIL' => 'required',
            'FLAG_WORK_PHONE' => 'required',
            'FLAG_PHONE' => 'required',
            'FLAG_EMAIL' => 'required',
            'JOB' => 'required',
        ]);

        var_dump($request->all());
        $input = $request->all();
        $client = new \GuzzleHttp\Client();
        $r = $client->request('POST', 'http://localhost:3333/predict', [
            'json' => [
                "CODE_GENDER" => $input['CODE_GENDER'],
	            "FLAG_OW0_CAR" => $input['FLAG_OW0_CAR'],
	            "FLAG_OW0_REALT1" => $input['FLAG_OW0_REALT1'],
	            "CNT_CHILDREN" => $input['CNT_CHILDREN'],
                "AMT_INCOME_TOTAL" => $input['AMT_INCOME_TOTAL'],
                "NAME_EDUCATION_TYPE" => $input['NAME_EDUCATION_TYPE'],
                "NAME_FAMILY_STATUS" => $input['NAME_FAMILY_STATUS'],
                "NAME_HOUSING_TYPE" => $input['NAME_HOUSING_TYPE'],
                "DAYS_BIRTH" => $input['DAYS_BIRTH'],
                "DAYS_EMPLOYED" => $input['DAYS_EMPLOYED'],
                "FLAG_MOBIL" => $input['FLAG_MOBIL'],
                "FLAG_WORK_PHONE" => $input['FLAG_WORK_PHONE'],
                "FLAG_PHONE" => $input['FLAG_PHONE'],
                "FLAG_EMAIL" => $input['FLAG_EMAIL'],
                "JOB" => $input['JOB'],
                ]
        ]);
         
        $output = json_decode($r->getBody());
        $status = $output->result;
        $input["TARGET"] = $status;

        Simulasi::hasil($input);
        return view('simulasi.hasil')->with('success','Prediksi created successfully.');
    }

   
}
