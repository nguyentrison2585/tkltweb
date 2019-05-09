<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HocPhan extends Model
{
    /**
     * Table name
     *
     * @var string
     */
    protected $table = 'hoc_phan';

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
        'ma_hoc_phan', 'ten_hoc_phan', 'so_tin_chi', 'so_tin_hoc_phi', 'he_so', 'id_khoa_vien'
    ];


}
