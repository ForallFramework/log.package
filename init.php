<?php namespace forall\log;

use \Monolog\Logger;
use \Monolog\Handler\RotatingFileHandler;

//Create the logger instance.
$logger = new Logger('log.logger');

//Push a file handler.
$logger->pushHandler(new RotatingFileHandler(__DIR__.'/logs/daily.txt'));

//Register the logger with Forall.
$core->register('logger', $logger);
