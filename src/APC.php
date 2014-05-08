<?hh

final class APC {

  public static function get<T>(string $key): (bool, T) {
    $success = false;
    $value = apc_fetch($key, $success);
    return tuple($success, $value);
  }

  public static function set<T>(string $key, T $value, int $ttl = 0): bool {
    return apc_store($key, $value, $ttl);
  }

  public static function delete(string $key): bool {
    return apc_delete($key);
  }

}
