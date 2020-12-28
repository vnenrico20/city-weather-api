### City Weather API Test

1. Clone and cd into this project.

2. Run docker and connect to container (make sure port 80 & 3306 is not being used):
```
 docker-compose up -d
 docker-compose run php /bin/sh setup.sh
```

 - visit http://localhost/ or http://localhost/city-weather to see the output (you may have to use http://127.0.0.1)
 - or run this command "docker-compose run php php bin/console app:get-city-weather" to see the output

3. Run this command inside the container to execute the tests:
 ```
  docker-compose run php ./vendor/bin/simple-phpunit
 ```
