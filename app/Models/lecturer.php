<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lecturer extends Model
{
    use HasFactory;

    protected $table = 'lecturers';

    protected $fillable = ['lecturer_id','name','email'];

    public function scopeFilter($query, array $filters) {
        if($filters['search'] ?? false) {
            $query->where('lecturer_id', 'like', '%' . request('search') . '%')
                ->orWhere('name', 'like', '%' . request('search') . '%')
                ->orWhere('email', 'like', '%' . request('search') . '%');
        }
    } 
}
