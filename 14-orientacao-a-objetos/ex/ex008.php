<?php 

/*
    -Crie uma classe chamada Contact que represente um contato.

    -A classe Contact deve ter os seguintes atributos:

    -name: nome do contato.

    -email: endereço de e-mail do contato.

    -phone: número de telefone do contato.

    -A classe Contact deve ter os seguintes métodos:

    -getName(): retorna o nome do contato.

    -getEmail(): retorna o endereço de e-mail do contato.

    -getPhone(): retorna o número de telefone do contato.

    -setEmail($email): atualiza o endereço de e-mail do contato.

    -setPhone($phone): atualiza o número de telefone do contato.

*/

    class Contact {
        public $name;
        public $email;
        public $phone;
        public function getName(){
            return $this->name;
        }
        public function getEmail(){
            return $this->email;
        }
        public function getPhone(){
            return $this->phone;
        }
        public function setEmail($email){
            return $this->email = $email;
        }
        public function setPhone($phone){
            return $this->phone = $phone;
        }
    }
    $hemilly = new Contact;
    $hemilly->name = "Hemilly Santos";
    $hemilly->email = "hemillymsantos@gmail.com";
    $hemilly->phone = "81985844440";
    echo $hemilly->getName() . '<br>';
    echo $hemilly->getEmail() . '<br>';
    echo $hemilly->getPhone() . '<br>';
    $hemilly->setEmail('hemillymsantos@hotmail.com');
    $hemilly->setPhone('(81)98584-4440');
    echo $hemilly->getEmail() . '<br>';
    echo $hemilly->getPhone() . '<br>';

?>