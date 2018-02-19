# Demo RabbitMQ implementation in PHP

Using `php-amqplib/php-amqplib` with a full dockerised setup to minimise setup and provide a fully working environment.
Based on https://www.rabbitmq.com/tutorials/tutorial-two-php.html

This setup works on Macs and Linux, not tested on Windows

## Start stack

`make up`

Once rabbitMQ is started you can see the queue in the management console at  http://localhost:15672/#/queues

## Send several messages

This steps calls the sender infinitely to start queueing messages. Notice that the queue will grow considerably so to
stop it do it in your console with CTRL + C (or similar depending on your Operating system)

`make push_jobs`

## See the logs

`make tail`

## Stop the stack

`make down`