<?php

namespace App;

use Illuminate\Notifications\Notifiable;
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
        'nickname', 'brand','place' ,'tabaco',  'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
      public function microposts()
    {
        return $this->hasMany(Micropost::class);
    }
    
    
    
    //favorite親
    public function favoritings()
    {
        return $this->belongsToMany(Micropost::class, 'favorite' ,'user_id','micro_id')->withTimestamps();
    }
    
    
    
    public function favorite($microId)
    {
        // confirm if already favorite
        $exist = $this->is_favorite($microId);
        $its_me = $this->id ==$microId;
        
        if ($exist) {
            // do nothing if already favorite
            return false;
        } else {
            // follow if not following
            $this->favoritings()->attach($microId);
            return true;
        }
    }

    public function unfavorite($microId)
    {
        // confirming if already following
        $exist = $this->is_favorite($microId);
        $its_me = $this->id ==$microId;
        
        if ($exist) {
            // stop following if following
            $this->favoritings()->detach($microId);
            return true;
        } else {
            // do nothing if not following
            return false;
        }
    }


    public function is_favorite($microId) {
        return $this->favoritings()->where('micro_id', $microId)->exists();
    }
    
    
     
}
