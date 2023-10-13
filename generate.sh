#!/bin/bash

set -e

cd "$(dirname "${BASH_SOURCE[0]}")"

# Merge the individual OpenAPI definitions into a single file
if [ -e openapi.json ]; then rm openapi.json; fi
docker run -it --rm -v "$PWD":/app ghcr.io/elidrissidev/openapi-merge:1.5.2 \
    --resolve-references 0 \
    -o openapi.json \
    openapi/Base.json \
    openapi/*.json

# Generate API classes
php -d memory_limit=512M vendor/bin/jane-openapi generate -c .jane-openapi.php
