# PHP Client Management System

## Overview

This repository contains a simple web-based client management system built with HTML, CSS, and PHP. The application allows users to add new clients and view existing client records stored in a MySQL database. The project includes a user-friendly interface with a dark theme and a navigation menu for easy access to different functionalities.

## Files

### `index.html`

This file contains the HTML form for adding a new client. The form includes fields for the client's name, phone number, email, and registration date.

### `database.php`

This file displays a list of all clients stored in the MySQL database. It fetches the client data using PHP and displays it in an HTML table.

### `insert_data.php`

This file handles the form submission from `index.html` and inserts the new client data into the MySQL database. It uses PHP to process the form data and execute the SQL insert query.

## HTML and CSS Explanation

### Common Styles

- **Global Styles**: All elements are styled with `margin: 0`, `padding: 0`, and `box-sizing: border-box` for consistent layout.
- **Body**: The body is styled to use the Arial font, have a dark background color, and center its content both vertically and horizontally.
- **Container**: A container class is used to style the main content area with a gradient background, blur effect, rounded corners, and a drop shadow.

### Navigation Bar

- The navigation bar is fixed at the top, with a dark background and shadow for depth.
- It contains links to view client records and add a new client.
- Links change color and background on hover for a visual effect.

### Form Styles

- **Labels**: Styled with a light gray color and a neon text-shadow effect.
- **Inputs and Buttons**: Styled with padding, margin, border, rounded corners, and a dark background to match the overall theme.

### Table Styles

- **Table**: The table for displaying client records is styled to be fully responsive and visually appealing with alternating row colors and hover effects.
- **Table Headers**: Styled with a semi-transparent background and bold text.
- **Table Data**: Styled with a lighter background and rounded corners for the first and last rows.

## PHP Code Explanation

### `index.html`

- Displays a form for adding new clients.
- The form method is POST and submits data to `insert_data.php`.

### `database.php`

- Connects to the MySQL database using PDO.
- Fetches all client records and displays them in an HTML table.
- Handles database connection errors by displaying an error message.

### `insert_data.php`

- Processes the form data from `index.html`.
- Connects to the MySQL database using PDO.
- Prepares and executes an SQL insert statement to add the new client data.
- Displays a success message if the data is inserted successfully or an error message if an exception occurs.

## Database Connection

- **Host**: `localhost`
- **Username**: `root`
- **Password**: `Boketto@2811`
- **Database Name**: `hair_salon`

### Database Structure

- **Table**: `clients`
- **Columns**:
  - `name` (VARCHAR)
  - `phone_number` (VARCHAR)
  - `email` (VARCHAR)
  - `registration_date` (DATE)

## How to Use

1. **Setup Database**:
   - Create a MySQL database named `hair_salon`.
   - Create a table named `clients` with columns for `name`, `phone_number`, `email`, and `registration_date`.

2. **Configure Connection**:
   - Update the database connection details in `database.php` and `insert_data.php` if necessary.

3. **Run the Application**:
   - Open `index.html` in a web browser to add a new client.
   - Open `database.php` to view the list of clients.

## Requirements

- A web server with PHP support (e.g., Apache, Nginx).
- MySQL database server.
- PHP PDO extension for database connection.

