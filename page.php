<?php
if ($_GET['mod'] == 'home') {
    include "templates/home.php";
} elseif ($_GET['mod'] == 'otomotif') {
    include "templates/otomotif.php";
} elseif ($_GET['mod'] == 'lifestyle') {
    include "templates/lifestyle.php";
} elseif ($_GET['mod'] == 'education') {
    include "templates/education.php";
} elseif ($_GET['mod'] == 'technology') {
    include "templates/technology.php";
} elseif ($_GET['mod'] == 'sport') {
    include "templates/sport.php";
} elseif ($_GET['mod'] == 'login') {
    include "templates/login.php";
}
