<?php
/**
 * File: ticket_test.php
 * Project: zk-smiley
 **/

//Require the main configuration
require_once('inc/config.php');

//Require the FreshDesk API Library
require_once('inc/FreshdeskRest.php');

//Require Smiley Library
require_once('inc/lib.php');

//Connect to MySQL
mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
@mysql_select_db(DB_NAME) or die("Unable to select database");

//Create New FreshDesk API Object
$fd = new FreshdeskRest(FD_URL, FD_API_USER, FD_API_PASS);

if ( $fd->getLastHttpStatus() != 200 ) {
	echo "Unable to connect to FreshDesk";
}

//Check for Rate Limiting
if ( $fd->getLastHttpResponseText() == "You have exceeded the limit of requests per hour" ) {
	echo "*ERROR* API LIMIT REACHED\n";
}

//This is a ticket that doesn't exist
echo theLoop($fd, 40000, 10000) . "\n";

//This is a ticket that exists with no Survey
echo theLoop($fd, 32000, 10000) . "\n";

//This is a ticket that exists with a survey
echo theLoop($fd, 23195, 10000) . "\n";

//Test the Lower Limit Ticket
echo lowerLimitTicket() . "\n";

//Test the Lower Limit Survey
echo lowerLimitSurvey() . "\n";

//Test the Upper Limit of Tickets
echo upperLimit($fd) . "\n";
