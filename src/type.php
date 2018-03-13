<?php
/**
* Author: Stefanos Vichas
* Version: 0.1.0
* Project: https://github.com/svichas/GithubAlert
* license: MIT
*/
namespace GithubAlert\Core;

/**
* Main class for message types
*/
class Type {

  public $types = [];

  public function __construct() {
    // get all avaible message types
    $types = [];
    foreach (scandir(dirname(__file__) . "/types") as $dir) {
      if (is_file(dirname(__file__) . "/types/{$dir}")) $types[] = substr($dir, 0, -4);
    }
    // set message types
    $this->types = $types;
  }

  /**
  * Method to check if a message type exists.
  */
  public function typeExists($messageType) {
    return in_array($messageType, $this->types);
  }

}
