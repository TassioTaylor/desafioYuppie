<?php

namespace App\Http\Controllers;

use App\Imports\ProdutosImport;
use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function index()
    {
        return view('import_excel');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function export()
    {

    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function import()
    {
        Excel::import(new ProdutosImport(),request()->file('file'));

        return redirect()->to('produtos');
    }
}