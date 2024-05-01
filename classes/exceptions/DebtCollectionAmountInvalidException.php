<?php

namespace Xi\Php\Exceptions;

class DebtCollectionAmountInvalidException extends \InvalidArgumentException
{
    protected $message = "Amount must be more than 0.";
}
