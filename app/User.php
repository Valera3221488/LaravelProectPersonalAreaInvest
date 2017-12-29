<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use App\Deposit;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','phone', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function deposits()
    {

        return $this->hasMany(Deposit::class);
    }

    public function withdrawals()
    {

        return $this->hasMany(Withdraw::class);
    }
}
