<!DOCTYPE html>
<html>
	<head>
		<title>Pretorious Computers</title>
		<meta charset = "UTF-8">
		<meta name = "author" content = "Preston Libby">
		<meta name = "description" content = "This is the official site for Pretorious Computers. I build custom gaming computers and workstation, 
		and do repair work on laptops, desktops, and related items. I also offer cleaning, backup and maintenance services as well.">
		<meta name = "keywords" content = "gaming, desktops, computers, repair, custom, workstation, cleaning, maintenance">
		
		<link rel = "stylesheet" type = "text/css" href = "default.css">
	
	<?php
               $debug = false;
        
               include 'lib/custom-functions.php';

               $_SERVER = filter_input_array(INPUT_SERVER, FILTER_SANITIZE_STRING);
                    foreach ($_SERVER as $key => $value) {
                        $_SERVER[$key] = sanitize($value, false);
                    }
			// %^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%
			//
			// PATH SETUP
                $domain = "//"; // let the server set http or https as needed
                
                $server = htmlentities($_SERVER['SERVER_NAME'], EN_QUOTES, "UTF-8");
                
                $domain .= $server;
                
                $phpSelf = htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8");
                
                $path_parts = pathinfo($phpSelf);
                
                if ($debug){
                    print "<p>Domain" . $domain;
                    print "<p>php Self" . $phpSelf;
                    print "<p>Path Parts<pre>";
                    print_r($path_parts);
                    print "</pre>";
                }

			// %^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%
			//
			// inlcude all libraries
			//
			    require_once('lib/security.php');
			    if ($path_parts['filename'] == "form") {
			        include "lib/validation-functions.php";
			        include "lib/mail-message.php";
			    }
                
        ?>
        </head>
        <?php
                print "<body>";
                include 'header.php';
                include 'nav.php';
	?>
	