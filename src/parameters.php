<?php
/**
* Author: Stefanos Vichas
* Version: 0.1.0
* Project: https://github.com/svichas/GithubAlert
* license: MIT
*/
namespace GithubAlert\Core;

/**
* Main class to get parameters
*/
class Parameters {

  /**
  * Method to get parameters
  */
  public static function get($parameter = "") {
    return isset($_GET[$parameter]) ? $_GET[$parameter] : "";
  }

}
