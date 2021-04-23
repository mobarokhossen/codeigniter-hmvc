# Codeigniter HMVC

Example With Source Code Here We Will See How To Configure Hmvc Modules With An Example. The Hmvc Modules Along With The Full Source Code For The Application Can Be Downloaded From The Link Given At The Bottom Of The Tutorial.


Set **$config[base_url] ** correctly for your installation



#### Configuring HMVC Modules 
Open project root directory
>  /application/config.php

and update as follows:



#### HMVC Modular

    /*
    Modules location
    */
    
    $config['modules_locations'] = array(
    APPPATH . 'modules/' => '../modules/',
    );
    
Create a new folder called modules under ***project root directory *** /application, where you will create your HMVC modules for the project.

Create 
> modules

Open 
> application/config/autoload.php 

file and add below code snippets to it.

    $autoload['helper'] = array('url', 'form');

------------


***Copy HMVC Files from this source files. ***
Find those HMVC Files from projects root folder.

Upzip **core** and paste the ***core folder* ** under 
> application/

*Example:  application/core/*

Upzip **MX folder** and paste the ***MX folder* ** under 
> application/third_party

*Example:  application/third_party/MX/*

Config root directory/.htaccess

    RewriteEngine on
	RewriteBase /project_name/
	# On Live server RewriteBase /
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^(.*)$ index.php/$1 [L]

------------


### Example: HMVC Module

Create a new modules name **site**
>     application/modules/site/

In site folder create controllers, models and views folder

    site ->
    		| controllers
			| models
			| views
				
				
In site/controllers folder create ***site.php***
    
    <?php
    
    (defined('BASEPATH')) OR exit('No direct script access allowed');
    
    class Site extends MX_Controller {
    
        function __construct() {
            parent::__construct();
        }
    
        function index() {
            $this->load->view('home');
        }
    
    }

In*** site/views***  folder create **home.php or any_name.php** for view as you want. And Load this file using controller. 

    <!doctype html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
    
            <title>CI HMVC</title>
    
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    
            <!-- Styles -->
            <style>
                html, body {
                    background-color: #fff;
                    color: #636b6f;
                    font-family: 'Nunito', sans-serif;
                    font-weight: 200;
                    height: 100vh;
                    margin: 0;
                }
    
                .full-height {
                    height: 100vh;
                }
    
                .flex-center {
                    align-items: center;
                    display: flex;
                    justify-content: center;
                }
    
                .position-ref {
                    position: relative;
                }
    
                .top-right {
                    position: absolute;
                    right: 10px;
                    top: 18px;
                }
    
                .content {
                    text-align: center;
                }
    
                .title {
                    font-size: 84px;
                }
    
                .links > a {
                    color: #636b6f;
                    padding: 0 25px;
                    font-size: 13px;
                    font-weight: 600;
                    letter-spacing: .1rem;
                    text-decoration: none;
                    text-transform: uppercase;
                }
    
                .m-b-md {
                    margin-bottom: 30px;
                }
            </style>
        </head>
        <body>
            <div class="flex-center position-ref full-height">
                <div class="content">
                    <div class="title m-b-md">
                        Welcome to Codeigniter HMVC  
                    </div>
    
                    <div class="links">
                        <a href="https://github.com/mobarokhossen/codeigniter-hmvc">Documentation</a>
                        <a href="https://github.com/mobarokhossen/codeigniter-hmvc">GitHub</a>
                        <a href="https://mobarokhossen.com"> Contact Developer - Mobarok </a>
                    </div>
                </div>
            </div>
        </body>
    </html>
    
	
#### ** Run your project**
    localhost/project_name/site
	
	
> **NOTES: **
You can clone or download  my project for HMVC. It is fully config for HMVC.  


###End
