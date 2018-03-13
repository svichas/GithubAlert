<?php
/**
* Author: Stefanos Vichas
* Version: 0.1.0
* Project: https://github.com/svichas/GithubAlert
* license: MIT
*/

namespace GithubAlert\Core;

use GithubAlert\Core\Header;


/**
* Main class for handling errors
*/
class ErrorHandler {

  /**
  * Main method for throwing xml error to the client.
  * @param string $message error message to show
  * @param string $type xml response type
  */
  public static function throwError($message="", $type="error") {
    // set content type to xml result
    Header::setContentType("application/xml");
    // print xml error in screen
    print self::createErrorXML($message, $type, "500");
    // end php execution
    die;
  }

  /**
  * Method to create xml error response
  * @param string $message xml response message
  * @param string $type xml response type
  * @param string $status HTTP status response code
  */
  private static function createErrorXML($message="", $type="", $status="") {
    // create php array to transform to xml form.
    $xmlArray = [
      $type => "type",
      $message => "response",
      $status => "status"
    ];
    $xml = new \SimpleXMLElement('<root/>');
    array_walk_recursive($xmlArray, array($xml, 'addChild'));
    // return xml result
    return $xml->asXML();
  }

}
