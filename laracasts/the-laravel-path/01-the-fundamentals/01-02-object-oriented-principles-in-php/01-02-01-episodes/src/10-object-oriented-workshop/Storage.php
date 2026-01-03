<?php

namespace Workshop;

use Aws\S3\S3Client;

class Storage
{
  public static function resolve(): FileStorage
  {
    $storage_method = $_ENV['STORAGE_METHOD'];

    switch ($storage_method) {
      case 's3':
        return new S3Storage(
          new S3Client([
            'version' => 'latest',
            'region'  => 'sa-east-1',
            'credentials' => [
              'key'    => $_ENV['S3_ACCESS_KEY'],
              'secret' => $_ENV['S3_SECRET_ACCESS_KEY']
            ]
          ]),
          $_ENV['S3_BUCKET']
        );

      case 'local':
        return new LocalStorage();

      default:
        throw new \Exception("Unsupported storage method: {$storage_method}");
    }
  }
}
