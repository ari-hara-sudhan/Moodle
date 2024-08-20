<?php  // Moodle configuration file
@error_reporting(E_ALL | E_STRICT);
@ini_set('display_errors', '1');
define('MOODLE_INTERNAL', true);
define('DEBUG', true); // This is used to enable debug mode
define('DEBUG_DISPLAY', true); // This controls whether debug messages are displayed



unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost = 'localhost';
$CFG->dbname = 'moodle';
$CFG->dbuser = 'root';
$CFG->dbpass = 'root';
$CFG->prefix = 'mdl_';
$CFG->dboptions = array(
  'dbpersist' => 0,
  'dbport' => 3306,
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_general_ci',
);

$CFG->wwwroot = 'http://localhost/mymoodle/moodle';
$CFG->dataroot = 'C:\\xampp\\moodledata';
$CFG->secret_key = '123456789';
$CFG->admin = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
