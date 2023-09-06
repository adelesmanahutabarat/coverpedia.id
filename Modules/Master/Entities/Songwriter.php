<?php

namespace Modules\Master\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Songwriter extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'songwriters';
}
