<?php

if(!function_exists('current_user')) {
  function current_user() {
    $auth = \Config\Services::auth();
    return $auth->getCurrentUser();
  }
}