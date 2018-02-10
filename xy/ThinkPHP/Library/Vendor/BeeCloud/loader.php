<?php
if(version_compare(PHP_VERSION, '5.3.0','>')) {
    require_once("rest/config.php");
    require_once("rest/network.php");
    require_once("rest/api.php");
    $api = new \beecloud\rest\api();
    $international = new \beecloud\rest\international();
    $subscription = new \beecloud\rest\Subscriptions();
    $auth = new \beecloud\rest\Auths();
} else {
    require_once("beecloud.php");
    $api = new BCRESTApi();
    $international = new BCRESTInternational();
    $subscription = new Subscriptions();
    $auth = new Auths();
}