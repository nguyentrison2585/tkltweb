<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DiemHocPhan;

class DiemHocPhanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $query = DiemHocPhan::query();

        if($request->has('ma_sv') && $request->get('ma_sv') !== null) {
            $query->where('ma_sinh_vien', $request->get('ma_sv'));
        }

        $items = $query->get();

        return view('admin.diem_hoc_phan.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.diem_hoc_phan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->post();

        DiemHocPhan::create($data);

        return redirect('admin/diem-hoc-phan')->with('status', 'Thêm mới điểm học phần thành công');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DiemHocPhan::where('id_diem', $id)->first();

        return view('admin.diem_hoc_phan.edit', [
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->post();

        unset($data['_token']);

        DiemHocPhan::where('id_diem', $id)->update($data);

        return redirect('admin/diem-hoc-phan')->with('status', 'Sửa điểm học phần thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DiemHocPhan::where('id_diem', $id)->delete();

        return redirect('admin/diem-hoc-phan')->with('status', 'Xóa điểm học phần thành công');
    }

    public function bang_diem_hoc_phan_sv(Request $request)
    {
        if($request->has('ma_sv')) {
            $data = DiemHocPhan::where('ma_sinh_vien', $request->get('ma_sv'))->get();

            return view('bang_diem_hoc_phan', [
                'items' => $data
            ]);
        } else {
            return view('bang_diem_hoc_phan');
        }
    }
}
