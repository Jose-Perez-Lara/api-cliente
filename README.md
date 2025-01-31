# API de Usuarios

## Recordad crear el .env y generar la APP_KEY con el comando:

`php artisan key:generate`

## Endpoints

### GET /usuarios

Devuelve todos los usuarios.

**URL**  
`https://localhost:8000/api/v1/usuarios`

**Ejemplo de Petición:**

```http
GET https://localhost:8000/api/v1/usuarios
```

---

### POST /usuarios

Crea un nuevo usuario.

**URL**  
`https://localhost:8000/api/v1/usuarios`

**Ejemplo de Petición:**

```http
POST https://localhost:8000/api/v1/usuarios
```

**Body:**

```json
{
    "nombre": "Juan Perez",
    "email": "juan@example.com",
    "edad": 30
}
```

---

### GET /usuarios/{id}

Devuelve un usuario por su ID.

**URL**  
`https://localhost:8000/api/v1/usuarios/{id}`

**Ejemplo de Petición:**

```http
GET https://localhost:8000/api/v1/usuarios/1
```

---

### PUT/PATCH /usuarios/{id}

Actualiza la información de un usuario por su ID.

**URL**  
`https://localhost:8000/api/v1/usuarios/{id}`

#### Ejemplo de Petición con PUT:

```http
PUT https://localhost:8000/api/v1/usuarios/1
```

**Body:**

```json
{
    "nombre": "Juan Pérez",
    "email": "juan.perez@example.com",
    "edad": 31
}
```

#### Ejemplo de Petición con PATCH:

```http
PATCH https://localhost:8000/api/v1/usuarios/1
```

**Body:**

```json
{
    "edad": 14
}
```

---

### DELETE /usuarios/{id}

Borra un usuario por su ID.

**URL**  
`https://localhost:8000/api/v1/usuarios/{id}`

**Ejemplo de Petición:**

```http
DELETE https://localhost:8000/api/v1/usuarios/1
```
