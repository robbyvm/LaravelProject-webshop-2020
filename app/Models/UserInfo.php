<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class UserInfo extends Model
{
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name ', 'firstName', 'sex', 'birthDate', 'avatar',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
