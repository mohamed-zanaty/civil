<?php

function activeNavigation($segment){
  if(Request::segment(2) == $segment)
  return 'active ' ;
}

function activeSubNavigation($segment1, $segment2){
  if(Request::segment(2) == $segment1 && Request::segment(3) == $segment2)
  return 'active ' ;
}
