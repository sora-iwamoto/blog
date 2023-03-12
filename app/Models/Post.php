<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
    'title',
    'body',
    'category_id'
    ];
    
    public function getLImit(int $limit_count = 10) {
        return $this->orderBy('updated_at','DESC')->limit($limit_count)->get();
    }
    
    public function getPaginateLImit(int $limit_count = 5) {
        return $this::with('category')->orderBy('updated_at','DESC')->paginate($limit_count);
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
