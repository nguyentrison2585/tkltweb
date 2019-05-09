<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DKHocPhanTCTD;
use App\DKHocPhan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\SinhVien;


class DKHocPhanController extends Controller
{
    public function index_dang_ky_hoc_phan(Request $request)
    {
        if ($request->has('hoc_ky') && $request->has('ma_hoc_phan')) {
            $data = DB::table('hoc_phan')
                ->select(DB::raw('hoc_phan.*,lop_hoc.*'))
                ->join('lop_hoc', 'lop_hoc.ma_hoc_phan', '=', 'hoc_phan.ma_hoc_phan')
                ->where('hoc_phan.ma_hoc_phan', '=', $request->get('ma_hoc_phan'))
                ->first();

            $count_tc = DKHocPhan::where('ma_hoc_phan', $request->get('ma_hoc_phan'))->where('hoc_ky', $request->get('hoc_ky'))->count();

            return view('dang_ky_hoc_phan', [
                'item' => $data,
                'count_tc' => $count_tc
            ]);
        } else {
            return view('dang_ky_hoc_phan');
        }

    }

    public function dang_ky_hoc_phan(Request $request)
    {
        $this->validate($request,[
            'ma_hoc_phan' => 'required',
            'hoc_ky' => 'required'
        ]);

        $ma_sv = SinhVien::where('id_tai_khoan', Auth::id())->first()->ma_sinh_vien;

        $check = DKHocPhan::where('ma_hoc_phan', $request->get('ma_hoc_phan'))->where('hoc_ky', $request->get('hoc_ky'))->where('ma_sinh_vien', $ma_sv)->first();

        if($check !== null) {
            return redirect()->back()->withErrors('Bạn đã đăng kí học phần này rồi!');
        }

        $check2 = DKHocPhan::where('hoc_ky', $request->get('hoc_ky'))->count();
        if($check2 >= 24) {
            return redirect()->back()->withErrors('Không thể đăng ký thêm học phần trong học kỳ này');
        }

        $data = [
            'ma_hoc_phan' => $request->get('ma_hoc_phan'),
            'hoc_ky' => $request->get('hoc_ky'),
            'ma_sinh_vien' => $ma_sv
        ];

        DKHocPhan::insert($data);

        return redirect()->back()->with('status', 'Đăng ký học phần thành công');
    }

    public function index_dang_ky_tctd(Request $request)
    {
        if ($request->has('hoc_ky') && $request->has('ma_hoc_phan')) {
            $data = DB::table('hoc_phan')
                ->select(DB::raw('hoc_phan.*,lop_hoc.*'))
                ->join('lop_hoc', 'lop_hoc.ma_hoc_phan', '=', 'hoc_phan.ma_hoc_phan')
                ->where('hoc_phan.ma_hoc_phan', '=', $request->get('ma_hoc_phan'))
                ->first();

            $count_tc = DKHocPhanTCTD::where('ma_hoc_phan', $request->get('ma_hoc_phan'))->where('hoc_ky', $request->get('hoc_ky'))->count();

            return view('dang_ky_tctd', [
                'item' => $data,
                'count_tc' => $count_tc
            ]);
        } else {
            return view('dang_ky_tctd');
        }

    }

    public function dang_ky_tctd(Request $request)
    {
        $this->validate($request,[
            'ma_hoc_phan' => 'required',
            'hoc_ky' => 'required'
        ]);

        $ma_sv = SinhVien::where('id_tai_khoan', Auth::id())->first()->ma_sinh_vien;

        $check = DKHocPhanTCTD::where('ma_hoc_phan', $request->get('ma_hoc_phan'))->where('hoc_ky', $request->get('hoc_ky'))->where('ma_sinh_vien', $ma_sv)->first();

        if($check !== null) {
            return redirect()->back()->withErrors('Bạn đã đăng kí học phần này rồi!');
        }

        $check2 = DKHocPhanTCTD::where('hoc_ky', $request->get('hoc_ky'))->count();
        if($check2 >= 24) {
            return redirect()->back()->withErrors('Không thể đăng ký thêm học phần trong học kỳ này');
        }

        $data = [
            'ma_hoc_phan' => $request->get('ma_hoc_phan'),
            'hoc_ky' => $request->get('hoc_ky'),
            'ma_sinh_vien' => $ma_sv
        ];

        DKHocPhanTCTD::insert($data);

        return redirect()->back()->with('status', 'Đăng ký học phần thành công');
    }
}
