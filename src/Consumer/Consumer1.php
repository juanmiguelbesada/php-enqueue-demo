<?php

declare(strict_types=1);

namespace App\Consumer;

use Enqueue\Client\TopicSubscriberInterface;
use Interop\Queue\Context;
use Interop\Queue\Message;
use Interop\Queue\Processor;

class Consumer1 implements Processor, TopicSubscriberInterface
{
    public function process(Message $message, Context $context)
    {
        var_dump($message);
        return self::ACK;
    }

    public static function getSubscribedTopics()
    {
        return 'test_topic';
    }

}