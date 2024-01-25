<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserAccMenu;
use Yajra\Datatables\Datatables;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Illuminate\Support\Facades\DB;


class UserAccMenuController extends Controller
{
    public function userAccMenu(){

        $userAccMenu=UserAccMenu::all();

        return view('adm.userAccMenu', compact('userAccMenu'),[
            "title"=>"User Acces Menu",
            "active"=>"userAccMenu"
        ]);
    }

    public function jsonUserAccMenu(){
        $userAccMenu=UserAccMenu::all();

        return DataTables::of($userAccMenu)
        ->addColumn('noUrut',function($userAccMenu){
            static $index=1;
            return $index++;
        })
        ->addColumn('action',function($userAccMenu){
            $action='<a href="#" class="btn btn-sn btn-warning">Edit</a>
            <a href="#" class="btn btn-sn btn-danger">Delete</a>';
            return $action;
        })
        ->toJson();
    }

    public function uploadExcel(Request $request){
        $request->validate([
            'excel_file' => 'required|mimes:xls,xlsx,zip',
        ]);

        $path = $request->file('excel_file')->getRealPath();
        $spreadsheet = (new Xlsx())->load($path);
        $data = $spreadsheet->getActiveSheet()->toArray();

        // Sesuaikan dengan struktur data dan tabel Anda
        foreach ($data as $row) {
            DB::table('user_acc_menus')->insert([
                'username' => $row[0], // Sesuaikan dengan kolom spreadsheet
                'form_id' => $row[1],
                'allow_create' => $row[2],
                'allow_update' => $row[3],
                'allow_delete' => $row[4],
                'allow_print' => $row[5],
                'allow_conf' => $row[6],
                'allow_open' => $row[7],
                'created_at' => $row[8],
                'updated_at' => $row[9]
            ]);
        }

        return redirect()->back()->with('toast_success','Data berhasil diupload');
    }

}
