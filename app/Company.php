<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

    public $sortable = ['id', 'name', 'country', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
