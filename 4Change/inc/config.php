<?php

// the following helps avoid PHP date errors:
date_default_timezone_set('America/Los Angeles');

//Here are the keys for the server: floramaydesigns.com
$siteKey = "6Ldy3iQUAAAAAAftQ6bTEPW7bo20OIpOi4yeRITo";
$secretKey = "6Ldy3iQUAAAAAAdV19pKcSTL2SquCTRqNvTHEQ-k";

//place URL & labels in the variable/array here for navigation:
$nav1['index.php'] = "Home";
$nav1['aboutus.php'] = "About Us";
$nav1['services.php'] = "Services";
$nav1['brands.php'] = "Brands";
$nav1['contactus.php'] = "Contact Us";

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE)
{
    case 'index.php';
    $title = "4Change International Group";  
    break;
        
    case 'aboutus.php';
    $title = "Company Profile";
    $aboutpage = "We aim to help organic brands in expanding to the international market.";
    break;
    
    case 'services.php';
    $title = "Our Services";
    $aboutpage = "We customized business solutions to increase your sales.";
    break;
        
    case 'brands.php';
    $title = "Featured Brands";
    $aboutpage = "We represent excellent organic brands because we believe in the products.";
    break;
        
    case 'contactus.php';
    $title = "Let Us Connect";
    $aboutpage = "Sign up with us and let's grow your business together.";
    break;
        
    default;
    $title = THIS_PAGE;
    $logo = "";
        
}