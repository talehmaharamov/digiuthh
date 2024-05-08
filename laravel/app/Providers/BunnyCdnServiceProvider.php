<?php
/**
 * User: Katzen48
 * Date: 26.09.2020
 * Time: 13:25
 */

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use PlatformCommunity\Flysystem\BunnyCDN\BunnyCDNAdapter;
use PlatformCommunity\Flysystem\BunnyCDN\BunnyCDNClient;
use PlatformCommunity\Flysystem\BunnyCDN\BunnyCDNRegion;
use Storage;
use League\Flysystem\Filesystem;

class BunnyCdnServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Storage::extend('bunnycdn', function ($app, $config) {
        //     $adapter = new BunnyCDNAdapter(
        //         new BunnyCDNClient(
        //             $config['storage_zone'],
        //             $config['api_key'],
        //             $config['region']
        //         ),
        //         'https://digis.b-cdn.net/' # Optional
        //     );

        //     return new FilesystemAdapter(
        //         new Filesystem($adapter, $config),
        //         $adapter,
        //         $config
        //     );
        // });
    }
}
