<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserStock extends Model
{
    // use HasFactory;
    protected $table = 'users_tables';
    protected $guarded = [
        'id'
      ];
}
