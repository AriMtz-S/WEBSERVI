<?php 
session_start();

session_unset();
session_destroy();

header("Location:http://localhost/vuetify_crud_api_laravel/index.php");