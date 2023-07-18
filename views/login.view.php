<?php

use Core\Session;

require "partials/header.php";
require "partials/navigation.php";
$header="Log In";
$email = old('email');
require "partials/title.php";
require "partials/login_form.php";
require "partials/footer.php";