<?php

class PageController {

  public function getShowHome() {
    include(__DIR__.'/../views/home.php');
  }

  public function getShowDB() {


    User::destroy(6);

  }

  public function getRegister() {
    include(__DIR__.'/../views/register.php');
  }

  public function postRegister() {


    if(isset($_POST['registrar'])){
      $user = new User;

      $user->name = $_POST['name'];
      $user->lastname = $_POST['lastname'];
      $user->password = $_POST['password'];

      if(empty($user->name)){
        echo 'Nothing in the POST';
      } else {
        $user->save();
      }

    }

  }

}
