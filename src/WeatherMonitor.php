<?php

/**
 * Class WeatherMonitor
 * An example class for monitoring the weather
 */

class WeatherMonitor
{
    /**
     * @var TemeratureService
     *
     */
    protected $service;

    /**
     * WeatherMonitor constructor.
     * @param TemperatureService $service Temperature service dependency
     *
     * @return void
     */
    public function __construct(TemperatureService $service)
    {
        $this->service = $service;
    }

    /**
     * Get the average temperature between two times
     *
     * @param string $start Start  time hh:mm
     * @param string $send End time hh:mm
     * @return float|int
     */
    public function getAverageTemperature(string $start, string $send)
    {
        $start_temp = $this->service->getTemperature($start);
        $send_temp = $this->service->getTemperature($send);

        return($start_temp + $send_temp) / 2 ;
    }




}