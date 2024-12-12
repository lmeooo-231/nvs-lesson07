<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NvsMonHocController extends Controller
{
    // #1. list môn học
    public function nvsList()
    {
        $nvsMonHocs DB::table('nvsmonhoc')->get();
        return view('nvsMonHoc.nvsList',['nvsMonHocs'=>$nvsMonHocs]);
    }
}
