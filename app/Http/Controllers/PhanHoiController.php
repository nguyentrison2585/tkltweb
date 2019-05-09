<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PhanHoi;

class PhanHoiController extends Controller
{
    public function index()
    {
        return view('phan_hoi');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'tieu_de' => 'required|string',
            'noi_dung' => 'required|string'
        ]);

        $data = [
            'tieu_de' => $request->post('tieu_de'),
            'noi_dung' => $request->post('noi_dung')
        ];

        PhanHoi::insert($data);

        return redirect('/phan-hoi')->with('status', 'Thêm góp ý thành công');
    }
}
