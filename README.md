# Set Route
[php] Non-bloated router.

### Use
```php
<?php
require_once 'set-route.php';

setRoute('get', '/my/route/(\d+), function($m){
    $id = $m[1][0]; // path matching is preg_match_all
    echo '$id';
});
```
