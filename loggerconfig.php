<?php
  return array(
      /** Loggers attached to every command */
      "_" => function () {
          return array(
              new \Monolog\Handler\StreamHandler('/var/www/html/log', \Monolog\Logger::ERROR),
          );
      }
  );
?>
