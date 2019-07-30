[![Build Status](https://travis-ci.org/larriereguichet/string-utils.svg?branch=master)](https://travis-ci.org/larriereguichet/string-utils)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/larriereguichet/string-utils/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/larriereguichet/string-utils/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/larriereguichet/String-utils/badges/build.png?b=master)](https://scrutinizer-ci.com/g/larriereguichet/String-utils/build-status/master)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/larriereguichet/String-utils/badges/code-intelligence.svg?b=master)](https://scrutinizer-ci.com/code-intelligence)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/c8e28654-44c7-46f3-9450-497e37bda3d0/mini.png)](https://insight.sensiolabs.com/projects/c8e28654-44c7-46f3-9450-497e37bda3d0)

# string-utils

**string-utils** is a static PHP class to help string manipulation. It adds methods to extract the start or the end of 
a string, tests if a string starts or ends with an other string, and camelize or underscore string.

## Installation

```bash
composer require lag/string-utils
```

## Usage

### Return start or end of a string

```php
<?php

use LAG\Component\StringUtils\StringUtils;

StringUtils::start('War of Stars', 3); // War
StringUtils::end('War of Stars', 3); // ars

```

### Tests start or end of a string
```php
<?php

use LAG\Component\StringUtils\StringUtils;

StringUtils::endsWith('Jedi', 'i'); // true
StringUtils::endsWith('Jedi', 'edi'); // true
StringUtils::endsWith('Jedi', 'Sith'); // false 
StringUtils::endsWith('Jedi', 'S'); // false 

StringUtils::startsWith('Laser', 'L'); // true
StringUtils::startsWith('Laser', 'Las'); // true
StringUtils::startsWith('Laser', 'Force'); // false
StringUtils::startsWith('Laser', 'F'); // false

```

### Camelize and underscore a string

```php
<?php

use LAG\Component\StringUtils\StringUtils;

StringUtils::camelize('my little jedi'); // returns MyLittleJedi
StringUtils::underscore('my little jedi'); // returns my_little_jedi

```
