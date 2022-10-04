<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    protected $table = 'eventos';
    protected $primaryKey = 'id_evento';
    protected $dates = [
                     'created_at',
                     'updated_at',
                     'deleted_at'
        ];
        protected $fillable = ['evento'];
}
