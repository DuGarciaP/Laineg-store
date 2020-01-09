<?php 

    //Config SANDBOX ou PRODUCTION environment
    $SANDBOX_ENVIRONMENT = true;

    
    $JS_FILE_URL = "https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js";
    $PAGSEGURO_API_URL = 'https://ws.pagseguro.uol.com.br/v2';
    if($SANDBOX_ENVIRONMENT){
        $PAGSEGURO_API_URL = 'https://ws.sandbox.pagseguro.uol.com.br/v2';
        $JS_FILE_URL = "https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js";
    }

    $PAGSEGURO_EMAIL = 'laineg.corp@gmail.com';
    $PAGSEGURO_TOKEN = '98AB4D4381ED4A648AA8AD1BC6857A14';
?>