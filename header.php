<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Suzuki_&_Associates
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat&family=Oswald:wght@200&family=Qwitcher+Grypen&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/ba414641d6.js" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="container">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'suzuki-associates' ); ?></a>


	<header class="header"id="page-id">
        <nav class="navbar">
            <ul class="nav-menu">
            <li class="nav-item">
                    <a href="http://suzuki-associates.local/home/" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="http://suzuki-associates.local/services/" class="nav-link">Services</a>
                </li>
                <li class="nav-item">
                    <a href="http://suzuki-associates.local/review-blogs/" class="nav-link">Blog</a>
                </li>
                <li class="nav-item">
                    <a href="http://suzuki-associates.local/about/" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="http://suzuki-associates.local/contact/" class="nav-link">Contact</a>
                </li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
</header>
<script>
	const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
}
const navLink = document.querySelectorAll(".nav-link");

navLink.forEach(n => n.addEventListener("click", closeMenu));

function closeMenu() {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
}
</script>


