<?php

namespace App\Models;
use Gomee\Models\Model;

class Subscribe extends Model
{
    public $table = 'subscribes';
    public $fillable = ['email', 'phone_number'];

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
