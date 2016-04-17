<?php

/*
* @author		Ashok kashyap 
* @authoremail  ajayashok.01@gmail.com,ashok@easyexpertsolutions.com)
* @facebook     https://www.facebook.com/er.ashokkashyap  
* @version      0.1
*/

include "config.php";
$con=  new EasyConfig(); // create  the config class object
$con->load("app_seting");

//$con->load("email_config"); // load any file from config directory, just pass the file  as parameter when you calling the load function of the config class

echo "<br>".DIR_PATH;
echo $con->set('APPLICATION_PATH',DIR_PATH); // set any new danamic key=> value pair for config setting for your application

echo $con->set('copyright_text','all &copy;  are reserved for EES'); // set any new danamic key=> value pair for config setting for your application

easy_debug_data($con->data); // display all key pair for the your application

echo $con->get('appname'); // get the single key value  from your configuration file
