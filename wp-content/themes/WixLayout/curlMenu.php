<?php
//@Melhorar o que ta fixo array, json, xml? HIBRIDO RESPONSIVO DEPENDENDO DE PLUGIN (wp_remove_get don't worked)?
//$response = wp_remote_get( site_url() . "/wp-includes/js/MenuItems.json" );
//$response = file_get_contents( site_url() . "/wp-includes/js/MenuItems.json" );
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, site_url() . "/wp-includes/js/MenuItems.js");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($curl);
curl_close($curl);

$menuItems = json_decode($response, true);
