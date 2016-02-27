<?php namespace App;

use App\Custom\MyHelpers;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use \Illuminate\Support\Facades\DB;

class Post extends Model {

    protected $fillable = [
        'title',
        'name',
        'photo',
        'text',
        'status',
        'views',
        'published_at'

    ];

    public function scopePublished($query)
    {
        $query->where('created_at' , '<=' , Carbon::now());
    }

    public function scopeActive($query)
    {
        $query->where('status' , '=' , true);
    }

    public function scopePop($query)
    {
        $query = DB::table('posts')->max('views');
    }

    public function scopeMyName($query, $name)
    {
        $query->where('name' , '=' , $name);
    }

    public function scopeMySearch($query, $name)
    {
        $query->where('title' , 'like' , '%' . $name . '%');
    }


    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
    }


    public function owner()
    {
        return $this->belongsTo('App\User');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category')->withTimestamps();
    }

    public function getCategoryListAttribute()
    {
        return $this->categories->lists('id')->all();
    }

    public function mesBr($data)
    {
        return MyHelpers::mesBR($data);
    }

}
