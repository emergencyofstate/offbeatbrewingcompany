<?php
  //get the start and end dates and format them
  $timestamp1 = strtotime($content['field_event_date']['#items'][0]['value']);
  $timestamp2 = strtotime($content['field_event_date']['#items'][0]['value2']);
  $start_date_left = format_date($timestamp1, 'offbeat_date_frontpage');
  $end_date_left = format_date($timestamp2, 'offbeat_date_frontpage');
  $start_date_right = format_date($timestamp1, 'offbeat_date_full');
  $end_date_right = format_date($timestamp2, 'offbeat_date_full');

  print '<div class="date-container"><div class="event-date">';
  if($content['field_event_date']['#items'][0]['value'] != $content['field_event_date']['#items'][0]['value2'] ) {
    print $start_date_left . '&#8211;' . $end_date_left;

  } else {
    print $start_date_left;
  }

  print '</div></div>';

  print '<div class="event-content">';
  print '<div class="event-title">' . $title . '</div>';
  if($content['field_event_date']['#items'][0]['value'] != $content['field_event_date']['#items'][0]['value2'] ) {
    print $start_date_right . ' &#8211; ' . $end_date_right;
  } else {
    print $start_date_right;
  }

  print '<div class="hr460"> </div>';
  print render($content['field_event_location']);
  print '<div class="hr460"> </div>';
  print $content['body'][0]['#markup'];
  print render($content['field_event_image']);
  print '</div>';