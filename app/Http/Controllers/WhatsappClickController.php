<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WhatsappClick;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Stevebauman\Location\Facades\Location;

class WhatsappClickController extends Controller
{
    /**
     * This method creates a new WhatsappClick record in the database, capturing the session ID, IP address, user agent, and whether the user is a guest. It then uses the Location facade to retrieve the location details for the user's IP address and stores those in the WhatsappClick's location record.
     *
     * @param Request $request The incoming HTTP request.
     * @return RedirectResponse A redirect response to the WhatsApp web interface.
     */
    public function redirectingToWhatsapp(Request $request): RedirectResponse
    {
        DB::beginTransaction();

        try {
            $whatsappModel = WhatsappClick::create([
                'session_id' => session()->getId(),
                'ip_address' =>  $request->getClientIp(),
                'user_agent' => $request->userAgent(),
                'is_guest' => Auth::check() ? false : true,
            ]);

            $ip_address = env('APP_ENV') == 'production'
                ? $whatsappModel->ip_address
                : env('APP_TESTING_IP_ADDRESS');

            $location = Location::get($ip_address);

            if ($location != false) {
                $whatsappModel->location()->create([
                    'model_name' => WhatsappClick::class,
                    'country_name' => $location->countryName,
                    'region_name' => $location->regionName,
                    'city_name' => $location->cityName,
                    'zip_code' => $location->zipCode,
                    'postal_code' => $location->postalCode,
                    'latitude' => $location->latitude,
                    'longitude' => $location->longitude,
                    'timezone' => $location->timezone,
                ]);
            }

            $phoneNumber = self::GART_WHATSAPP_PHONE_NUMBER;
            $path = "https://api.whatsapp.com/send/?phone={$phoneNumber}&text=Hi there! I'm interested with your works. Could you provide more details on the pricing, and availability? Looking forward to your response. Thank you!&type=phone_number&app_absent=0";

            DB::commit();

            return redirect()->to($path);
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->route('index');
        }
    }
}
