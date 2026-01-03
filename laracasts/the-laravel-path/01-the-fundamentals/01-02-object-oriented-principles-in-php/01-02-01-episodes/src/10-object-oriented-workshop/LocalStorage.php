<?php

namespace Workshop;

class LocalStorage implements FileStorage
{
  public function put(string $file_path, string $file_content)
  {
    $storage_folder_path = __DIR__ . DIRECTORY_SEPARATOR . 'storage';
    $storage_file_path = $storage_folder_path . DIRECTORY_SEPARATOR . $file_path;

    if (!is_dir($storage_folder_path)) {
      mkdir($storage_folder_path, 0777, true);
    }

    file_put_contents($storage_file_path, $file_content);
  }
}
