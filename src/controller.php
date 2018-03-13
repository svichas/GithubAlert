<?php
/**
* Author: Stefanos Vichas
* Version: 0.1.0
* Project: https://github.com/svichas/GithubAlert
* license: MIT
*/
namespace GithubAlert\Core;


use GithubAlert\Core\Parameters;


class Controller {


  public function createImage() {

    // set header svg content type
    Header::setContentType("image/svg+xml");

  }


}
