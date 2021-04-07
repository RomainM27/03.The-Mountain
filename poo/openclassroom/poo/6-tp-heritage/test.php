<?php
class Mere
{
    public function __construct()
    {
        echo static::class;
    }
}

class Fille extends Mere
{
}

new Fille;
