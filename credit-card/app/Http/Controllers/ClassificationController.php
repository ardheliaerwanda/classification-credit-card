<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Simulasi;
use Carbon\Carbon;
use DB;

class ClassificationController extends Controller
{
    public function index()
    {
        $simulasi = Simulasi::Paginate(5);
        return view('classification.index', ['simulasi' => $simulasi]);
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
            'JOB' => 'required',
        ]);
      //  $yearBirth = Carbon::parse($request->DAYS_BIRTH)->age;
      //  $yearEmployed = Carbon::parse($request->DAYS_EMPLOYED)->age;

        
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
                "JOB" => $input['JOB'],
            ]
        ]);

        $output = json_decode($r->getBody());
        $status = $output->result;
        $input["TARGET"] = $status;

        Simulasi::create($input);
        return redirect('/result');
    }
}

