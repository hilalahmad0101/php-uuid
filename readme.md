<h1 align="center">PHP UUID Package</h1>

<p align="center">
  <em>Generate and work with Universally Unique Identifiers (UUIDs) in PHP</em>
</p>

<p align="center">
  <a href="https://github.com/fullstack124/php-uuid/issues">
    <img src="https://img.shields.io/github/issues/fullstack124/php-uuid" alt="GitHub issues">
  </a>
  <a href="https://github.com/fullstack124/php-uuid/stargazers">
    <img src="https://img.shields.io/github/stars/fullstack124/php-uuid" alt="GitHub stars">
  </a>
  <a href="https://packagist.org/packages/fullstack124/php-uuid">
    <img src="https://img.shields.io/packagist/dt/fullstack124/php-uuid" alt="Total Downloads">
  </a>
  <a href="https://github.com/fullstack124/php-uuid/blob/main/LICENSE">
    <img src="https://img.shields.io/github/license/fullstack124/php-uuid" alt="License">
  </a>
</p>

## Table of Contents

- [Installation](#installation)
- [Usage](#usage)
  - [Generating a UUID](#generating-a-uuid)
  - [Parsing a UUID](#parsing-a-uuid)
  - [Checking UUID Validity](#checking-uuid-validity)
  - [Converting UUID to String](#converting-uuid-to-string)
  - [Comparing UUIDs](#comparing-uuids)
- [Contribution](#contribution)
- [License](#license)

## Installation

You can install this package using Composer, a popular PHP package manager:

```bash
composer require hilalahmad/php-uuid
```

## Generating a UUID

To generate a new UUID, use the following code:

```bash
use Hilalahmad\PhpUuid\Uuid;

$uuid = UUID::generate();
echo $uuid;
```
## Generating a UUID1

To generate a new UUID, use the following code:

```bash
use Hilalahmad\PhpUuid\Uuid;

$uuid = UUID::uuid1();
echo $uuid;
```
## Generating a UUID2

To generate a new UUID, use the following code:

```bash
use Hilalahmad\PhpUuid\Uuid;

$uuid = UUID::uuid2();

echo $uuid;
```

## Parsing a UUID

You can parse an existing UUID from a string:

```bash
use Hilalahmad\PhpUuid\Uuid;
$uuidString = "550e8400-e29b-41d4-a716-446655440000";

$uuid = UUID::parseUuid($uuidString);
print_r($uuid);
```

## Checking UUID Validity

You can check the validity of a UUID:

```bash
use Hilalahmad\PhpUuid\Uuid;
$uuidString = "550e8400-e29b-41d4-a716-446655440000";

$uuid = UUID::isValidUuid($uuidString);
if($uuid){
  echo " it is valid uuid";
}else{
  echo "it is not valid";
}
```

## Converting UUID to String

You can convert a UUID object to a string:

```bash
use Hilalahmad\PhpUuid\Uuid;
$uuid = "550e8400-e29b-41d4-a716-446655440000";

$uuid = UUID::uuidToString($uuidString);
echo $uuid;
```

## Comparing UUIDs

You can compare two UUIDs for equality:

```bash
use Hilalahmad\PhpUuid\Uuid;

$uuid1 = '550e8400-e29b-41d4-a716-446655440000';
$uuid2 = '550e8400-e29b-41d4-a716-446655440001';

$uuid = UUID::compareUuids($uuid1,$uuid2);
if($uuid < 0){
  echo "less then one";
}
```

## Contribution

If you'd like to contribute to this package or report issues, please check the  <a href="https://github.com/fullstack124/php-uuid/issues"> Github repo</a> for more details.
 
## License
This package is open-source and is licensed under the MIT License. 
 
