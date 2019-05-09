<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SinhVien extends Model
{

    /**
     * Table name
     *
     * @var string
     */
    protected $table = 'sinh_vien';

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
        'ma_khoa_vien', 'id_tai_khoan'
    ];

}
