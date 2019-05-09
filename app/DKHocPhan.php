<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DKHocPhan extends Model
{
    /**
     * Table name
     *
     * @var string
     */
    protected $table = 'dang_ky_hoc_phan';

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
        'ma_sinh_vien', 'ma_hoc_phan', 'hoc_ky'
    ];


}
