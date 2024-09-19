<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected $table = 'contact_form';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'zip',
        'message',
        'status',
    ];
}
