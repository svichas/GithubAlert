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
  public static function constructContent($content="", $messageWidth=1200, $messageHeight=220, $fontSize=18) {

    $halfMessageWidth = $messageWidth/2;

    $svgText = "<text x=\"{$halfMessageWidth}\" y=\"{$fontSize}\">";

    // construct every line
    // split svg text content into lines
    $lines = str_split($content, 60);
    foreach ($lines as $key => $line) {
      $lineY = ($key+1) * $fontSize;
      $svgText .= "<tspan x=\"{$halfMessageWidth}\" y=\"{$lineY}\">{$line}</tspan>";
    }

    $svgText .= "</text>";

    return $svgText;
  }

}
