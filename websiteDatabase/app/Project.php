<?php

namespace App;

use App\Project;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // protected $fillable = [
    //     'title', 'description'
    // ];

    protected $guarded = [];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
