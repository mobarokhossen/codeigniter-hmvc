#  Codeigniter HMVC 

#Example with Source Code
Here we will see how to configure HMVC modules with an example. The HMVC modules along with the full source code for the application can be downloaded from the link given at the bottom of the tutorial.

#Configuring HMVC Modules
Open <project root directory>/application/config.php and update as follows:

/*
  |--------------------------------------------------------------------------
	
  | HMVC Modular
	
  |--------------------------------------------------------------------------
	
  |
  | Modules location
 */
 
$config['modules_locations'] = array(
    APPPATH . 'modules/' => '../modules/',
);


Create a new folder called modules under <project root directory>/application, where you will create your HMVC modules for the project.

Open application/config/autoload.php file and add below code snippets to it.

$autoload['helper'] = array('url', 'form');
