<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // protected $hidden = [
    //     'password', 'remember_token',
    // ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Mutator
    // public function setPasswordAttribute($password)
    // {
    //     $this->attributes['password'] = bcrypt($password);
    // }

    // Accessor
    // public function getNameAttribute($name)
    // {
    //     return 'My Name is:'. ucfirst($name);
    // }

   public static function uploadAvatar($image){
        $fileName = $image->getClientOriginalName();
        (new self())->deleteOldImage(auth()->user()->avatar);
        $image->storeAs('images', $fileName ,'public');
        auth()->user()->update(['avatar' => $fileName]);
   }


   protected function deleteOldImage($avatar){
        if($avatar){
            Storage::delete(['/public/images/'.$avatar]);
        }
    }
}
