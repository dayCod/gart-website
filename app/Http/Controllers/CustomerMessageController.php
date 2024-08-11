<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Stevebauman\Location\Facades\Location;

class CustomerMessageController extends Controller
{
    /**
     * Handles the sending of a customer message.
     *
     * This method validates the incoming request data, creates a new CustomerMessage record,
     * and associates the message with the customer's location information (if available).
     * If the message is successfully created, a success message is returned. If an exception
     * occurs, the transaction is rolled back and an error message is returned.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function sendMessage(Request $request): RedirectResponse
    {
        DB::beginTransaction();
        try {
            $customerMessage = CustomerMessage::create(
                $request->validate([
                    'name' => ['required', 'string'],
                    'email' => ['required', 'email'],
                    'phone_number' => ['nullable', 'string'],
                    'type' => ['required', 'in:gart,reise,other'],
                    'message' => ['nullable', 'string']
                ])
            );

            $ip_address = env('APP_ENV') == 'production'
                ? $request->getClientIp()
                : env('APP_TESTING_IP_ADDRESS');

            $location = Location::get($ip_address);

            if ($location != false) {
                $customerMessage->location()->create([
                    'model_name' => CustomerMessage::class,
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

            DB::commit();

            return redirect()
                ->back()
                ->with('toastSuccess', 'Message sent successfully');

        } catch (\Exception $ex) {

            DB::rollBack();

            return redirect()
                ->back()
                ->with('toastError', $ex->getMessage());
        }
    }
}
