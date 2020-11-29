<?php
if (isset($_POST['submit'])) {
    $name= $_POST['name'];
    $subject= $_POST['subject'];
    $mailfrom= $_POST['mail'];
    $message= $_POST['message'];

$mailto = "ilyaas.kahn@younglings.africa"
mail();
}