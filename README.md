# Email Address Validator

A validator for disposable and temporary email addresses.

## Getting Started

### Prerequisites

* php > 7.0.0

### Installing

```
composer require mathiasd88/email-disponibility-validator
```

### Usage

```
$validator = new EmailDomainValidator('mathiasd88@gmail.com');
$validator->validate(); // returns true

$validator2 = new EmailDomainValidator('fakeemail@0815.ru');
$validator2->validate(); // returns false
```

## Running the tests

You can use either
```
composer tests
```
or...
```
vendor/bin/phpunit --bootstrap vendor/autoload.php tests/ --colors
```

## Contributing

You can contribute to the code or adding emails to [the list.](data/list.php)

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/your/project/tags). 

## Authors

* **Mathías Donoso** - *Initial work* - [mathiasd88](https://github.com/mathiasd88)

See also the list of [contributors](https://github.com/mathiasd88/email-disponibility-validator/contributors) who participated in this project.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details
