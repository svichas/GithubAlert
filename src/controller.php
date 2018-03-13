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

/**
* Main class to handle/create svg message image
*/
class Controller {

  /**
  * Main method for creating svg message image
  */
  public function createImage() {

    // check if parameters are set
    if (Validator::checkParameters()) ErrorHandler::throwError("Invalid parameters", "parameter error");

    // set header svg content type
    Header::setContentType("image/svg+xml");

    // get parameters
    $messageType = Parameters::get("message_type");
    $messageContent = Parameters::get("message");
    $fontSize = empty(Parameters::get("font_size")) ? 18 : Parameters::get("font_size");

    // create type object
    $typeObject = new Type;

    // check if message type exists
    if (!$typeObject->typeExists($messageType)) ErrorHandler::throwError("Invalid message type", "message error");
    // check if message content is not empty
    if (empty($messageContent)) ErrorHandler::throwError("Invalid message content", "message error");

    // get type svg template
    $messageSvgContent = $typeObject->getTypeSvgContent($messageType);




    $messageSvgContent = $this->bindParameters($messageSvgContent, [
      "message" => $messageContent,
      "type" => $messageType,
      "font.size" => $fontSize,
      "content" => Constructor::constructContent($messageContent, $fontSize)
    ]);

    // print result
    print $messageSvgContent;

    return true;

  }


  /**
  * Method to bind parameters to a svg content
  * @param string $svgContent svg content to bind parameters to
  * @param array $parametersArray parameters to bind
  */
  public function bindParameters($svgContent="", $parametersArray=[]) {
    foreach ($parametersArray as $key => $parameter) {
      $svgContent = str_replace("{{{$key}}}", $parameter, $svgContent);
    }
    return $svgContent;
  }


}
