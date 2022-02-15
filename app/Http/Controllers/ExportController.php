<?php

namespace App\Http\Controllers;

use App\Exports\ContactExport;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller 
{
    public function export() 
    {
        return Excel::download(new ContactExport, 'users.xlsx');
    }
}