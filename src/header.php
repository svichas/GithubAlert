<?php
/**
* Author: Stefanos Vichas
* Version: 0.1.0
* Project: https://github.com/svichas/GithubAlert
* License: MIT
*/
namespace GithubAlert\Core;

/**
* Main class to set headers
*/
class Header {

  /**
  * Main method for setting content type
  * @param string $content_type variable to set header content-type
  */
  public static function setContentType($content_type="") {
    try {
      // setting header Content-type
      header("Content-type: {$content_type}");
    } catch (\Exception $e) {
      return false;
    }
    return true;
  }

}
