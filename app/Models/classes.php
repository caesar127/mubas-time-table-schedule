<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class classes extends Model
{
    use HasFactory;

    protected $table = 'classes';
    protected $primaryKey = 'class_code';
    public $incrementing = false;
    public $keyType = "string";

    protected $fillable = ['class_code','name','department','students','status'];

    public function scopeFilter($query, array $filters) {
        if($filters['search'] ?? false) {
            $query->where('class_code', 'like', '%' . request('search') . '%')
                ->orWhere('name', 'like', '%' . request('search') . '%');
        }
    } 
}
