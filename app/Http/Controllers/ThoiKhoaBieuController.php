<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SinhVien;
use App\HocPhan;
use App\DKHocPhanTCTD;
use App\DKHocPhan;
use Illuminate\Support\Facades\DB;


class ThoiKhoaBieuController extends Controller
{
    public function index(Request $request)
    {
        $data = [];

        if($request->has('ma_sv')) {
            $ma_sv = '20154080';

            $dkhp = DKHocPhan::where('ma_sinh_vien', $ma_sv)->get()->toArray();
            $dkhptctd = DKHocPhanTCTD::where('ma_sinh_vien', $ma_sv)->get()->toArray();


            $list_ma_hoc_phan = [];

            foreach(array_merge($dkhp, $dkhptctd) as $hoc_phan) {
                array_push($list_ma_hoc_phan, $hoc_phan['ma_hoc_phan']);
            }

            $data = DB::table('lop_hoc')
                ->select(DB::raw('hoc_phan.*,lop_hoc.*'))
                ->join('hoc_phan', 'lop_hoc.ma_hoc_phan', '=', 'hoc_phan.ma_hoc_phan', 'right')
                ->whereIn('lop_hoc.ma_hoc_phan', $list_ma_hoc_phan)
                ->get();

            dd($data);
        }

        return view('thoi_khoa_bieu', [
            'items' => $data
        ]);

    }
}
