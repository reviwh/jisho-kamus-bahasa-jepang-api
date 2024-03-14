# Jisho API Documentation

Jisho API is a simple RESTful API for sample of Japanese Dictionary.

## Table of Contents

- [Endpoints](#endpoints)
- [Usage](#usage)
- [Responses](#responses)
- [Errors](#errors)

## Endpoints

#### `GET /get-data.php`

Gets sample of Japanese vocabulary.

#### `GET /get-data.php?keyword={query}`

Searches Japanese vocabulary from sample that relevant to `{query}`.

#### `POST /register.php`

Registers an account.

#### `POST /login.php`

Logins to account.

## Usage

All endpoints responses will be in JSON format.