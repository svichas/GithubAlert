<?php
/**
* Author: Stefanos Vichas
* Version: 0.1.0
* Project: https://github.com/svichas/GithubAlert
* license: MIT
*/
namespace GithubAlert\Core;


use GithubAlert\Core\Parameters;


class Controller {


  public function createImage() {

    header("Content-Type: image/png");
    $im = @imagecreate(105, 100) or die("Cannot Initialize new GD image stream");

    imagecolorallocate($im, 44, 44, 44);

    $text_color = imagecolorallocate($im, 255, 255, 255);
    imagestring($im, 1, 5, 5,  Parameters::get("message_text"), $text_color);
    imagepng($im);
    imagedestroy($im);


  }


}
