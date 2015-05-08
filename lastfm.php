<?php

require_once __DIR__ . '/lastfm_init.php';

echo '<p>Username: ' . get_users_username($lastfm_final_url) .'</p>';
echo '<p>Playcount: ' . get_users_playcount($lastfm_final_url) .'</p>';
echo '<p>Currently Listening? ' . get_users_is_listening($lastfm_final_url) .'</p>';
echo '<p>Artist Name: ' . get_users_track_artist($lastfm_final_url) .'</p>';
echo '<p>Track Name: ' . get_users_track_name($lastfm_final_url) .'</p>';
echo '<p>Album Name: ' . get_users_track_album($lastfm_final_url) .'</p>';
echo '<p>Album Art: ' . get_users_track_image($lastfm_final_url, 'large') .'</p>';
