<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    public function getLImit(int $limit_count = 10) {
        return $this->orderBy('updated_at','DESC')->limit($limit_count)->get();
    }
    
    public function getPaginateLImit(int $limit_count = 5) {
        return $this->orderBy('updated_at','DESC')->paginate($limit_count);
    }
    
    public function getIdData() {
        return $this->orderBy('updated_at','DESC')->paginate($limit_count);
    }
}
