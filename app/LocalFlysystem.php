<?php
namespace App;
use League\Flysystem\Adapter\Local;
use League\Flysystem\Filesystem;

class LocalFlysystem {
   static $localFlysystem = null;

   static function getFileSystem (string $filepath) {
     if (LocalFlysystem::$localFlysystem == null) {
      $localFlysystem = new Filesystem(new Local($filepath));
     }

     return $localFlysystem;
   }
}
