#PHP Enqueue Bundle Demo

This project is a simple demo to test and demonstrate php-enqueue capabilities.

This demo uses redis transport

# How to use
1. run `docker-compose up -d` to start a redis
2. run `./bin/console enqueue:consume --setup-broker` in a terminal to setup consumer and broker
3. Run `symfony serve` in other terminal to init symfony server
4. Open `https://localhost:8000/producer` in your web browser to produce a message
5. Check how message is duplicated for each processor.