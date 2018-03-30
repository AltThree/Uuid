# Alt Three UUID

A UUID to 64-bit signed integer converter.

UUIDs represent 128 bits of data, thus this is a lossy conversion, performed by xoring both halves of the UUID.


## Installation

This version requires 64-bit [PHP](https://php.net) 7.1 or 7.2.

To get the latest version, simply require the project using [Composer](https://getcomposer.org):

```bash
$ composer require alt-three/uuid
```


## Usage

Say, you have a UUID to hand, and you'd like to convert it to an integer, then you're in luck!

```php
AltThree\Uuid\UuidConverter::convert('2CD3F0DB-036E-41BA-84A6-72933F47F5FB'); // 4734454447164519848
AltThree\Uuid\UuidConverter::convert('{6167B53D-D8D2-42D3-8333-5BCA81A93A4C}'); // -6955673998131833630
```

It's easy as that! We are case insensitive, and support UUIDs with or without the surrounding braces.


## Security

If you discover a security vulnerability within this package, please e-mail us at support@alt-three.com. All security vulnerabilities will be promptly addressed.


## License

Alt Three Storage is licensed under [The MIT License (MIT)](LICENSE).
