<?php

class Entidad{
    protected $meta;

    function __construct(array $meta=null){
        $this->meta=$meta;
    }
}

class Tweet extends Entidad {
    protected $id;
    protected $text;

    function __construct ($id,$text, array $meta=null){
        $this->id=$id;
        $this->text=$text;
        parent::
    }
}