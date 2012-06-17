<?php

$route['get']['/zip/:zipcode'] = array('EventController', 'events');$route['get']['/event/:event_id'] = array('EventController', 'event');$route['post']['/new'] = array('EventController', 'new');$route['get']['/flag/:event_id'] = array('EventController', 'flag');$route['get']['/like/:event_id'] = array('EventController', 'like');

?>