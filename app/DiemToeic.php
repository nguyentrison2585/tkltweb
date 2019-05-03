<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiemToeic extends Model
{

    /**
     * Table name
     *
     * @var string
     */
    protected $table = 'diem_toeic';

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
        'ma_sinh_vien', 'diem_doc', 'diem_nghe', 'ngay_thi'
    ];


}
