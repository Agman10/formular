<?php
session_start();
if(isset($_POST['submit'])) // if($_POST['submit'] == "Logga in")
{

$loginCredentials = [
    "username" => "august",
    "password" => "secure"

];

if(isset($_POST['username']) && isset($_POST['password']))
{
    $username = filter_input(INPUT_POST, "username", FILTEN_SANITIZE_STRING);
    $password = md5($_POST['password']);

    echo $password;
    if($username == $loginCredentials['username']
    && $password == $loginCredentials['password'])    
    {
        echo "<h1>Välkommen till den hemliga sidan </h1>";
    }

    elseif ($username != $loginCredentials['username']
        || $password != $loginCredentials['password'])

    {   
        echo "<h1>Du har angivit fel användarnamn eller lösenord.</h1>";
    }
    else
    {
        echo "<h1>Väldigt fel!</h1>";
    }



    echo "<pre>" . print_r($_POST,1) . "</pre>";


}
else
{
    echo "<h1>Vad gör du här?</h1>";
}
?>