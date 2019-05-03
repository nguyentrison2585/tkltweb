<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * Table name
     *
     * @var string
     */
    protected $table = 'user';

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
        'ten', 'ngay_sinh', 'gioi_tinh', 'que_quan', 'so_dien_thoai', 'email', 'id_category'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'mat_khau',
    ];

    /**
     * Password
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->attributes['mat_khau'];
    }


}
