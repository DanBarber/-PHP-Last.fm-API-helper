<?php
/**
 * Description: Functions file which returns data from the Last.fm API.
 */
 
 require_once __DIR__ . '/lastfm_init.php';
 
 /**
  * Description: Grabs the users username
  * Params: API url
  */
 
 function get_users_username($lastfm_final_url) {
	$xml = simplexml_load_file($lastfm_final_url);
	$attr = $xml->recenttracks['user'];
	return $attr;
 }
 
  /**
  * Description: Grabs the users playcount
  * Params: API url
  */
 
 function get_users_playcount($lastfm_final_url) {
	$xml = simplexml_load_file($lastfm_final_url);
	$attr = $xml->recenttracks['total'];
	$attr = (float)$attr;
	return number_format($attr);
 }
 
  /**
  * Description: Checks to see if user is currently listening to a track
  * Params: API url
  */
 
 function get_users_is_listening($lastfm_final_url) {
	$listening_status = 'false';
	$xml = simplexml_load_file($lastfm_final_url);
	$attr = $xml->recenttracks->track['nowplaying'];
	
	if ($attr == 'true') {
		return $listening_status = 'true';
	} else {
		return $listening_status;
	}
	
 }
 
  /**
  * Description: Grabs the users last / current listened track artist info
  * Params: API url
  */
 
  function get_users_track_artist($lastfm_final_url) {
	$xml = simplexml_load_file($lastfm_final_url);
	$artist = $xml->recenttracks->track->artist;
	return $artist;
  }
  
  /**
  * Description: Grabs the users last / current listened track name info
  * Params: API url
  */
  
  function get_users_track_name($lastfm_final_url) {
	$xml = simplexml_load_file($lastfm_final_url);
	$trackname = $xml->recenttracks->track->name;
	return $trackname;
  }
  
  /**
  * Description: Grabs the users last / current listened track album info
  * Params: API url
  */
  
  function get_users_track_album($lastfm_final_url) {
	$xml = simplexml_load_file($lastfm_final_url);
	$album = $xml->recenttracks->track->album;
	return $album;
  }
  
  /**
  * Description: Grabs the users last / current listened track art. Image size is either 'small', 'medium', 'large' and 'extralarge'.
  * Params: API url, imagesize
  */
  
  function get_users_track_image($lastfm_final_url, $imagesize) {
	$xml = simplexml_load_file($lastfm_final_url);
	
	if ($imagesize == 'small') {
		$attr = $xml->recenttracks->track->image[0];
		return $attr;
	} else if ($imagesize == 'medium') {
		$attr = $xml->recenttracks->track->image[1];
		return $attr;
	} else if ($imagesize == 'large') {
		$attr = $xml->recenttracks->track->image[2];
		return $attr;
	} else if ($imagesize == 'extralarge') {
		$attr = $xml->recenttracks->track->image[3];
		return $attr;
	} else {
		return null;
	}
  
  }
