# Order Note Board

## Overview

Order Note Board is a simple internal web application built using Laravel, PHP, JavaScript and SQLite.

The application allows warehouse staff to create and view notes against customer order numbers. It was designed as a lightweight internal tool that helps teams communicate important information such as packaging issues, priority orders and special handling requirements.

This project was developed as part of the Darkside Developments Junior Web Developer Technical Test.

---

## Application Screenshot

Insert screenshot here:

<img width="1042" height="467" alt="image" src="https://github.com/user-attachments/assets/b11f298d-11a8-4846-b540-ff48d2a0bc9c" />


---

## Features

### Backend

* Laravel REST API
* Create new notes
* Retrieve all notes
* SQLite database storage
* Eloquent ORM
* Input validation
* JSON responses

### Frontend

* Single-page interface
* Submit new notes without page reload
* Display all existing notes
* Dynamic updates using JavaScript Fetch API

---

## Database Structure

The application stores notes in a relational database table called `notes`.

| Field        | Type      |
| ------------ | --------- |
| id           | Integer   |
| order_number | String    |
| author       | String    |
| message      | Text      |
| created_at   | Timestamp |
| updated_at   | Timestamp |

---

## API Endpoints

### Retrieve All Notes

GET

/api/notes

Returns all notes stored in the database.

---

### Create Note

POST

/api/notes

Example Request:

```json
{
  "order_number": "ORD-1042",
  "author": "Ally",
  "message": "Priority packaging issue"
}
```

Example Response:

```json
{
  "id": 1,
  "order_number": "ORD-1042",
  "author": "Ally",
  "message": "Priority packaging issue"
}
```

---

## Technologies Used

* Laravel
* PHP
* SQLite
* JavaScript
* HTML
* Git
* GitHub

---

## Development Approach

Before beginning development, I reviewed the project requirements and created a simple development plan covering:

* Requirements analysis
* Database design
* API design
* Frontend structure
* Testing strategy

I chose to build and test the API before creating the frontend. This allowed me to verify that the routes, controller logic and database functionality were working correctly before integrating the user interface.

The application follows Laravel's MVC architecture:

* Migration for database creation
* Eloquent Model for data access
* Controller for business logic
* API Routes for communication
* JavaScript frontend consuming the API

---

## Testing

### API Testing

Initial GET request:

GET /api/notes

Expected Result:

```json
[]
```

When no notes exist.

---

### Create Note Test

POST /api/notes

```json
{
  "order_number": "ORD-1042",
  "author": "Ally",
  "message": "Priority packaging issue"
}
```

Expected Result:

The note is successfully stored and returned as JSON.

---

### Frontend Testing

The following functionality was tested:

* Create note
* Retrieve notes
* Validation checks
* Dynamic page updates without page refresh

---

## Future Improvements

Given additional development time, I would consider implementing:

* Search and filtering by order number
* Edit note functionality
* Delete note functionality
* Improved responsive styling
* User authentication
* Pagination for larger datasets

---

## Author

Alasdair MacDonald

GitHub: https://github.com/MacDonald91
