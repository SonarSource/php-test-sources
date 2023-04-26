#!/bin/bash

echo "Remove unintendent files..."

cd src
find . -name ".DS_Store" -delete
find . -name "*.adoc" -delete
find . -name "*.bmp" -delete
find . -name "*.csv" -delete
find . -name "*.doc" -delete
find . -name "*.docx" -delete
find . -name "*.gif" -delete
find . -name "*.ods" -delete
find . -name "*.odt" -delete
find . -name "*.md" -delete
find . -name "*.jpeg" -delete
find . -name "*.jpg" -delete
find . -name "*.pcx" -delete
find . -name "*.png" -delete
find . -name "*.rtf" -delete
find . -name "*.svg" -delete
find . -name "*.tif" -delete
find . -name "*.tiff" -delete
find . -name "*.txt" -delete
find . -name "*.xls" -delete
find . -name "*.xlsx" -delete
find . -name "*.zip" -delete

echo "Remove unintendent files... Done"

echo "Big files (please review them):"
find . -size +250k | grep --invert-match "Symfony/Component/Intl/Resources/data/transliterator/emoji/"

echo "Done"
echo "==============================="
