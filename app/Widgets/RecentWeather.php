<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use GuzzleHttp\Client;
use Mockery\Exception;

class RecentWeather extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [
        'city' => 'London',
    ];

    /**
     * @return string
     */
    public function placeholder()
    {
        return 'Loading...';
    }

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {

        $apiKey = config('recentweather.open_weather.api_key');
        $client = new Client([
            'verify' => false,
        ]);

        $weather = "";
        $temperature = "";
        $city = "";
        $wind = "";


        $response = $client->get(
            "http://api.openweathermap.org/data/2.5/weather?q={$this->config['city']}&appid={$apiKey}&units=metric"
        );

        $data = json_decode($response->getBody(), true);

        if(isset($data['weather'][0]['main'])) {
            $weather = $data['weather'][0]['main'];
        }

        if(isset($data['weather'][0]['description'])) {
            $weather = $weather." ( ".$data['weather'][0]['description']." )";
        }

        if(isset($data['main'])) {
            $temperature = $data['main'];
        }

        if(isset($data['name'])) {
            $city = $data['name'];
        }

        if(isset($data['wind'])) {
            $wind = $data['wind'];
        }



        return view('widgets.recent_weather', [
            'weather' => $weather,
            'temperature' => $temperature,
            'city' => $city,
            'wind' => $wind,
            'data' => $data
        ]);
    }
}
