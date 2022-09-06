<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    use HasFactory;
    protected $table = 'department';
    protected $primaryKey = 'department_code';
    public $incrementing = false;

    protected $fillable = ['department_code','name','faculty','duration'];

    public function scopeFilter($query, array $filters) {
        if($filters['search'] ?? false) {
            $query->where('department_code', 'like', '%' . request('search') . '%')
                ->orWhere('name', 'like', '%' . request('search') . '%');
        }
    } 
}
