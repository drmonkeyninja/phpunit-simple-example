A Simple PHPUnit Example
========================

This is a simple example of unit testing in PHP with PHPUnit. I used these examples as part of a talk given at Sheffield PHP on the 18th January 2018. The talk has been written up as a blog post: [PHPUnit: What, Why, How?](https://andy-carter.com/blog/phpunit-what-why-how).

Please feel free to download this repository and give the unit tests a try.

As mentioned in my blog post try adding a second test case for the `Average::median` method to test when an even set of numbers is passed to the method.

If you succeed at that, then try taking a test driven development approach to adding a new method to `Average` for calculating the modal average by writing a test first.

Getting Started
---------------

Clone this repository and then run Composer:-

```
composer install
```

You will then be able to run the unit tests using:-

```
./vendor/bin/phpunit
```
