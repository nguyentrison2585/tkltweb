<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LopHoc extends Model
{
    /**
     * Table name
     *
     * @var string
     */
    protected $table = 'lop_hoc';

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
        'ma_lop', 'ma_hoc_phan', 'thoi_gian_hoc', 'phong_hoc', 'tuan_hoc', 'loai_lop', 'ghi_chu', 'lop_thi', 'tinh_trang'
    ];


}
