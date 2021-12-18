<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model {
    use HasFactory;
    protected $fillable = ["user_id", "coordinates", "product_id", "location"];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
