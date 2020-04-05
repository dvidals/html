<?php 

  class NotValidEmailException extends Exception{};

  class User {

    public $username;
    private $email;

    public function __construct($username, $email){
      $this->username = $username;
      $this->email = $email;
    }

    public function addFriend(){
      return "$this->username just added a new friend";
    }

//getters
    public function getEmail(){
      return $this->email;
    }
    // setters
    public function setEmail($username){
      //if (filter_var($email, FILTER_VALIDATE_EMAIL))
      if(strpos($username, '@') !==false ){ //o substituir !==false por >-1
        $this->email = $username;
      }
      else throw new NotValidEmailException();
    }

    function __get($atributo){
      return $this->$atributo;
    }

    function __set($atributo, $valor) {
      if (property_exists(__CLASS__, $atributo)) {
        if (($atributo == 'email') && (!filter_var($valor, FILTER_VALIDATE_EMAIL)))
          throw new NotValidEmailException();
        $this->$atributo = $valor;

      }
      // else..
    }

  }

  try{
  $userOne = new User('mario', 'mario@thenetninja.co.uk');
  $userTwo = new User('luigi', 'luigithenetninja.co.uk');

  echo $userOne->getEmail() . '<br>';
  echo $userTwo->getEmail() . '<br>';
  echo $userOne->email . '<br>';
  echo $userTwo->email . '<br>';
  
  $userTwo->setEmail('yoshithenetninja.co.uk');
 // $userTwo->email = 'yoshithenetninja.co.uk';
  
  echo $userTwo->email . '<br>';
  }catch (NotValidEmailException $e){
	//unset($u1);
	echo "email no válido, no contiene la @ <br/>";
  }
  