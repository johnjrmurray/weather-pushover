#!/bin/bash

W=$(php /home/john/services/weather-push/weather.php)

PUSHOVER=$(curl -s \
        -F "token=" \
        -F "user=" \
        -F "title=Weather" \
        -F "message=$W" \
        https://api.pushover.net/1/messages.json)	
