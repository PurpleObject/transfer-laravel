<?php

namespace PurpleObject\Transfer;

class Transfer extends \Illuminate\Support\Facades\Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'transfer';
    }
}