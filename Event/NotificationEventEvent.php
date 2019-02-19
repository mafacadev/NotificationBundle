<?php
/**
 * Created by PhpStorm.
 * User: fabodev
 * Date: 19/02/19
 * Time: 03:38 PM
 */

namespace NotificationBundle\Event;


use NotificationBundle\Util\NotificationEventUtil;
use Psr\Log\LoggerInterface;
use Symfony\Component\EventDispatcher\Event;

class NotificationEventEvent extends Event
{
    const NAME = "osmos.notification.event";

    /** @var NotificationEventUtil */
    private $notificationEventUtil;
    /** @var LoggerInterface */
    private $log;

    /**
     * @return NotificationEventUtil
     */
    public function getNotificationEventUtil()
    {
        return $this->notificationEventUtil;
    }

    /**
     * @param NotificationEventUtil $notificationEventUtil
     */
    public function setNotificationEventUtil($notificationEventUtil)
    {
        $this->notificationEventUtil = $notificationEventUtil;
    }

    /**
     * @return LoggerInterface
     */
    public function getLog()
    {
        return $this->log;
    }

    /**
     * @param LoggerInterface $log
     */
    public function setLog($log)
    {
        $this->log = $log;
    }

}