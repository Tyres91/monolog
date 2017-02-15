<?php
  return array(
      /** Loggers attached to every command */
      "_" => function () {
          return array(
              new \Monolog\Handler\StreamHandler('path/to/log', \Monolog\Logger::ERROR),
          );
      }
  );
?>
