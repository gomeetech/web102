<?php

namespace App\Models;
use Gomee\Models\Model;

class Subcribe extends Model
{
    public $table = 'subcribes';
    public $fillable = ['email'];

    public $timestamps = false;
    /**
     * lay du lieu form
     * @return array
     */
    public function toFormData()
    {
        $data = $this->toArray();
        return $data;
    }
}
