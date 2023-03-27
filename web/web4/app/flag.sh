#!/bin/bash
echo "flag在 /flag中，这题不是session伪造，想想别的做法" > /flag.txt

echo $FLAG > /flag

export FLAG=not_flag
FLAG=not_flag

rm -f /flag.sh
