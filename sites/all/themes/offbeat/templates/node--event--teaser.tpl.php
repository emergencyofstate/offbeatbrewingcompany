<?php

  //get the start and end dates and format them
  $timestamp1 = strtotime($content['field_event_date']['#items'][0]['value']);
  $timestamp2 = strtotime($content['field_event_date']['#items'][0]['value2']);
  $start_date_left = format_date($timestamp1, 'offbeat_date_frontpage');
  $end_date_left = format_date($timestamp2, 'offbeat_date_frontpage');
  $start_date_right = format_date($timestamp1, 'offbeat_date_full');
  $end_date_right = format_date($timestamp2, 'offbeat_date_full');

  print '<div class="event-container">';
  print '<div class="date-container"><div class="event-date">';
  if($content['field_event_date']['#items'][0]['value'] != $content['field_event_date']['#items'][0]['value2']) {
    print $start_date_left . '&ndash;' . $end_date_left;
  } else {
    print $start_date_left;
  }
  print '</div></div>';

  print '<div class="event-content">';
  print '<div class="event-title"><a href="' . $node_url . '">' . $title . '</a></div>';
  if($content['field_event_date']['#items'][0]['value'] != $content['field_event_date']['#items'][0]['value2']) {
    print '<div>' . $start_date_right . ', ' . $end_date_right . '</div>';
  } else {
    print $start_date_right;
  }

  print render($content['field_event_location']);
  print '<div style="float: left;">' . $content['body']['#items'][0]['safe_value'] . '</div>';
  print '</div>';
  print '<hr />';
  print '</div>';
