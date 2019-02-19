<?php
/**
 * Created by PhpStorm.
 * User: fabodev
 * Date: 19/02/19
 * Time: 02:41 PM
 */

namespace NotificationBundle\Util;


class NotificationEventUtil
{
    /** @var string */
    private $eventName;
    /** @var string */
    private $eventMessage;
    /** @var string */
    private $throwerId;
    /** @var string */
    private $listenerId;

    /**
     * @return mixed
     */
    public function getEventName()
    {
        return $this->eventName;
    }

    /**
     * @param mixed $eventName
     */
    public function setEventName($eventName)
    {
        $this->eventName = $eventName;
    }

    /**
     * @return mixed
     */
    public function getEventMessage()
    {
        return $this->eventMessage;
    }

    /**
     * @param mixed $eventMessage
     */
    public function setEventMessage($eventMessage)
    {
        $this->eventMessage = $eventMessage;
    }

    /**
     * @return mixed
     */
    public function getThrowerId()
    {
        return $this->throwerId;
    }

    /**
     * @param mixed $throwerId
     */
    public function setThrowerId($throwerId)
    {
        $this->throwerId = $throwerId;
    }

    /**
     * @return mixed
     */
    public function getListenerId()
    {
        return $this->listenerId;
    }

    /**
     * @param mixed $listenerId
     */
    public function setListenerId($listenerId)
    {
        $this->listenerId = $listenerId;
    }


}