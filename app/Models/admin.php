<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */  

    protected $fillable = [
        'admin_id',
        'name',
        'date_of_birth',
        'gender',
        'email',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'date_of_birth' => 'datetime',
    ];

    protected $primaryKey = 'admin_id';

    public $incrementing = false;

    protected $keyType = 'string';

    public $timestamps = false;

    public function id()
    {
        return $this->admin_id;
    }
}
