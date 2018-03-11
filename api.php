<?php
require 'githubalert.php';
use GithubAlert\GithubAlert;
$ga = new GithubAlert;
$ga->api_serve();
