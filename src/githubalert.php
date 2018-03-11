<?php
/**
* Author: Stefanos Vichas
* Version: 0.1.0
* Project: https://github.com/svichas/GithubAlert
* license: MIT
*/
namespace GithubAlert;

use GithubAlert\Core\Controller;

/**
* Main GithubAlert class
*/
class GithubAlert {

  public function api_serve() {

    $controller = new Controller;
    $controller->createImage();


  }

}
