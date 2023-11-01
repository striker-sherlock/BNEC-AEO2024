<?php

namespace App\Models;

use App\Models\Competition;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CompetitionSlot extends Model
{
    use HasFactory;
    protected $table = 'competition_slots';
    protected $primaryKey = 'id';
    protected $guarded = [];
    public $timestamps = false;

    public function competition(){
        return $this->belongsTo(Competition::class);
    }
}
