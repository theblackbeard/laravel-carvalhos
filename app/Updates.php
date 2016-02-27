<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Updates extends Model {

    protected $fillable = ['title', 'status'];

    public function scopePublished($query)
    {
        $query->where('created_at' , '<=' , Carbon::now());
    }


    public function setPublishedAtAttribute($date)
    {
        $this->attributes['created_at'] = Carbon::createFromFormat('Y-m-d', $date);
    }

}
