<?php
/**
* Author: Stefanos Vichas
* Version: 0.1.0
* Project: https://github.com/svichas/GithubAlert
* License: MIT
*/
namespace GithubAlert\Core;

/**
* Main line splitter
*/
class LineSplitter {


  /**
  * Method to split text to multiple lines
  * @param string $message var for message to split to lines
  * @param integer $width message container width
  */
  public static function splitLines($message="", $width=1000) {

    // initilise variables
    $currentLineLength = 0;
    $currentLineWidth  = 0;
    $currentLine       = 0;
    $lines             = [];

    // loop characters
    for ($i=0;$i<=mb_strlen($message);$i++) {

      // get current message character & next.
      $currentCharacter = substr($message, $i, 1);
      $nextCharacter    = mb_strlen($message) >= $i ? substr($message, $i+1, 1) : "";

      // start new line when line width >= ? and space is found max width ?+10



      $lines[$currentLine] = $currentCharacter;

    }


    return $lines;

  }


}
