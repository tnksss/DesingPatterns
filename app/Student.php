<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Events\StudentSaved;

class Student extends Model
{
    protected $fillable = ['name', 'code','avatar'];
    protected $guardable = ['id','created_at','updated_at'];

    // protected $dispatchesEvents = [
    //     'saved' => Student::class,
    //     'deleted' => StudentDeleted::class,
    // ];
}
