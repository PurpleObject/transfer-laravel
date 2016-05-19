<?php

namespace PurpleObject\Transfer;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\File;

class Transfer
{
    /**
     * Transfer constructor.
     */
    public function __construct()
    {

        $this->client = new Client(
            [
                'base_uri' => config('transfersh.base_uri'),
                'timeout'  => config('transfersh.timeout')
            ]
        );
    }

    public function put(File $file)
    {

        $response = $this
            ->client
            ->put('/' . $file->name(), ['body' => $file->get()]);

        return trim($response->getBody()->getContents());

    }

    public function get($fileName)
    {

    }
}