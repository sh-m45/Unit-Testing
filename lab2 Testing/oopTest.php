<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tasting Php</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css"> -->

</head>

</html>
<?php

//namespace AppForm;

class FormTest
{
    private $name;
    private $email;

    public function __construct( $name , $email ){
        $this->name = "shrouk"; 
        $this->email = "sh@gmail.com";
    }
    public function setName( $name ){
        $this->name = $name;
    }
    public function setEmail( $email ){
        $this->email = $email;
    }

    public function getName(){
        return $this->name;
    }

    public function getEmail(){
        return $this->email;
    }

    
}
$name = '' ;
$email = '' ;
$data = new FormTest( $name, $email) ;
// $data->setName($name);
// $data->setEmail( 'sh@gmail.com');
$name = $data->getName() ;
$email = $data->getEmail() ;
echo $name ;
echo $email ;

?>