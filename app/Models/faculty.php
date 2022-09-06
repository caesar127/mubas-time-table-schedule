<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class faculty extends Model
{
    use HasFactory;
    protected $table = 'faculty';
    protected $primaryKey = 'faculty_code';
    public $incrementing = false;
    public $keyType = "string";

    protected $fillable = ['faculty_code','name'];

    public function scopeFilter($query, array $filters) {
        if($filters['search'] ?? false) {
            $query->where('faculty_code', 'like', '%' . request('search') . '%')
                ->orWhere('name', 'like', '%' . request('search') . '%')
                ;
        }
    }
}
