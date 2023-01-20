<?php
  // Load Config
  require_once 'config/config.php';

  // Load helpers
  require_once 'helpers/session_helper.php';
  require_once 'helpers/redirect_helper.php';

  // Autoload Core Libraries
  spl_autoload_register(function($className){
    require_once 'libraries/' . $className . '.php';
  });
  
