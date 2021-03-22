<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    public $timestamps = false; //set time to false
	protected $fillable = ['topic_name', 'topic_describe','topic_amount'];
	protected $primaryKey = 'topic_id';
	protected $table = 'tbl_topic';
}
