<?php
/**
* Author: Stefanos Vichas
* Version: 0.1.0
* Project: https://github.com/svichas/GithubAlert
* License: MIT
*/


/**
* Check if GithubAlert is already defined
*/
if (class_exists("GithubAlert")) return;



// Require core files
require 'src/linesplitter.php';
require 'src/constants.php';
require 'src/controller.php';
require 'src/fonts.php';
require 'src/parameters.php';
require 'src/header.php';
require 'src/type.php';
require 'src/errorhandler.php';
require 'src/validator.php';
require 'src/constructor.php';
require 'src/githubalert.php';
