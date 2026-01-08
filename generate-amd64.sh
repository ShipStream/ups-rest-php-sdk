#!/bin/bash
# This version of the generate.sh script should work on any x86/amd64 linux based systems.
# You must run `composer install` prior to executing this.
set -euo pipefail
cd "$(dirname "${BASH_SOURCE[0]}")"
# Merge the individual OpenAPI definitions into a single file
[[ -e openapi.yaml ]] && rm -f openapi.yaml
vendor/bin/openapi-merge \
  --resolve-references 0 \
  -o openapi.yaml \
  openapi/Base.yaml \
  openapi/*.yaml
# Generate API classes with Jane
php -d memory_limit=512M vendor/bin/jane-openapi generate -c .jane-openapi.php