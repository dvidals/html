<?php 

  class User {
    protected $username;
    protected $email;
    public $role = 'member';

    public function __construct($username, $email){
      $this->username = $username;
      $this->email = $email;
    }

    public function __destruct(){
      echo "the user $this->username was removed <br>";
    }

    public function __clone(){
      $this->username = $this->username . ' (cloned)';
    }

    public function message(){
      return "$this->email sent a new message";
    }


    function __get($property){
      if(property_exists($this, $property)) {
          return $this->$property;
      }
      else echo 'llamada a propiedad inexistente ('.$property . ') 
        de la clase ' . __CLASS__;
    }


    function __set($atributo, $valor){
      if ($atributo == 'email' 
        && !(filter_var($this->email, FILTER_VALIDATE_EMAIL))) {
          echo 'email no válido, no se ha asignado';
          $this->email=NULL;
      } else
          $this->$atributo = $valor;
    }
  }

  class AdminUser extends User {

    public $level;
    public $role = 'admin';

    public function __construct($username, $email, $level){
      parent::__construct($username, $email);
      $this->level = $level; 
    }

    public function message(){
      return "admin $this->email sent a new message";
    }

  }

  $mario = new User('mario', 'mario@thenetninja.co.uk');
  $luigi = new User('luigi', 'luigi@thenetninja.co.uk');
  $yoshi = new AdminUser('yoshi', 'yoshi@thenetninja.co.uk', 5);

  $mario2 = clone $mario;

  unset($mario);  // llama al destructor
  echo $mario2->username . '<br/>';

  echo '<br/>------------------<br/>';
