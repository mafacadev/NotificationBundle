<?php
/**
 * Created by PhpStorm.
 * User: fabodev
 * Date: 29/11/18
 * Time: 12:10 PM
 */

namespace NotificationBundle\Util;

/**
 * Create a Plain Old PHP Object
 * for represent a NotificationTray entity
 *
 * Class NotificationUtil
 * @package NotificationBundle\Util
 */
class NotificationUtil
{
    /** @var string $action */
    private $action;
    /** @var string $actionParam */
    private $actionParam;
    /** @var string $channel */
    private $channel;
    /** @var string $emitterId */
    private $emitterId;
    /** @var boolean $notified */
    private $notified;
    /** @var string $message */
    private $message;
    /** @var string $receiverId */
    private $receiverId;
    /** @var string $sendTo */
    private $sendTo;
    /** @var string $frontRequestUri */
    private $frontRequestUri;
    /** @var string $mailSubject */
    private $mailSubject;
    /** @var string $mailBody */
    private $mailBody;
    /** @var boolean $isMail */
    private $isMail;

    /**
     * @return string
     */
    public function getSendTo()
    {
        return $this->sendTo;
    }

    /**
     * @param string $sendTo
     */
    public function setSendTo($sendTo)
    {
        $this->sendTo = $sendTo;
    }

    /**
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param string $action
     */
    public function setAction($action)
    {
        $this->action = $action;
    }

    /**
     * @return string
     */
    public function getActionParam()
    {
        return $this->actionParam;
    }

    /**
     * @param string $actionParam
     */
    public function setActionParam($actionParam)
    {
        $this->actionParam = $actionParam;
    }

    /**
     * @return bool
     */
    public function isNotified()
    {
        return $this->notified;
    }

    /**
     * @param bool $notified
     */
    public function setNotified($notified)
    {
        $this->notified = $notified;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return string
     */
    public function getReceiverId()
    {
        return $this->receiverId;
    }

    /**
     * @param string $receiverId
     */
    public function setReceiverId($receiverId)
    {
        $this->receiverId = $receiverId;
    }

    /**
     * @return string
     */
    public function getEmitterId()
    {
        return $this->emitterId;
    }

    /**
     * @param string $emitterId
     */
    public function setEmitterId($emitterId)
    {
        $this->emitterId = $emitterId;
    }

    /**
     * @return string
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * @param string $channel
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;
    }

    /**
     * @return string
     */
    public function getFrontRequestUri()
    {
        return $this->frontRequestUri;
    }

    /**
     * @param string $frontRequestUri
     */
    public function setFrontRequestUri($frontRequestUri)
    {
        $this->frontRequestUri = $frontRequestUri;
    }

    /**
     * @return string
     */
    public function getMailSubject()
    {
        return $this->mailSubject;
    }

    /**
     * @param string $mailSubject
     */
    public function setMailSubject($mailSubject)
    {
        $this->mailSubject = $mailSubject;
    }

    /**
     * @return string
     */
    public function getMailBody()
    {
        return $this->mailBody;
    }

    /**
     * @param string $mailBody
     */
    public function setMailBody($mailBody)
    {
        $this->mailBody = $mailBody;
    }

    /**
     * @return boolean
     */
    public function getisMail()
    {
        return $this->isMail;
    }

    /**
     * @param boolean $isMail
     */
    public function setIsMail($isMail)
    {
        $this->isMail = $isMail;
    }

}