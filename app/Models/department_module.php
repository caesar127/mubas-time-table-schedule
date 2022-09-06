<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class department_module extends Model
{
    use HasFactory;
    protected $table = 'department_module';

    protected $fillable = ['department','Year','semester','module'];

    public function scopeFilter($query, array $filters) {
        if($filters['search'] ?? false) {
            $query->where('Year', 'like', '%' . request('search') . '%')
                ->orWhere('semester', 'like', '%' . request('search') . '%');
        }
    } 
}
