<?php
/**
 * Description: Config file to store and easily change required and optional Last.fm API parameters.
 * Source: http://www.last.fm/api
 */

/**
 * Required Parameters
 * These are mandatory for data retrieval using the API.
 */
$lastfm_username = 'rj';
$lastfm_api_key = 'ebeb5ff826343ab7b430e1b6e6ac0209';
$lastfm_api_method_url = 'http://ws.audioscrobbler.com/2.0/?method=user.getrecenttracks';

/**
 * Optional Parameters
 * These are optional parameters for limiting data returned etc.
 */
$recenttracks_limit = '3';

/**
 * Final API URL
 * The constructed URL using our parameters from above.
 */
 
 $lastfm_final_url = ''.$lastfm_api_method_url. '&limit=' .$recenttracks_limit. '&user=' .$lastfm_username. '&api_key=' .$lastfm_api_key;
