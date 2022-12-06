<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Marchand;
use App\Models\Client;

class User extends \TCG\Voyager\Models\User
{
    use HasApiTokens, HasFactory, Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstname',
        'name',
        'email',
        'phone',
        'password',
        'genre',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $attributes = [
        'genre' => 'm',
        'firstname' => 'microasset',
        'phone' => '',
    ];

    /*public function setPasswordAttribute($password){
        $this->attributes['password'] = bcrypt($password);
     }*/

    public function clients(){
        return $this->hasMany(Client::class);
    }

    public function marchands(){
        return $this->hasMany(Marchand::class);
    }

}
