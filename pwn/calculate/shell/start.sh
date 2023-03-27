#! /bin/bash

if [[ -f /flag.sh ]]; then
	source /flag.sh
fi


socat TCP-L:10000,fork,reuseaddr EXEC:"python3 ./server.py",pty,stderr,setsid,sane,raw,echo=0
