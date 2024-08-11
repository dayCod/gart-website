<?php

namespace App\Http\Middleware;

use App\Models\Visitor;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Stevebauman\Location\Facades\Location;
use Symfony\Component\HttpFoundation\Response;

class WebsiteVisitor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);
        $cacheName = 'guest:'.$request->getClientIp();

        if (!Cache::has($cacheName)) {
            Cache::remember($cacheName, 60*60*24,
                function () use ($request) {
                    return [
                        'session_id' => session()->getId(),
                        'ip_address' => $request->getClientIp(),
                        'user_agent' => $request->userAgent(),
                        'is_guest' => Auth::check() ? false : true,
                    ];
                }
            );

            $visitor = Visitor::create(Cache::get($cacheName));

            $ip_address = env('APP_ENV') == 'production'
                ? $visitor->ip_address
                : env('APP_TESTING_IP_ADDRESS');

            $location = Location::get($ip_address);

            $visitor->location()->create([
                'model_name' => Visitor::class,
                'country_name' => $location->countryName ?? null,
                'region_name' => $location->regionName ?? null,
                'city_name' => $location->cityName ?? null,
                'zip_code' => $location->zipCode ?? null,
                'postal_code' => $location->postalCode,
                'latitude' => $location->latitude,
                'longitude' => $location->longitude,
                'timezone' => $location->timezone,
            ]);
        }

        return $response;
    }
}
