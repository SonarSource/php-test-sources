#!/bin/bash

echo "Remove unintendent files..."

source_directories=(PHPMailer PHPWord PHP_CodeSniffer PhpSpreadsheet RubixML flysystem monica psysh)
find "${source_directories[@]}" \( \
  -name ".DS_Store" -o \
  -name "*.adoc" -o \
  -name "*.bmp" -o \
  -name "*.csv" -o \
  -name "*.doc" -o \
  -name "*.docx" -o \
  -name "*.gif" -o \
  -name "*.ods" -o \
  -name "*.odt" -o \
  -name "*.md" -o \
  -name "*.jpeg" -o \
  -name "*.jpg" -o \
  -name "*.pcx" -o \
  -name "*.png" -o \
  -name "*.rtf" -o \
  -name "*.svg" -o \
  -name "*.tif" -o \
  -name "*.tiff" -o \
  -name "*.txt" -o \
  -name "*.xls" -o \
  -name "*.xlsx" -o \
  -name "*.zip" \
\) -delete

echo "Remove unintendent files... Done"

echo "Big files (please review them):"
find "${source_directories[@]}" -size +250k | grep --invert-match "Symfony/Component/Intl/Resources/data/transliterator/emoji/"

echo "Done"
echo "==============================="
