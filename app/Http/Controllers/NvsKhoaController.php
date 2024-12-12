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
// #insert - get
public function nvsInsert()
{
    return view('nvsKhoa.nvsInsert');
}
//insert - post
public function nvsInsertSubmit(Request $request)
{
    //kiểm tra dữ liệu nhập
    $validate = $request->validate([
        'NVSMAKH' => 'required|max:2',
        'NVSTENKH'=> 'required|max:50'
    ],
    [
        'NVSMAKH.required'=>'vui lòng nhập mã khoa'
        'NVSMAKH.max'=>'mã khoa tối đa 2 ký tự'
        'NVSTENKH.required'=>'vui lòng nhập tên khoa'
        'NVSTENKH.max'=>'tên khoa tối đa 50 ký tự'
    ]);
    //lấy dữ liệu trên form
    $makh = $request->input('NVSMAKH');
    $tenkh = $request->input('NVSTENKH');
    //ghi dữ liệu xuống database
    DB::insert("INSERT INTO nvskhoa(NVSMAKH, NVSTENKH) VALUES (?,?) ",[$makh, $tenkh];
    //chuyển sang trang danh sách
    return rediect('/khoas');
    // delete
    public function nvsDelete($makh)
    {
        DB::delete("DELETE FROM nvskhoa WHERE NVSMAKH=?",[$makh]);
        // chuyển sang trang danh sách
        return rediect('/khoas');

    }
}
}