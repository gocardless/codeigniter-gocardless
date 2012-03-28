<?php defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Environment
|--------------------------------------------------------------------------
|
| Use sandbox to test payments without actually creating transactions.
| Upgrade to "production" when you're ready. You need to do this from the
| sandbox to get your new production API keys.
|
*/
$config['gocardless_environment'] = 'sandbox';

/*
|--------------------------------------------------------------------------
| Mode
|--------------------------------------------------------------------------
|
| Are you a merchant or a partner? If not sure, you're probably a merchant.
|
*/
$config['gocardless_mode'] = 'merchant'; // or partner

/*
|--------------------------------------------------------------------------
| GoCardless App ID
|--------------------------------------------------------------------------
|
| Your app id from the GoCardless developer dashboard
|
*/
$config['gocardless_app_id'] = '123';

/*
|--------------------------------------------------------------------------
| GoCardless App Secret
|--------------------------------------------------------------------------
|
| Your app secret from the GoCardless developer dashboard
|
*/
$config['gocardless_app_secret'] = 'abc';

/*
|--------------------------------------------------------------------------
| Merchant ID
|--------------------------------------------------------------------------
|
| Your merchant id from the GoCardless developer dashboard
|
*/
$config['gocardless_merchant_id'] = '123';

/*
|--------------------------------------------------------------------------
| Access Token
|--------------------------------------------------------------------------
|
| Your access token from the GoCardless developer dashboard
|
*/
$config['gocardless_access_token'] = 'abc';