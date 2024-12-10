<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NvsKhoaController extends Controller
{
    //# đọc dữ liệu từ bảng khoa
    public function nvsGetAllKhoa()
    {
        // truy vấn đọc dữ liệu từ bảng khoa
        $nvsKhoas = DB::select("select * from nvskhoa");

        // chuyển dữ liệu lên view để hiển thị
        return view('NvsKhoa.NvsList',['nvsKhoas' => $nvsKhoas]);
    }
    //#chi tiết khoa
    public function nvsGetKhoa($makh)
    {
        $khoa = DB::select("select * from nvskhoa where nvsmakh=?",[$makh])[0];
        return view('NvsKhoa.nvsDetail',['khoa'=>$khoa]);
    }
    //edit-get
    public function nvsEdit($makh)
    {
        $khoa = DB::select("select * from nvskhoa where nvsmakh=?",[$makh])[0];
        return view('NvsKhoa.nvsEdit',['khoa'=>$khoa]);
    }
    //edit-submit
    public function nvsEditSubmit(Request $request)
    {
        $makh = $request->input('NVSMAKH');
        $tenkh = $request->input('NVSTENKH');
        DB::update("UPDATE nvskhoa SET NVSTENKH = ? WHERE NVSMAKH=?",[$tenkh,$makh]);
        return rediect('/khoas');
    }
}
