<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'user_type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function insertuser($request){

        $user = User::create([

            'user_type' => 'Diner' ,
            'name' => $request['firstname'] ,
            'email' => $request['emailid'] ,
            'password' => bcrypt($request['password'])

            ]);

        auth()->login($user);

    }

    public static function insertcaterer($request){

        $user = User::create([

            'user_type' => 'Caterer' ,
            'name' => $request['caterername'] ,
            'email' => $request['emailid'] ,
            'password' => bcrypt($request['password'])

            ]);

        auth()->login($user);

    }

    public static function gettype($request){
    
        $type = DB::select("
            select user_type
            from users
            where 
            email = ?
            ",array($request['email']));
        return $type[0]->user_type;

    }
}
