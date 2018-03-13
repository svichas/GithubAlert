<?php
/**
* Author: Stefanos Vichas
* Version: 0.1.0
* Project: https://github.com/svichas/GithubAlert
* license: MIT
*/
namespace GithubAlert\Core;

use GithubAlert\Core\Validator;
use GithubAlert\Core\Parameters;
use GithubAlert\Core\Header;
use GithubAlert\Core\ErrorHandler;

class Controller {


  public function createImage() {

    ErrorHandler::throwError("Parameters error");



    // set header svg content type
    Header::setContentType("image/svg+xml");

    $messageType = Parameters::get("message_type");
    $messageType = Parameters::get("message_type");
    $messageType = Parameters::get("message_type");


  }


}
