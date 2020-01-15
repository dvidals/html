<?php
class User{

    

}


class AdminUser extends User{
    public $level;
    public $role='admin';

}

$userOne=new User('mario', 'mario@thenetninja.co.uk');
$userOne=new User('luigi', 'luigi@thenetninja.co.uk');
$userOne=new AdminUser('yoshi', 'yoshi@thenetninja.co.uk');

