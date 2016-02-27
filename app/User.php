<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Carbon\Carbon;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

    public function scopePublished($query)
    {
        $query->where('created_at' , '<=' , Carbon::now());
    }

    public function setPublishedAtAttribute($date)
    {
        $this->attributes['created_at'] = Carbon::createFromFormat('Y-m-d', $date);
    }


    public function about()
    {
        return $this->hasMany('App\About');
    }

    public  function work()
    {
        return $this->hasMany('App\Work');
    }

    public function category()
    {
        return $this->hasMany('App\Category');
    }
    public function post()
    {
        return $this->hasMany('App\Post');
    }

    public function tavern()
    {
        return $this->hasMany('App\Tavern');
    }

    public function user()
    {
        return $this->hasMany('App\User');
    }
}
