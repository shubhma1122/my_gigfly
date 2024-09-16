<?php

return [
    //These are for the Marketplace
    'appID'     => '42974319e59631b9399e427c94347924',
    'secretKey' => 'cfsk_ma_prod_ec06c3c70299155233c95adc2ea779c2_b9f777b5',
    'testURL'   => 'https://ces-gamma.cashfree.com',
    'prodURL'   => 'https://ces-api.cashfree.com',
    'maxReturn' => 100,                                //this is for request pagination
    'isLive'    => false,

    //For the PaymentGateway.
    'PG' => [
        'appID'     => '42974319e59631b9399e427c94347924',
        'secretKey' => 'cfsk_ma_prod_ec06c3c70299155233c95adc2ea779c2_b9f777b5',
        'testURL'   => 'https://test.cashfree.com',
        'prodURL'   => 'https://api.cashfree.com',
        'isLive'    => true
    ]
];
