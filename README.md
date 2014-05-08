# hh-apc

Simple APC utility class for use with Hack.

## Usage

```php
<?hh
$key = 'foo';
list($success, $value) = APC::get($key);
if (!$success) {
  invariant(
    APC::set($key, 'bar'),
    'Failed to set `%s` in APC.',
    $key,
  );
  list($success, $value) = APC::get('foo');
}
APC::delete('foo');
```