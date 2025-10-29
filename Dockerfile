# Use the official PHP image
FROM php:8.2-cli

# Copy all project files into the container
WORKDIR /app
COPY . /app

# Expose port for Render
EXPOSE 10000

# Start the PHP built-in server
CMD ["php", "-S", "0.0.0.0:10000"]
