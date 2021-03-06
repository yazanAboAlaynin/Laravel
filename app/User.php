<?php

namespace App;

use App\Mail\NewUserWelcomeMail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Mail;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','username', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts(){
      return $this->hasMany(Post::class)->orderBy('created_at','Desc');
    }

    protected static function boot()
    {
        parent::boot();
        static::created(function ($user){
            $user->profile()->create([
                'title' => '',
                'description' => '',
                'url' => '',
                'image' => '',
                ]);

            Mail::to($user->email)->send(new NewUserWelcomeMail());

        });
    }

    public function following(){
        return $this->belongsToMany(Profile::class);
    }

    public function profile(){
      return $this->hasOne(Profile::class);
    }
}
