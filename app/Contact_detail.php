<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact_detail extends Model
{
    protected $guarded = [];

    public function user() {
        return $this->belongsTo(questionnaire::class);
    }
}
