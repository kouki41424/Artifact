<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    
    public function getByPaginateLimit(int $limit_count =10)
    {
    return $this->orderBy('updated_at','DESC')->paginate($limit_count);
    }
    
    
    protected $fillable = [
        'body',
        'name',
        'image_path',
        'abv',
        'price',
        'user_id',
        'type_id'
        ];
    
}
