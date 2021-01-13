<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class session extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'session_id',
        'time',
    ];

    protected $casts = [
        'time' => 'time',
    ];

    protected $primaryKey = 'session_id';

    public $incrementing = false;

    protected $keyType = 'string';

    public $timestamps = false;

    public function id()
    {
        return $this->session_id;
    }
}
