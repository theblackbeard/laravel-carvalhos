<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class MyMails extends Model {

    protected $fillable = [
        'mail',
    ];

    public function scopeMyMail($query, $mail)
    {
        $query->where('mail' , '=' , $mail);
    }


}
