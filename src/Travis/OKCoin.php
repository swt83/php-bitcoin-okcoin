<?php

namespace Travis;

class OKCoin {

	/**
     * Magic method for handling API calls.
     *
     * @param   string  $method
     * @param   array   $args
     * @return  object
     */
    public static function __callStatic($method, $args)
    {
        // capture arguments
        $args = isset($args[0]) ? $args[0] : array();

        // build query
        $url = 'https://www.okcoin.com/api/v1/'.$method.'.do?';
        if (!empty($args))
        {
            foreach($args as $key => $value)
            {
                $url .= '&'.$key.'='.urlencode($value);
            }
        }

        // setup curl request
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        $response = curl_exec($ch);

        // catch errors
        if (curl_errno($ch))
        {
            #$errors = curl_error($ch);

            // set
            $result = false;
        }
        else
        {
            // set
            $result = json_decode($response);
        }

        // close
        curl_close($ch);

        // return
        return $result;
    }

}