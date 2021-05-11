<?php

namespace App\Http\Controllers;

use App\Exports\EmployeeExport;
use App\Models\Employee;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class EmployeeController extends Controller
{
    public function addEmployee()
    {
        $employee=[
          ['name'=>'komron1','email'=>'sldasdasd@dcskdf1.com','phone'=>'1234567890','salary'=>'20000','department'=>'Accounting1'],
          ['name'=>'komron2','email'=>'sldasdasd@dcskdf2.com','phone'=>'1234567890','salary'=>'20000','department'=>'Accounting2'],
          ['name'=>'komron3','email'=>'sldasdasd@dcskdf3.com','phone'=>'1234567890','salary'=>'20000','department'=>'Accounting3'],
          ['name'=>'komron4','email'=>'sldasdasd@dcskdf4.com','phone'=>'1234567890','salary'=>'20000','department'=>'Accounting4'],
        ];
        if (Employee::insert($employee)) {
            return "ok";
        }
        return 'iwkal';
    }

    public function exportToExcel()
    {
        return Excel::download(new EmployeeExport(),'employee.xlsx');
    }

    public function exportIntoCSV()
    {
        return Excel::download(new EmployeeExport(),'employee.csv');

    }
}
