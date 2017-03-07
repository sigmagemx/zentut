<?php
require_once 'classes/filelogger.php';
require_once 'classes/dblogger.php';

function testFilelogger() {
	$logger = new FileLogger('./log.txt', 'w');
	$logger->log('start using file logger');
	$logger->log('another log message');
}

testFilelogger();

function testLoggers() {
	$loggers = array(
		new FileLogger('./log.txt'),
		new DBLogger()
	);

	foreach ($loggers as $logger) {
		$logger->log('Log message');
	}
}

testLoggers();