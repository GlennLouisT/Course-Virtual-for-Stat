<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class packet extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'packet_id',
        'price',
        'session',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */

    protected $primaryKey = 'packet_id';

    public $incrementing = false;

    protected $keyType = 'string';

    public $timestamps = false;

    public function id()
    {
        return $this->packet_id;
    }
}


