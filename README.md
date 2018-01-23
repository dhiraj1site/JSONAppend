# JSON Append Library

If you are trying to append a JSON entry into a pre-existing JSON file, you can use this library to add/append additional entries to a JSON file format. This package also supports a separate function to ignore pre-existing JSON entries. 

## Installation
`composer require dhiraj1site/jsonappend`

## Usage


There are basically two major functions used in the JSONAppend class. 

## Function #1 - appendJSON 


This function requires two parameters. The first parameter will be the source JSON file you need to append into. The second parameter will be an array with key/value pair which you require to append into the source JSON file.

`@param1 - .json file`
`@param2 - array $appenditems`

## Function #2 - appendUniqueJSON


This function is similar to appendJSON. Except this ignores duplicate JSON entires. Parameters are the same as above
```
use JSONAppend;
JSONAppend::appendJSON('services.json', array($items));
```
