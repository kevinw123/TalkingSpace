<?
// Start Session
session_start();
// Include Configuration
require_once('config/config.php');
// Helper function Files
require('helpers/system_helper.php');
require('helpers/format_helper.php');
require('helpers/db_helper.php');
// Autoload Class
function __autoload($class_name){
	require_once('libraries/'.$class_name . '.php');
}