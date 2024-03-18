<?php

return [

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'members', // Update the password reset configuration to use 'members'
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'members', // Update the provider to use 'members'
        ],

        // You can define additional guards here for APIs or other authentication methods

    ],

    'providers' => [
        'members' => [
            'driver' => 'eloquent',
            'model' => App\Models\Member::class, // Update the model to use the Member model
        ],

        // You can define additional user providers here if needed

    ],

    'passwords' => [
        'members' => [ // Update the password reset configuration to use 'members'
            'provider' => 'members',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

];