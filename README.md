# laravel practice

## Introduction

This project is meant to be used to learn the ins and outs of the framework through a simple application

## Project specification

OBJECTIVE: make a website that lets users do the following

> 1. register
> 1. log in
> 1. select their favourite anime
> 1. check if their anime is "based".

This "basedness" will simply be whether or not the selected anime (from a provided list) matches with a randomly selected one from the database.

There will also be a percentage metric that indicates the number of times the website determined the selection as "based" in proportion to the number of times they submitted their selection. This is expected to equate 1 / {number of available anime's}

## 11:43 AM 21/09/2023 TODO

I have already made a database file, migrations files automatically made by
`php artisan ui:auth`
modify the welcome.blade.php
