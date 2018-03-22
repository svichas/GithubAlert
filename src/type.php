<?php
/**
* Author: Stefanos Vichas
* Version: 0.1.0
* Project: https://github.com/svichas/GithubAlert
* License: MIT
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
  * @param string $messageType message type
  */
  public function typeExists($messageType="") {
    return in_array($messageType, $this->types);
  }

  /**
  * Method to get message type svg content
  * @param string $messageType message type
  */
  public function getTypeSvgContent($messageType="") {
    if ($this->typeExists($messageType)) return file_get_contents(dirname(__file__) . "/types/{$messageType}.svg");
    return false;
  }

}
