![GoCardless](https://gocardless.com/resources/logo.png)

## GoCardless CodeIgniter Client Library

The GoCardless CodeIgniter client provides a simple CodeIgniter interface to the GoCardless
API.

### Installation

The files you need to use the GoCardless API are in the /lib folder.

#### Install from source

```console
$ git clone git://github.com/gocardless/codeigniter-gocardless.git application/third_party/gocardless
```

#### Download the Zip

[Click here](https://github.com/gocardless/codeigniter-gocardless/zipball/0.4.1)
to download the zip file.

#### Installing with Sparks

```console
$ php tools/spark install -v0.4.1 gocardless
```

### Usage

Sign up for an account at GoCardless.com. Copy your app id and secret
from the developer tab and paste them into config/gocardless.php. Then use
the following to load the spark:

```php
$this->config->load('gocardless');
$this->load->spark('gocardless/0.4.1');
```
