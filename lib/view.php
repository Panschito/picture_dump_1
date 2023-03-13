<?php
class View {
  private $data = array();

  public function __set($key, $value) {
    $this->data[$key] = $value;

    return $this;
  }

  public function __get($key) {
    if (!isset($this->data[$key])) {
      return;
    }

    return $this->data[$key];
  }
}