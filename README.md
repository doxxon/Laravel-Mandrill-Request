# Laravel Mandrill Request #

Send Mandrill transactional emails from the Laravel 4 framework. This package is a Laravel 4 wrapper around [MichMich's Laravel Mandrill Bundle](https://github.com/MichMich/laravel-mandrill).

## Installation ##

1. Edit your project's `composer.json` file and add a requirement for `doxxon/laravel-mandrill-request`.

	    "require": {
			"doxxon/laravel-mandrill-request": "dev-master"
		}

2. Update composer from the command line:

        composer update

3. Open `app/config/app.php` and add the following line to the `providers` array:

        'Doxxon\LaravelMandrillRequest\LaravelMandrillRequestServiceProvider',

4. Add a facade alias to enable shorthand usage. Open `app/config/app.php` and add the following line to the `aliases` array:

        'Mandrill' => 'Doxxon\LaravelMandrillRequest\Facades\MandrillRequest',

5. Publish the config files. This will allow you to set your Mandrill API key:

        php artisan config:publish doxxon/laravel-mandrill-request

6. Set your Mandrill API key by editing `config/packages/doxxon/laravel-mandrill-request/config.php`:

```php
return array(

	'api_key' => 'your api key here',

);
```

Get your API keys from the [Mandrill Dashboard](https://mandrillapp.com/settings/index)

## Usage ##

```php
$payload = array(
	'message' => array(
        'subject' => 'Transactional email via Mandrill',
        'html' => 'It works!',
        'from_email' => 'fromemail@example.com',
        'to' => array(array('email'=>'toemail@example.com'))
   	)
);

$response = Mandrill::request('messages/send', $payload);
```
[See the Mandril API Docs for more information](https://mandrillapp.com/api/docs/)