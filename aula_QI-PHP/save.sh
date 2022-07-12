#!/bin/sh

while [ true ];
do
    echo '|'
    sleep 0.5
    clear
    echo '/'
    sleep 0.5
    clear
    echo '--'
    sleep 0.5
    cp -r /home/ereck/aula_QI-PHP/* /opt/lampp/htdocs/aula_QI-PHP 
    clear
    echo '\'
    sleep 0.5
    clear
    echo '|'
    sleep 0.5
    clear
done