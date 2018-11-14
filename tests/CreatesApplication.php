<?php

namespace Tests;

<<<<<<< HEAD
use Illuminate\Support\Facades\Hash;
=======
>>>>>>> 9d388240b5e547064f3fc98a63603daba00790f8
use Illuminate\Contracts\Console\Kernel;

trait CreatesApplication
{
    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

<<<<<<< HEAD
        Hash::setRounds(4);

=======
>>>>>>> 9d388240b5e547064f3fc98a63603daba00790f8
        return $app;
    }
}
