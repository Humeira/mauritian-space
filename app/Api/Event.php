<?php

/**
 * Created by PhpStorm.
 * User: humeira
 * Date: 04/02/2018
 * Time: 12:32
 */
namespace App\Api;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;


class Event
{

    private $url;
    private $cities;
    private $country;

    public function __construct($country)
    {
        $this->country = $country;
        $this->url = env('MEETUP_API_BASE_URL');
        $this->cities = $this->FetchCities();
    }

    /**
     * @return array
     */
    public function FetchCities()
    {
        $url = $this->url . 'cities';
        $client = new GuzzleClient();
        try {
            $request = $client->request('GET', $url, [
                'query' => [
                    'key' => env('MEETUP_API_KEY'),
                    'country' => $this->country,
                    'page' => 200
                ]
            ]);

            $response = $request->getBody()->getContents();
            $response = json_decode($response, true);
        } catch (GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $response = $response->getBody()->getContents();
        }

        if (!empty($response['results'])) {
            $cities = array();
            foreach ($response['results'] as $result) {
                array_push($cities, $result['city']);
            }
        }

        return $cities;
    }

    /**
     * @param string $city
     */
    public function FetchEvents($city = 'Port Louis')
    {
        $url = $this->url . 'open_events';
        $client = new GuzzleClient();

        try {
            $request = $client->request('GET', $url, [
                'query' => [
                    'key' => env('MEETUP_API_KEY'),
                    'category' => env('MEETUP_API_CATEGORY_ID '),
                    'country' => 'MU',
                    'city' => $city
                ]
            ]);
            $response = $request->getBody()->getContents();
            $response = json_decode($response, true);
        } catch (GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $response = $response->getBody()->getContents();
        }

        if(!empty($response['results'])){
            return $response['results'];
        }
    }
}