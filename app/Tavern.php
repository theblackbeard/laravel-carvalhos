<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Tavern extends Model {

    protected $fillable = [
        'title',
        'name',
        'text',
        'photo'

    ];


    public function scopePublished($query)
    {
        $query->where('created_at' , '<=' , Carbon::now());
    }

    public function setPublishedAtAttribute($date)
    {
        $this->attributes['created_at'] = Carbon::createFromFormat('Y-m-d', $date);
    }

    public function scopeMyName($query, $name)
    {
        $query->where('name' , '=' , $name);
    }

    public function owner()
    {
        return $this->belongsTo('App\User');
    }

}
