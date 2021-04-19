<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectsTable extends Model
{
    protected $table = 'projects_table';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;
}
