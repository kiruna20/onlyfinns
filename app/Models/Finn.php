<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finn extends Model
{
    use HasFactory;

    public function author() {
        return $this->hasOne(Author::class);
    }
}
