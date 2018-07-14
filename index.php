<?php
require "twitteroauth/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

$access_token = "1016895566553473024-YUsTA4nNv4F4bQZInZOgHZjVMbqaw8";
$access_token_secret = "nzYtKgvNlnV0J3PPZ1lw2lrFbKLTdQAyMyylZJRfrbUPe";

$connection = new TwitterOAuth("EzKnztnf40ZPXT7ozJbojPJVd", "Y09dBHgdDdOqduQnk9tuGNc8IDsFx848rooRN7xXpjueEmtg85", $access_token, $access_token_secret);
$content = $connection->get("account/verify_credentials");

$statues = $connection->post("statuses/update", ["status" => "hello world"]);

$statuses = $connection->get("statuses/home_timeline", ["count" => 25, "exclude_replies" => true]);

print_r($statuses);
