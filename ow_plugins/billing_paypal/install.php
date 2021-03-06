<?php

/**
 * Copyright (c) 2009, Skalfa LLC
 * All rights reserved.

 * ATTENTION: This commercial software is intended for use with Oxwall Free Community Software http://www.oxwall.org/
 * and is licensed under Oxwall Store Commercial License.
 * Full text of this license can be found at http://www.oxwall.org/store/oscl
 */

$billingService = BOL_BillingService::getInstance();

$gateway = new BOL_BillingGateway();
$gateway->gatewayKey = 'billingpaypal';
$gateway->adapterClassName = 'BILLINGPAYPAL_CLASS_PaypalAdapter';
$gateway->active = 0;
$gateway->mobile = 0;
$gateway->recurring = 1;
$gateway->currencies = 'AUD,BRL,CAD,CZK,DKK,EUR,HKD,HUF,ILS,JPY,MYR,MXN,NOK,NZD,PHP,PLN,GBP,SGD,SEK,CHF,TWD,THB,USD';

$billingService->addGateway($gateway);


$billingService->addConfig('billingpaypal', 'business', '');
$billingService->addConfig('billingpaypal', 'sandboxMode', '0');


OW::getPluginManager()->addPluginSettingsRouteName('billingpaypal', 'billing_paypal_admin');

$path = OW::getPluginManager()->getPlugin('billingpaypal')->getRootDir() . 'langs.zip';
OW::getLanguage()->importPluginLangs($path, 'billingpaypal');