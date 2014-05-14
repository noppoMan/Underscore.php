Underscore.php
==============
Underscore.php is a PHP port of [Underscore.js](http://documentcloud.github.com/underscore/).

In addition to porting Underscore's functionality, Underscore.php includes matching unit tests. Thanks to Jeremy Ashkenas and all contributors to Underscore.js.

For docs, license, tests, change log, and downloads, see:
http://brianhaveri.github.com/Underscore.php


## v1.3.1-dev Updating
Can use Underscore.php statically like underscore.js.

##### samples
```php

<?php

_::map([1,2,3], function($num){
  return $num * 2;
});

```
