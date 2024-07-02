<?php


require 'Validator.php';
$config = require('config.php');
$db = new Database($config['database']);

$heading='Create Note';

if($_SERVER['REQUEST_METHOD']==='POST'){
    
$errors=[];

if (! Validator:: string($_POST['body'],1,10))
{
    $errors['body']='A body of more then 10 characters are required';
}

if(empty($errors)){
    $db->query('INSERT INTO notes(body,user_id) VALUES(:body, :user_id)',[
'body'=>$_POST['body'],
'user_id'=>1
    ]);
}
}

require "Views/notes/create(view).php";