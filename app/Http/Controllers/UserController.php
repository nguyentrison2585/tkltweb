<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $query = User::query();

        if($request->has('ma_sv') && $request->get('ma_sv') !== null) {
            $query->where('tai_khoan', $request->get('ma_sv'));
        }

        $users = $query->get();

        return view('admin.user.index', [
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
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

        $data['mat_khau'] = bcrypt($data['mat_khau']);

        User::create($data);

        return redirect('admin/users')->with('status', 'Thêm mới user thành công');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('admin.user.edit', [
            'user' => $user
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

        if($request->has('mat_khau') && $request->post('mat_khau') !== null){
            $data['mat_khau'] = bcrypt($data['mat_khau']);
        } else {
            unset($data['mat_khau']);
            unset($data['_token']);
        }

        User::where('id', $id)->update($data);

        return redirect('admin/users')->with('status', 'Sửa user thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id', $id)->delete();

        return redirect('admin/users')->with('status', 'Xóa user thành công');
    }


    /**
     * Ho so ca nhan
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function my_profile()
    {

        $data = User::where('id', Auth::id())->first();

        return view('my_profile', [
            'data' => $data
        ]);
    }

    /**
     * view doi mat khau
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function change_password()
    {
        return view('change_password');
    }

    public function update_password(Request $request)
    {

        $this->validate($request, [
            'current_password' => 'required',
            'password' => 'required|confirmed',
        ]);

        $data = $request->post();

        if(!password_verify($data['current_password'], Auth::user()->mat_khau)) {
            return redirect()->back()->withErrors('Mật khẩu hiện tại không đúng');
        }

        $update = [];

        $update['mat_khau'] = password_hash($data['password'], PASSWORD_BCRYPT);

        User::where('id', Auth::id())->update($update);

        Auth::logout();

        return redirect('/login');
    }
}
