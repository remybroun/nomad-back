<?php

namespace App\Services;
use HubSpot\Factory;
use HubSpot\Client\Crm\Contacts\Model\SimplePublicObjectInput;
class HubSpotService
{
    public function getClient()
    {
        $accessToken = env('HUBSPOT_ACCESS_TOKEN'); // or use the API key if you prefer
        return Factory::createWithAccessToken($accessToken);
    }

    // Example method to get contacts
    public function getContacts()
    {
        $hubSpot = $this->getClient();
        return $hubSpot->crm()->contacts()->basicApi()->getPage();
    }

    /**
     * Create a new contact in HubSpot statically.
     *
     * @param array $contactProperties Associative array of contact properties.
     * @return mixed
     */
    public static function createContact(array $contactProperties)
    {
        $hubSpot = (new HubSpotService)->getClient();
        $contactInput = new SimplePublicObjectInput(['properties' => $contactProperties]);
//            $response = $hubSpot->crm()->contacts()->basicApi()->create($contactInput);

        try {
            $response = $hubSpot->crm()->contacts()->basicApi()->create($contactInput);
            return $response; // Returns the created contact object
        } catch (\Exception $e) {
            return null; // Or return a meaningful error message
        }
    }
}
