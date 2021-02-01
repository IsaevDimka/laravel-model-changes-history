<?php

namespace ModelChangesHistory\Exceptions;

class StorageNotFoundException extends \InvalidArgumentException
{
    protected $message = 'No current storage found or installed.';
}
