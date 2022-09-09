<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class timetable extends Model
{
    use HasFactory;
    protected $table = 'timetable';

    protected $fillable = ['year','semester','faculty','class','date','time','hours','students','room','module'];

    public function scopeFilter($query, array $filters) {
        if($filters['search'] ?? false) {
            $query->where('year', 'like', '%' . request('search') . '%')
                ->orWhere('semester', 'like', '%' . request('search') . '%');
        }
    }
}
