#!/bin/bash

cd src
find . -name "*.adoc" -delete
find . -name "*.bmp" -delete
find . -name "*.csv" -delete
find . -name "*.ods" -delete
find . -name "*.md" -delete
find . -name "*.jpeg" -delete
find . -name "*.jpg" -delete
find . -name "*.png" -delete
find . -name "*.svg" -delete
find . -name "*.tiff" -delete
find . -name "*.txt" -delete
find . -name "*.xls" -delete
find . -name "*.xlsx" -delete

echo "Big files:"
find . -size +200k