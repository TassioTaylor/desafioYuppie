<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExcelController extends Controller
{

    public function importExportView(){

        return view('import');

    }

    public function importFile(Request $request)
    {
        if ($request->hasFile('sample_file')) {

            $path = $request->file('sample_file')->getRealPath();
            $data = \Excel::load($path)->get();

            if ($data->count()) {
                foreach ($data as $key => $value) {

                    $arr[] = ['title' => $value->title, 'body' => $value->body];
                }
                if (!empty($arr)) {
                    DB::table('alunos')->insert($arr);

                    dd('Insert Recorded successfully.');
                }

            }

        }
    }
}
