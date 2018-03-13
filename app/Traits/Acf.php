<?php

namespace App\Traits;

trait Acf {

    protected $id;

    public function __get($property = null)
    {
        if(!$property) return false;
        if($this->id) return get_field($property, $this->id);
        return get_field($property);
    }

    public function setId($id = null)
    {
        $this->id = ($id) ? $id : get_the_ID();
        return $this;
    }
}