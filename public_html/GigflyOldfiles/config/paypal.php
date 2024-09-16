<?php
/**
 * PayPal Setting & API Credentials
 * Created by Raza Mehdi <srmk@outlook.com>.
 */

return [
    'mode'    => 'live', // Can only be 'sandbox' Or 'live'. If empty or invalid, 'live' will be used.
    'sandbox' => [
        'client_id'         => '',
        'client_secret'     => '',
        'app_id'            => '',
    ],
    'live' => [
        'client_id'         => 'ARCNRZMj_ihYIHmcGdG6iWkPD4HNp-3GuZOIlAskx7VuLHWzsImj_tufYywNVUKcpu2K8ayUmdU7ulBI',
        'client_secret'     => 'EDRjbWgKEdgRFL-mIciuGuwKQMuzbe1KBijzujl1EWCJdW6tu5zZ1MQ4lxJ-LhCIzfU3So5QPqKjLotx',
        'app_id'            => '',
    ],

    'payment_action' => 'Order', // Can only be 'Sale', 'Authorization' or 'Order'
    'currency'       => 'USD',
    'notify_url'     => '', // Change this accordingly for your application.
    'locale'         => 'en_US', // force gateway language  i.e. it_IT, es_ES, en_US ... (for express checkout only)
    'validate_ssl'   => false, // Validate SSL when creating api client.
];
