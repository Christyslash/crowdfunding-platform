#!/bin/sh

php artisan migrate:refresh --seed --force

php artisan shield:generate --all

php artisan optimize:clear
