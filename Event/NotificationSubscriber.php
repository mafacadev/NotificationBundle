<?php
/**
 * Created by PhpStorm.
 * User: fabodev
 * Date: 29/11/18
 * Time: 12:15 PM
 */

namespace NotificationBundle\Event;


use NotificationBundle\Services\NotificationService;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Class NotificationSubscriber
 * @package NotificationBundle\Event
 */
class NotificationSubscriber implements EventSubscriberInterface
{
    /** @var NotificationService */
    private $notificationService;

    public function __construct(NotificationService $notificationService)
    {
        $this->notificationService = $notificationService;
    }

    public static function getSubscribedEvents()
    {
        // TODO: Implement getSubscribedEvents() method.
        return [
            NotificationEvent::NAME => 'onNotificationReceive',
        ];
    }

    public function onNotificationReceive(NotificationEvent $event)
    {
        $event->getLogger()->debug('ON THE EVENT ------>>>>>');
        $resp = $this->notificationService->sendNotification($event->getNotification());
        $event->getLogger()->error($resp);
    }

}