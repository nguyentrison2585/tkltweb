<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\HocPhan;

class HocPhanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $query = HocPhan::query();

        if($request->has('ma_hoc_phan') && $request->get('ma_hoc_phan') !== null) {
            $query->where('ma_hoc_phan', $request->get('ma_hoc_phan'));
        }

        $items = $query->get();

        return view('admin.hoc_phan.index', [
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
        return view('admin.hoc_phan.create');
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

        HocPhan::create($data);

        return redirect('admin/hoc-phan/')->with('status', 'Thêm mới học phần thành công');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = HocPhan::where('ma_hoc_phan', $id)->first();

        return view('admin.hoc_phan.edit', [
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

        HocPhan::where('ma_hoc_phan', $id)->update($data);

        return redirect('admin/hoc-phan')->with('status', 'Sửa học phần thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        HocPhan::where('ma_hoc_phan', $id)->delete();

        return redirect('admin/hoc-phan')->with('status', 'Xóa học phần thành công');
    }
}
