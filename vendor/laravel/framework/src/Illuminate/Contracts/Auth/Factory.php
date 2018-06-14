<?php

namespace Illuminate\Contracts\Auth;

interface Factory
{
    /**
     * Get a guard instance by name.
     *
     * @param  string|null  $name
     * @return mixed
     */
    public function guard($name = null);

    /**
     * Set the default guard the Factory should serve.
     *
     * @param  string  $name
     * @return void
     */
    public function shouldUse($name);
}
