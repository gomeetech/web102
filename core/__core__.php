<?php

define("SYSTEM_RANDOM_STRING", md5(uniqid() . time() . rand(1000, 9999)));


/**
 * Core System
 * giup lien ket va khai bao cac module trong he thong
 */
require 'Main.php';
require 'Migration.php';
require 'Package.php';
