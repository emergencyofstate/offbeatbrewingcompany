<?php
  //get the start and end dates and format them
  $timestamp1 = strtotime($content['field_event_date']['#items'][0]['value']);
  $timestamp2 = strtotime($content['field_event_date']['#items'][0]['value2']);
  $start_date_left = format_date($timestamp1, 'offbeat_date_frontpage');
  $end_date_left = format_date($timestamp2, 'offbeat_date_frontpage');
  //todo: need to put in another format below.
  $start_date_right = format_date($timestamp1, 'offbeat_date_frontpage');
  $end_date_right = format_date($timestamp2, 'offbeat_date_frontpage');

  print '<div class="event-date">';
  print $start_date_left . '&#8211;' . $end_date_left;
  print '</div>';

  print '<div class="event-content">';
  print '<div class="event-title">' . $title . '</div><br />';
  print $start_date_right . ', ' . $end_date_right;
  print '<div class="hr460"> </div>';
  //todo: field template for location
  print render($content['field_event_location']);
  print '<div class="hr460"> </div>';
  print $content['body'][0]['#markup'];
  print render($content['field_event_image']);
  print '</div>';