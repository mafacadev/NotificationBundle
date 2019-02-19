<?php
/**
 * Created by PhpStorm.
 * User: fabodev
 * Date: 29/11/18
 * Time: 12:09 PM
 */

namespace NotificationBundle\Event;


use NotificationBundle\Util\NotificationEventUtil;
use NotificationBundle\Util\NotificationUtil;
use Psr\Log\LoggerInterface;
use Symfony\Component\EventDispatcher\Event;

class NotificationEvent extends Event
{
    const NAME = "osmos.notification";

    /** @var NotificationUtil */
    private $notification;
    /** @var LoggerInterface */
    private $logger;

    public function setNotification($notification)
    {
        $this->notification = $notification;
    }

    /**
     * @return NotificationUtil
     */
    public function getNotification()
    {
        return $this->notification;
    }

    public function setLogger($logger)
    {
        $this->logger = $logger;
    }

    /**
     * @return LoggerInterface
     */
    public function getLogger()
    {
        return $this->logger;
    }

}