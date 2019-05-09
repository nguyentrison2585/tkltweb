<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhanHoi extends Model
{
    /**
     * Table name
     *
     * @var string
     */
    protected $table = 'gop_y';

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
        'tieu_de', 'noi_dung'
    ];


}
