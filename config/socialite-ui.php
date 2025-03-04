<?php

use SocialiteUi\Features;
use SocialiteUi\Providers;

return [
    'guard' => 'web', // used if Fortify is not installed
    'middleware' => ['web'],
    'providers' => [
        Providers::google(),
        Providers::facebook(),
        Providers::github(),
        Providers::x(),
    ],
    'features' => [
        Features::rememberSession(),
        Features::refreshOAuthTokens(),
        Features::createAccountOnFirstLogin(),
        Features::generateMissingEmails(),
        Features::globalLogin(),
        // Features::authExistingUnlinkedUsers(),
    ],
    'home' => '/dashboard',
];
