<?php
// https://diego.com.es/metodos-magicos-en-php

class Tweet {
    protected $id;
    protected $text;
    protected $meta;
    public function __construct($id, $text, array $meta){
        $this->id = $id;
        $this->text = $text;
        $this->meta = $meta;
    }

    protected function retweet(){
        $this->meta['retweets']++;
    }
    protected function favourite(){
        $this->meta['favourites']++;
    }
    public function __get($property){
        var_dump($this->$property);
    }

    public function __call($method, $parameters){
        if (in_array($method, array('retweet', 'favourite'))) {
            return call_user_func_array(array($this, $method), $parameters);
            //return call_user_func_array('self::'.$method . '()', $parameters);
        }
    }

}

$tweet = new Tweet(43, 'Hola que tal', array('retweets' => 23, 'favourites' => 17));
$tweet->retweet();
$tweet->meta; // array(2) { ["retweets"]=> int(24) ["favourites"]=> int(17) }