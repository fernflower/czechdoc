#!/bin/bash

# Make www-data user access bind-mounted langcache dir
mkdir -p public/langcache && sudo chown 33 public/langcache/
docker-compose up
