<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class room extends Model
{
    use HasFactory;

    protected $table = 'room';

    protected $fillable = ['room_code','name','sits','status'];

    public function scopeFilter($query, array $filters) {
        if($filters['search'] ?? false) {
            $query->where('room_code', 'like', '%' . request('search') . '%')
                ->orWhere('name', 'like', '%' . request('search') . '%')
                ->orWhere('sits', 'like', '%' . request('search') . '%')
                ->orWhere('status', 'like', '%' . request('search') . '%');
        }
    }
}
