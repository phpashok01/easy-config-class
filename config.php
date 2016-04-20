<?php
/**
* This class is create or maintain the config key and value pair for your application, 
* where you  will create any new key for your applicatgion, you can load any config file from the file under the config directory,
* you also create the date wise log file with custom name .
*
* @author		Ashok kashyap 
* @authoremail        ajayashok.01@gmail.com,ashok@yesweexpert.com
* @authorwebsite      http://yesweexpert.com
* @facebook          https://www.facebook.com/er.ashokkashyap, https://www.facebook.com/yesweexpert 
* @version          1.0
*/



define('DIR_PATH',dirname(__FILE__));
define('DIR_CONFIG', DIR_PATH.'/config/');



class EasyConfig {
	public $data = array();

  	public function get($key) {
    	return (isset($this->data[$key]) ? $this->data[$key] : null);
  	}	
	
	public function set($key, $value) {
    	$this->data[$key] = $value;
  	}

	public function has($key) {
    	return isset($this->data[$key]);
  	}

  	public function load($filename) {
		 $file = DIR_CONFIG . $filename . '.php';
		
    	if (file_exists($file)) { 
	  		$_ = array();
	  
	  		require($file);
	  
	  		$this->data = array_merge($this->data, $_);
		} else {
			trigger_error('Error: Could not load config ' . $filename . '!');
			exit();
		}
  	}
}

function easy_debug_data($data)
{
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}

?>
