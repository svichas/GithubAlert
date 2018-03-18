<?php
/**
* Author: Stefanos Vichas
* Version: 0.1.0
* Project: https://github.com/svichas/GithubAlert
* license: MIT
*/
namespace GithubAlert\Core;

use GithubAlert\Core\Parameters;

class Validator {

  public static $requiredParameters = [
    "message"
  ];

  /**
  * Method for checking if required parameters are passed by the client
  */
  public static function checkParameters() {

    // loop required parameters
    foreach (self::$requiredParameters as $parameter) {
      if (empty(Parameters::get($parameter))) return true;
    }

    return false;
  }

}
