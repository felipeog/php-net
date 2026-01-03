<?php

namespace Workshop;

use Aws\S3\S3Client;

class S3Storage implements FileStorage
{
  public function __construct(
    protected S3Client $client,
    protected string $bucket
  ) {}

  public function put(string $file_path, string $file_content)
  {
    $this->client->putObject([
      'Bucket' => $this->bucket,
      'Key'    => $file_path,
      'Body'   => $file_content
    ]);
  }
}
