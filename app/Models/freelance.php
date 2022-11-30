<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class freelance extends Model
{
    use HasFactory;

    protected $table = 'freelances';
    protected $primaryKey = 'freelance_id';

    protected $fillable = [
        'user_id',
        'name',
        'cattegory',
        'description',
        'experience',
        'email',
        'linkedin',
        'instagram',
        'photo',
    ];

    public function user(){
       return $this->belongsTo(User::class);
    }

    public function work(){
        return $this->hasMany(work::class);
    }
}
