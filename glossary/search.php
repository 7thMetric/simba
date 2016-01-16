<!doctype html>
<html>
<head>

	<meta charset="utf-8">
    <meta name="description" content=" ">
    <meta name="author" content=" ">

    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title>
		Acne Scar Removal Project - Search Results for <?php $findme ?>
	</title>


	<link rel="stylesheet" href="_styles.css">
    <link rel="shortcut icon" href="img/favicon.ico">
    
</head>

<body>

	<main>

	<header>
		<h1 id="logo_replacement">
			ASRP
		</h1>

		<a id="mobile_hamburger" href="#nav">
    		<img src="mobile_hamburger.png" alt="MENU">
   			<BR>
        	MENU
 		</a>
 

	</header>

		<div id="breadcrumbs">
    		<ul>
    			<li>
        			<a href="index.html">
            			Home
            		</a>
        		</li>
        
        		<li>
        			Search Results
        		</li>
    		</ul>
		</div>

	<section id="search_paragraph_tag">
    
	<p id="font_size_30" class="sub_headline">
    	<strong> 
        	Search Results
        </strong> 
    </p>

	</section>

	<section id="search_results" class="white_box_content">

<?php

/* 

Copyright 2015, Seventh Metric Inc.

This Search script was created as a Minimum Viability Product for AcneScarRemoval.co

Written by Chadd Rivera, CEO Seventh Metric Inc.

*/

$dirname = "articles/";
$findme = $_POST["search"];

/* Retrieve file-names */
$dir = opendir($dirname);

echo '<h2>Search Results for <em>' . $findme . '</em> </h2>';
echo '<ul>';

while(false != ($file = readdir($dir))){		
	/* Cross-check files against black-list */
	if(($file != ".") and ($file != "..") and ($file != ".DS_Store") and ($file != "search.php")){

		/* Parse the file-name */
		$lowercase = strtolower($findme);
		$findme = str_replace(' ', '-', $lowercase);
		$nodashes = str_replace('-', ' ', $file);
		$output = preg_replace('/\\.[^.\\s]{3,4}$/', '', $nodashes);

		/* Conduct search and display results if found */
		$pos = stripos($file, $findme);
				if ($pos !== false){
					$thereisafile = true;	
					echo'<li><a href="' . $dirname . $file . '">' . $output . '</a></li>';
				} else {
					/* Dump it */
				}
	}
}
	/* Display "Not Found" message if not found */
	if (!isset($thereisafile)){
		echo "Nothing was found.";
	}

echo '</ul>';
?>

    </section>

	<section id="subscription_box_id" class="white_box_content subscription_box">

    	<div id="desktop_mode_subscription_box" class="white_box_content">
    	<p id="post_script">
			<i>
            Tired of reading boring medical journals?
			</i>
        </p>
        <p id="font_size_20">
        	<b>
			Get the ASRP Results Package, Free
            </b>
        </p>
        
			<ul class="subscription_values">
            	<li>
                	 The ASRP Results Package explains, in plain english, how to ...
                </li>
                
				<li>
                	Identify your skin type and scar type with a simple chart.
                </li>

                <li>
                	Find the best method of scar removal for your skin and scar type.
                </li>

                <li>
					Create a progressive series of scar treatments for each scar type.
                </li>
			</ul>

        <a class="button_link" href="register.html">
        	TELL ME MORE
        </a>
        </div>

    </section>
    
<nav id="nav" class="navigation_options">
	<ul>
		<li>
        	<a href="index.html">
            	Home
            </a>
        </li>

		<li>
        	<a href="about.html">
            	About
            </a>
        </li>
        
        <li>
        	<a href="research.html">
            	Research
            </a>
        </li>
        
        <li>
        	<a href="blog.html">
            	Blog
            </a>
        </li>
        
        <li>
        	<a href="reviews.html">
            	Reviews
            </a>
        </li>

        <li>
        	<a href="contact.html">
            	Contact
            </a>
        </li>
        
    </ul>
</nav>

<footer>
	<p>
    	&copy; AcneScarRemoval.co
    </p>

    <ul>
        <li>
        	<a href="/legal/privacy.html">
            	Privacy Policy
            </a>
        </li>
        <li>
        	<a href="/legal/dmca.html">
            	DMCA Policy
            </a>
        </li>
        <li>
        	<a href="/legal/affiliate.html">
            	Affiliate Disclosure
            </a>
        </li>
        <li>
        	<a href="/legal/terms.html">
            	Terms of Use
            </a>
        </li>
    </ul>
</footer>

		</main>
	</body>
</html>