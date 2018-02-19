<?php
/**
 * Created by PhpStorm.
 * User: bizmate
 * Date: 10/02/2018
 * Time: 20:51
 * https://stackoverflow.com/questions/31746182/docker-compose-wait-for-container-x-before-starting-y
 */

require_once __DIR__ . '/vendor/autoload.php';

use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

$connection = new AMQPStreamConnection('rabbitmq', 5672, 'guest', 'guest');
$channel = $connection->channel();

$channel->queue_declare('hello', false, true, false, false);

$msg = new AMQPMessage('Hello World!',
    array('delivery_mode' => AMQPMessage::DELIVERY_MODE_PERSISTENT)
);
$channel->basic_publish($msg, '', 'hello');

echo " [x] Sent 'Hello World!'\n";

$channel->close();
$connection->close();