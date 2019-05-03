<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DiemToeic as Toeic;

class ToeicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $query = Toeic::query();

        if($request->has('ma_sv') && $request->get('ma_sv') !== null) {
            $query->where('ma_sinh_vien', $request->get('ma_sv'));
        }

        $items = $query->get();

        return view('admin.toeic.index', [
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
        return view('admin.toeic.create');
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

//        dd($data);

        Toeic::create($data);

        return redirect('admin/diem-toeic')->with('status', 'Thêm mới điểm thi TOEIC thành công');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Toeic::findOrFail($id);

        return view('admin.toeic.edit', [
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

        Toeic::where('id', $id)->update($data);

        return redirect('admin/diem-toeic')->with('status', 'Sửa điểm TOEIC thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Toeic::where('id', $id)->delete();

        return redirect('admin/diem-toeic')->with('status', 'Xóa điểm TOEIC thành công');
    }

    public function ket_qua_thi_toeic(Request $request)
    {
        if($request->has('ma_sv')) {
            $data = Toeic::where('ma_sinh_vien', $request->get('ma_sv'))->get();

            return view('ket_qua_thi_toeic', [
                'items' => $data
            ]);
        } else {
            return view('ket_qua_thi_toeic');
        }
    }
}
