<?php

$upcoming = new Upcoming();
$events = $upcoming->getNextEvents();

echo $tpl->render(array(
	'page' => 'allclosed',
	'title' => 'See you soon … somewhere else!',

	'next' => @$events[0],
	'events' => $events,
));
