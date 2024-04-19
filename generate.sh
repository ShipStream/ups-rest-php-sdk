#!/bin/bash

set -e

cd "$(dirname "${BASH_SOURCE[0]}")"

# Merge the individual OpenAPI definitions into a single file
if [ -e openapi.yaml ]; then rm openapi.yaml; fi
docker run -it --rm -v "$PWD":/app ghcr.io/elidrissidev/openapi-merge:1.5.2 \
    --resolve-references 0 \
    -o openapi.yaml \
    openapi/Base.yaml \
    openapi/*.yaml

# Generate API classes
php -d memory_limit=512M vendor/bin/jane-openapi generate -c .jane-openapi.php
