<?php
/**
 * Invoice Ninja (https://invoiceninja.com).
 *
 * @link https://github.com/invoiceninja/invoiceninja source repository
 *
 * @copyright Copyright (c) 2020. Invoice Ninja LLC (https://invoiceninja.com)
 *
 * @license https://opensource.org/licenses/AAL
 */
namespace Database\Factories;


use Faker\Generator as Faker;

$factory->define(App\Models\Gateway::class, function (Faker $faker) {
    return [
        'key' => '3b6621f970ab18887c4f6dca78d3f8bb',
        'visible' => true,
        'sort_order' =>1,
        'name' => 'demo',
        'provider' =>  'test',
        'is_offsite' => true,
        'is_secure' => true,
        'fields' => '',
        'default_gateway_type_id' => 1,
    ];
});
