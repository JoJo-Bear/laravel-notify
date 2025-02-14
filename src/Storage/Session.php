<?php

namespace Mckenziearts\Notify\Storage;

use Illuminate\Session\Store;

class Session
{
    /**
     * Session storage.
     *
     * @var \Illuminate\Session\Store
     */
    protected Store $session;

    public function __construct(Store $session)
    {
        $this->session = $session;
    }

    /**
     * Set a session key and value.
     *
     * @param  string  $key
     * @param  array  $data
     */
    public function put(string $key, array $data = [])
    {
        $dataArray = $this->session->get($key) ?: [];
        $dataArray[] = $data;
        $this->session->put($key, $dataArray);
    }
}
