<?php
/**
 * Created by PhpStorm.
 * User: fabodev
 * Date: 28/11/18
 * Time: 03:45 PM
 */

namespace NotificationBundle\Util;


class RestClientUtil
{
    private $curl;

    /** @var $server string */
    private $server;

    /** @var $method int */
    private $method;

    /** @var $postFields array */
    private $postFields;

    /**
     * RestClientUtil constructor.
     * @param $server
     */
    public function __construct($server)
    {
        $this->curl     = curl_init();
        $this->server   = $server;
    }

    /**
     * @return int
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param $method int
     */
    public function setMethod($method)
    {
        $this->method = $method;
    }

    /**
     * @param $postFields array
     */
    public function setPostFields($postFields)
    {
        if (is_array($postFields)) {
            $this->postFields = $postFields;
        } else {
            $this->postFields = array();
        }
    }

    /**
     * @param $uri
     * @return bool|mixed
     */
    public function doPost($uri)
    {
        if (count($this->postFields) == 0) {
            return false;
        }

        $stringParams = http_build_query($this->postFields);

        curl_setopt($this->curl,CURLOPT_URL, $this->server . $uri);
        curl_setopt($this->curl,CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->curl,CURLOPT_POST, true);
        curl_setopt($this->curl,CURLOPT_POSTFIELDS, $stringParams);

        $response   = curl_exec($this->curl);
        $errno      = curl_errno($this->curl);

        // Something wrong
        if($errno) {
            curl_close ($this->curl);
            return false;

        }

        // Everything was cool
        curl_close ($this->curl);

        return $response;

    }

    public function doGet()
    {

    }
}