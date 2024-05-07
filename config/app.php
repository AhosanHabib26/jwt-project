'providers' => [
    // Other Service Providers
    Tymon\JWTAuth\Providers\LaravelServiceProvider::class,
],

'aliases' => [
    // Other Aliases
    'JWTAuth' => Tymon\JWTAuth\Facades\JWTAuth::class,
    'JWTFactory' => Tymon\JWTAuth\Facades\JWTFactory::class,
],
