# How to Build Your MVC Framework

[Medium Post](https://medium.com/@aykutarslantas/building-a-lightweight-php-framework-from-scratch-f47c4d398576 "Medium") by [Aykut ARSLANTAŞ]


Welcome to the official repository of our custom MVC (Model-View-Controller) framework. This framework is designed to provide a foundation for building web applications using PHP. In this repository, you will find the complete source code and instructions for setting up and using the framework. The framework is well-documented in the accompanying Medium post, which you can read [here](https://medium.com/@aykutarslantas/building-a-lightweight-php-framework-from-scratch-f47c4d398576).

## Features

- Lightweight and easy to understand.
- Follows the MVC architectural pattern.
- URL routing for clean and SEO-friendly URLs.
- Autoloading of classes for efficient code organization.
- Sample controllers and views to help you get started.
- Customizable and extendable for your projects.

## Getting Started

To start using our MVC framework, follow these steps:

1. Clone this repository to your local machine:
```shel
git clone https://github.com/aykutarslantas/HowCanBuildYourMVCFramework.git
```
Configure your web server to point to the public directory as the document root.

Update the framework's configuration files in the app/config directory as needed.

Refer to the Medium post for detailed instructions on creating controllers, views, and routes.

Example Usage
Here's a basic example of how to create a controller and route in our MVC framework:

```php
// Create a new controller class
class MyController extends \Core\Controller
{
    public function indexAction()
    {
        \Core\View::render('my-view', ['data' => 'Hello, World!']);
    }
}
```

```php
// Define a route index.php
$router->add('my-route', ['controller' => 'MyController', 'action' => 'index']);
```


For more examples and in-depth explanations, check out our Medium post.

License
This project is open-source and available under the MIT License.
Contributing
We welcome contributions from the community. If you'd like to contribute to the development of this framework, please read our Contribution Guidelines.
Thank you for using our MVC framework! If you have any questions or feedback, feel free to open an issue or reach out to us.

Happy coding!

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)


