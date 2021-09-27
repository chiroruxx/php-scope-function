# Scope functions for PHP

## Installation
```
composer require chiroruxx/php-scope-function
```

## Usage
```php
class User
{
    use \Chiroruxx\ScopeFunction\ScopeFunction;

    // ...
}
```

### let
```php
$user = User::find($id);
$json = $user?->let(function (User $it): string {
    $formatter = new UserFormatter();
    return $formatter->formatToJson($it);
});

return $json ?? '';
```

### also
```php
$user->also(function (User $it): void {
    $it->created_at = new DateTime();
    $it->updated_at = new DateTime();
})
    ->save();
```
