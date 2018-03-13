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
use GithubAlert\Core\type;

class Controller {


  public function createImage() {

    // check if parameters are set
    if (Validator::checkParameters()) ErrorHandler::throwError("Invalid parameters", "parameter error");

    // set header svg content type
    Header::setContentType("image/svg+xml");

    // get parameters
    $messageType = Parameters::get("message_type");
    $messageContent = Parameters::get("message");

    $typeObject = new Type;

    // check if message type exists
    if (!$typeObject->typeExists($messageType)) ErrorHandler::throwError("Invalid message type", "message error");


  }


}
