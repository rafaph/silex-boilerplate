## Silex boilerplate
A "silex starter kit" that come with twig as template engine and a simple directories structure.
```sh
.
├── app
│   ├── bootstrap.php
│   ├── config.php
│   ├── Controllers
│   ├── routes.php
│   └── views
├── composer.json
├── composer.lock
├── public
│   └── index.php
├── README.md
└── vendor
```
* app:
	* bootstrap.php:
		* App initialization.
	* config.php:
		* Configurations like timezone and views path.
	* Controllers:
		* Controllers with methods called by routes.
	* routes.php:
		* Urls, http methods and controllers actions.

### Install dependencies
```sh
composer install
```
### Run the development server:

```sh
php -S localhost:8000 silex-boilerplate/public
```
