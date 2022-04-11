<?php

namespace App\Models;

use Gomee\Models\Model;

class Tag extends Model
{
    public $table = 'tags';
    public $fillable = ['owner_id', 'name', 'name_lower', 'keyword', 'slug', 'tagged_count'];

    public $timestamps = false;

    public function refs()
    {
        return $this->hasMany('App\Models\TagRef', 'tag_id', 'id');
    }
    /**
     * lay du lieu form
     * @return array
     */
    public function toFormData()
    {
        $data = $this->toArray();
        return $data;
    }

    public function beforeDelete()
    {
        $this->refs()->delete();
    }
}
