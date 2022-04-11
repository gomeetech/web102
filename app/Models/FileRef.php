<?php

namespace App\Models;
use Gomee\Models\Model;
class FileRef extends Model
{
    public $table = 'file_refs';
    public $fillable = ['file_id', 'ref_id', 'ref'];

    public $timestamps = false;
    
    
    public function file()
    {
        return $this->belongsTo(Fiie::class, 'file_id', 'id');
    }
}
