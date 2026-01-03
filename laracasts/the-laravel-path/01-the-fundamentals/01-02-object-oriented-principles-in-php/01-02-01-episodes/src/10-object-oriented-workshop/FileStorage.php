<?php

namespace Workshop;

interface FileStorage
{
  public function put(string $file_path, string $file_content);
}
