<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Category extends Model {

    protected $fillable = [
        'title',
        'name'
    ];

    public function scopePublished($query)
    {
        $query->where('created_at' , '<=' , Carbon::now());
    }

    public function scopeActive($query)
    {
        $query->where('status' , '=' , true);

    }

    public function scopeMyName($query, $name)
    {
        $query->where('name' , '=' , $name);
    }



    public function setPublishedAtAttribute($date)
    {
        $this->attributes['created_at'] = Carbon::createFromFormat('Y-m-d', $date);
    }

    public function work()
    {
        return $this->belongsToMany('App\Work');
    }

    public function owner()
    {
        return $this->belongsTo('App\User');
    }

    public function worksIn()
    {
        return $this->belongsToMany('App\Work')->withTimestamps();
    }

    public function postsIn()
    {
        return $this->belongsToMany('App\Post')->withTimestamps();
    }

}
