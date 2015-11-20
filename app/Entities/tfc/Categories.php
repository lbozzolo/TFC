<?php
namespace App\Entities\tfc;

use \App\Entities\Entity;

class Categories extends Entity{

    protected $table = 'categories';

    protected $fillable = ['name'];

    public function Tournaments()
    {
        return $this->hasMany(Tournaments::getClass());
    }
}