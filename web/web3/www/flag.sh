#!/bin/bash

sed -i "s/QLNU{dadie_vme_50}/$FLAG/" /var/www/html/index.php

export FLAG=not_flag
FLAG=not_flag

rm -f /flag.sh
