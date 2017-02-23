#!/bin/bash 
timeout 15 tcpdump -A -s 0 -ne -c 20 port $3 and host $2 and host $1 > test4
sed -n "/<html/,/html>/p" test4 > new.html


