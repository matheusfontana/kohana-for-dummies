# Kohana for Dummies!
A repository intended to help people new to Kohana! A brief description about Kohana taken from [Kohana's GitHub.](https://github.com/kohana/)

>[Kohana](http://kohanaframework.org/) is an elegant, open source, and object oriented HMVC framework built using PHP5, by a team of volunteers. It aims to be swift, secure, and small.

>Released under a [BSD license](http://kohanaframework.org/license), Kohana can be used legally for any open source, commercial, or personal project.

## Getting started: What this repo is up to?
Coming soon.

## Downloading and configuring the framework

First of all, let's download Kohana. In this tutorial we will use v3.3.3.1. [Download it from github](https://github.com/kohana/kohana/releases/download/v3.3.3.1/kohana-3.3.3.1.zip)

Open the compressed file and extract the folder into your www or htdocs directory. Rename the folder to whatever name you want.

In your browser, access 'localhost/folder_name_you_gave'. You should see the Kohana test page, which will supposedly tell you "✔ Your environment passed all requirements. Remove or rename the install.php file now." within a green box. Do what the box tells you to do, rename the file (I renamed to __install.php), and let's start coding :)

By default, Kohana has a welcome test page that will say "hello, world!", but we need to do some configuration ;)

First things first, let's rename the file 'example.htaccess' to '.htaccess'. On XAMPP for Windows, after renaming the file and trying to load the page you will get a 404 error. Oops, that's not good and we weren't expecting it! But don't worry, we just need to do this:

+ Comment the line which reads "RewriteBase /" with a "#".
+ Remove the line which reads "RewriteCond %{REQUEST_FILENAME} !-d";

Bingo! Hello world is shown! :)

## Going back to basics...

### Example code: from where the 'hello world' is displayed?

Inside the application folder, go into the subfolder named classes. Then go to other subfolder named Controller. You will find a file named 'Welcome.php'. After opening it, you will see the following code structure:

```php
<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
		$this->response->body('hello, world!');
	}

} // End Welcome
```

By Kohana standards:
+ All 'Controller' classes should be named as 'Controller_FileName' and are required to extend the parent 'Controller' class.
+ The action methods should be named as 'action_action_name'. 

### Relation between routes and controller action methods names

At the root of application folder, you will find a file named 'bootstrap.php'. It is responsible for initializing a Kohana application. In the tail of file, you will find something like this:

```php
/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */
Route::set('default', '(<controller>(/<action>(/<id>)))')
	->defaults(array(
		'controller' => 'welcome',
		'action'     => 'index',
));
```

See the 'controller' and 'action' parameters, does it remember you something? I suppose yes! 

```
'controller' => 'welcome' = class Controller_Welcome
'action'     => 'index'   = public function action_index()
```

We can move the routes to a new file, to keep things tidy :) Create a file named 'routes.php' inside application/config folder, cut & paste the content above mentioned from 'bootstrap.php' to this new file, and include the file 'routes.php' into 'bootstrap.php'. Something like this:

```php
#bootstrap.php
include APPPATH.'/config/routes'.EXT;

#application/config/routes.php
Route::set('default', '(<controller>(/<action>(/<id>)))')
	->defaults(array(
		'controller' => 'welcome',
		'action'     => 'index',
));
```

## First code
Let's create our first piece of code, simple and quite similar to the default one.

+ Add new routes into the routes.php file we created recently.
```php
#application/config/routes.php
Route::set('dummy_default', '(<controller>(/<action>))')
	->defaults(array(
		'controller' => 'dummy',
		'action'     => 'index',
));

Route::set('dummy_plus_welcome', '(<controller>(/<action>))')
	->defaults(array(
		'controller' => 'dummy',
		'action'     => 'welcome',
));
```

+ Create a new controller called Dummy, as our new routes above exemplify.
```php
#application/classes/Controlller/Dummy.php
<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Dummy extends Controller {

	public function action_index()
	{
		$this->response->body('hello, dummy!');
	}

	public function action_welcome()
	{
		//We will use it later
	}

} // End
```
If you access 'localhost/folder_name_you_gave/dummy', you should be able to see a 'hello, dummy!' message displayed. That's nice to start, but let's go a bit further now. Let's create a view, displaying the message with some CSS styling.

+ Create a file inside applications/views named 'home.php' with the following content:
```html
<html>
    <head>
        <title>Kohana for dummies</title>
        <style type="text/css">
            body {font-family: Georgia;}
            p {font-style: italic;color: #ff0000;}
 
        </style>
    </head>
    <body>
        <p><?php echo $message; ?></p>
    </body>
</html>
```

+ Replace your Controller_Welcome class code with:
```php
class Controller_Welcome extends Controller_Template {
	public $template = 'home';

	public function action_index()
	{
		$this->template->message = "Welcome to kohana-for-dummies";
	}
}
```

## Links for further reading about Kohana
+ [Kohana Official Documentation for version 3.3](https://kohanaframework.org/3.3/guide/)
+ [Digital Ocean Tutorials Part 1](https://www.digitalocean.com/community/tutorials/how-to-install-and-setup-kohana-a-php-web-application-development-framework#kohana-framework)
+ [Digital Ocean Tutorials Part 2](https://www.digitalocean.com/community/tutorials/how-to-build-web-applications-with-hmvc-php5-framework-kohana#controller-c-of-the-mvc-pattern)

