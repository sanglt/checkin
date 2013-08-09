<?php

$end_point = 'https://api.foursquare.com/v2/users/self/checkins?oauth_token=CUU2RTB2ATJUY2TETQT4H5SEVPEKSU2J4K3N4RE3AYLXGJ3U&v=20130711&limit=500';

// Retreive the list
$json = json_decode(file_get_contents($end_point));

$lists = array();
foreach ($json->response->checkins->items as $icon) {
  $lists[$icon->venue->categories[0]->shortName] = $icon->venue->categories[0]->shortName;
}
var_export($lists);