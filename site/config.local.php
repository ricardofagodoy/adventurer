<?php
// place for your configuration directives, so you can later easily update myaac
$config['installed'] = true;
$config['env'] = 'prod'; // dev or prod
$config['mail_enabled'] = true;
$config['server_path'] = '/Users/ricardogodoy/Repository/QuesTibia/server/';
$config['mail_admin'] = 'ricardofagodoy@gmail.com';
$config['mail_address'] = 'ricardofagodoy@gmail.com';
$config['date_timezone'] = 'America/Sao_Paulo';
$config['client'] = '1100';
$config['anonymous_usage_statistics'] = false;
$config['client_download'] = 'http://tibia-clients.com/clients/download/'. $config['client'] . '/exe/windows';
$config['client_download_linux'] = 'http://tibia-clients.com/clients/download/'. $config['client'] . '/tar/linux';
$config['session_prefix'] = 'myaac_potwt6pd_';
$config['cache_prefix'] = 'myaac_e7ix9tef_';

$config['highscores_ids_hidden'] = array(1, 2, 3, 4, 5);
