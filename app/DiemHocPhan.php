<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiemHocPhan extends Model
{
    /**
     * Table name
     *
     * @var string
     */
    protected $table = 'diem_sinh_vien';

    /**
     * @var bool $timestamps
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ma_sinh_vien', 'ma_lop', 'diem_qua_trinh', 'diem_ket_thuc', 'hoc_ky'
    ];


}
