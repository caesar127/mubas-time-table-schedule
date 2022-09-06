<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class module extends Model
{
    use HasFactory;
    
    protected $table = 'module';

    protected $fillable = ['module_code','module_name','lecturer','exam'];

    public function scopeFilter($query, array $filters) {
        if($filters['search'] ?? false) {
            $query->where('module_code', 'like', '%' . request('search') . '%')
                ->orWhere('module_name', 'like', '%' . request('search') . '%')
                ->orWhere('lecturer', 'like', '%' . request('search') . '%')
                ->orWhere('exam', 'like', '%' . request('search') . '%');
        }
    }
}
