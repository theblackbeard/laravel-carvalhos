<?php namespace App;

use App\Custom\MyHelpers;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Work extends Model {

    protected $fillable = [

        'title',
        'name',
        'photo',
        'text',
        'published_at',
        'status',
        'views'
    ];

    public function scopePublished($query)
    {
        $query->where('created_at' , '<=' , Carbon::now());
    }

    public function scopeActive($query)
    {
        $query->where('status' , '=' , true);
    }

    public function scopePopular($query)
    {
        $query->where('status' , '=' , true)->orderBy('views', 'desc')->take(3);
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

    public function mesBR($data)
    {
        return MyHelpers::mesBR($data);
    }
}
