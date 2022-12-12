<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'priority',
        'status',
    ];

    public function categories(){
        return $this->belongsToMany(Category::class, 'ticket_category', 'ticket_id', 'category_id');
    }

    public function labels(){
        return $this->belongsToMany(Label::class, 'ticket_label', 'ticket_id', 'label_id');
    }
}
