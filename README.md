
# Laravel Test API

Brief application documentation


## API Reference

#### Get all User

```http
  GET /api/users
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `per_page` | `integer` | **Optional**. Item Per Page |
| `sort_order` | `string` | **Optional**. Order item (asc, desc) |
| `name` | `string` | **Optional**. Filter by name |
| `email` | `string` | **Optional**. Filter by email |

#### Create User

```http
  POST /api/user/create
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `name`      | `string` | **Required**. Name |
| `email`      | `string` | **Required**. Email |
| `password`      | `string` | **Required**. Password, min: 8 characters |
| `role`      | `string` | **Required**. Role |




## Deployment

To run the project follow this step

#### 1. Copy data db config to .env
```bash
    docker-compose/pgsql/pgsql.env to .env
```

#### 2. Maksure docker already active and run this command
```bash
  docker compose build --no-orphans; docker compose build --no-cache; docker compose up -d
```

#### 3. After succcess build open postman and access endpoint
```bash
  http://localhost:8011/api
```