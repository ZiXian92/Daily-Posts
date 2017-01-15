<?php

namespace App;

class State {
  private $data = [];

  public function __get($name) {
    return array_key_exists($name, $this->data)? $this->data[$name]: null;
  }

  public function __set($name, $value) {
    $this->data[$name] = $value;
  }

  public function asArray() {
    return $this->data;
  }
}
