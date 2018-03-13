<?php
/**
* Author: Stefanos Vichas
* Version: 0.1.0
* Project: https://github.com/svichas/GithubAlert
* license: MIT
*/
namespace GithubAlert\Core;

/**
* Main class for constructing things
*/
class Constructor {

  /**
  * Main method to construct svg text content
  * @param string $content content to transform to svg text
  * @param int $fontSize font size of svg text
  */
  public static function constructContent($content="", $fontSize=18) {
    $svgText = "<text x=\"300\" y=\"{$fontSize}\">";

    // construct every line
    // split svg text content into lines
    $lines = str_split($content, 60);
    foreach ($lines as $key => $line) {
      $lineY = ($key+1) * $fontSize;
      $svgText .= "<tspan x=\"300\" y=\"{$lineY}\">{$line}</tspan>";
    }

    $svgText .= "</text>";

    return $svgText;
  }

}
