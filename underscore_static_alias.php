<?php

class _ {

  public static $_ = null;

  public static function __callStatic($method, $args) {

    if(is_null(self::$_)){
      self::$_ = new __();
    }

    if(count($args) > 0) self::$_->_wrapped = $args[0];
    return call_user_func_array(array(self::$_, $method), array_slice($args, 1));
  }
}
