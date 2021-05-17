<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$autoload['packages'] = array();


$autoload['libraries'] = array('pagination' , 'xmlrpc' , 'form_validation', 'email', 'paypal');


$autoload['drivers'] = array();


$autoload['helper'] = array('url','file','form','security','string','inflector','directory','download',);


$autoload['config'] = array();


$autoload['language'] = array();


$autoload['model'] = array('crud_model');
