#!/bin/bash

# Remove Tailwind CSS and related packages
npm uninstall @tailwindcss/vite tailwindcss postcss autoprefixer

# Remove frontend-related resources
rm -rf resources/css
rm -rf resources/js
rm -rf resources/views
rm tailwind.config.js
rm postcss.config.js

# Optional: Remove frontend build tools if not needed
npm uninstall vite laravel-vite-plugin

echo "Cleanup for API-only project completed."