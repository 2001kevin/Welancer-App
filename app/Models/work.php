<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class work extends Model
{
    use HasFactory;
    protected $table = 'works';
    protected $guarded = ['work_id'];
    protected $primaryKey = 'work_id';

    public function freelance(){
        return $this->belongsTo(freelance::class, 'freelance_id', 'freelance_id');
    }
}
