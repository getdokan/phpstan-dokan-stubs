#!/usr/bin/env bash
#
# Generate dokan stubs from the source directory.
#

HEADER=$'/**\n * Generated stub declarations for dokan.\n * @see https://dokan.co\n * @see https://github.com/mralaminahamed/phpstan-dokan-stubs\n */'

FILE="dokan-stubs.php"
FILE_CONSTANTS="dokan-constants-stubs.php"

set -e

test -f "$FILE" || touch "$FILE"
test -f "$FILE_CONSTANTS" || touch "$FILE_CONSTANTS"
test -d "source/dokan-lite"

# Exclude globals, constants.
"$(dirname "$0")/vendor/bin/generate-stubs" \
    --include-inaccessible-class-nodes \
    --force \
    --finder=finder.php \
    --header="$HEADER" \
    --functions \
    --classes \
    --interfaces \
    --traits \
    --out="$FILE"

# Exclude functions, classes, interfaces, traits and globals.
"$(dirname "$0")/vendor/bin/generate-stubs" \
    --include-inaccessible-class-nodes \
    --force \
    --finder=finder.php \
    --header="$HEADER" \
    --constants \
    --out="$FILE_CONSTANTS"
