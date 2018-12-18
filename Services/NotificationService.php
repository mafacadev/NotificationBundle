<?php
/**
 * Created by PhpStorm.
 * User: fabodev
 * Date: 29/11/18
 * Time: 01:17 PM
 */

namespace NotificationBundle\Services;


use Doctrine\ORM\EntityManager;
use Monolog\Logger;
use NotificationBundle\Util\NotificationUtil;
use NotificationBundle\Util\RestClientUtil;

/**
 * This class manage the communication
 * with the notification service
 *
 * Class NotificationService
 * @package NotificationBundle\Services
 */
class NotificationService
{
    /** @var Logger */
    private $logger;
    /** @var EntityManager */
    private $em;
    /** @var string */
    private $server;

    public function __construct($em, $logger, $server)
    {
        $this->em       = $em;
        $this->logger   = $logger;
        $this->server   = $server;
    }

    public function sendNotification(NotificationUtil $notificationUtil)
    {
        $this->logger->debug('INTO NotificationService...');
        // Obtain the channels that are linked to the user
        $sql = "
            SELECT
              1
            FROM notifications_user_channels us
            JOIN notifications_channel c ON (us.channel_id = c.id)
            WHERE us.user_id = :id
            AND c.tag = :tag
            AND us.active = TRUE
        ";
        $sendNotification = $this->em->getConnection()->executeQuery($sql,[
            'id'    => $notificationUtil->getReceiverId(),
            'tag'   => $notificationUtil->getChannel(),
        ])->fetchAll();

        // If dont have a subscription do nothing
        if (count($sendNotification) == 0) {
            $this->logger->debug(sprintf("No estas suscrito para recibir notificaciones de: %s", $notificationUtil->getChannel()));
            return 'U ARE NOT SUBSCRIBED (X_X)';
        }

        $this->logger->debug("U'RE SUBSCRIBED, DOING POST.....");

        /** @var RestClientUtil $restClient */
        $restClient = new RestClientUtil($this->server);
        $restClient->setPostFields([
            'action'            => $notificationUtil->getAction(),
            'actionParam'       => $notificationUtil->getActionParam(),
            'isMail'            => $notificationUtil->getisMail(),
            'body'              => $notificationUtil->getMailBody(),
            'message'           => $notificationUtil->getMessage(),
            'sendTo'            => $notificationUtil->getSendTo(),
            'subject'           => $notificationUtil->getMailSubject(),
            'template'          => 'default-template',
            'year'              => date("Y"),
            'emitterId'         => $notificationUtil->getEmitterId(),
            'receiverId'        => $notificationUtil->getReceiverId(),
            'channel'           => $notificationUtil->getChannel(),
            'frontRequestUri'   => $notificationUtil->getFrontRequestUri(),
        ]);

        $response = $restClient->doPost('notificationTray');

        $this->logger->debug('PRINTING RESPONSE');
        $this->logger->debug(gettype($response));
        $this->logger->debug($response);

        return 'NOTIFICATION SENDED';
    }

}