<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentacion</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans text-gray-900">

    <!-- Header -->
    <header class="bg-blue-600 text-white p-6 shadow-md">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold">API de usuarios</h1>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">

        <section>
            <h2 class="text-2xl font-semibold mb-4">Endpoints</h2>
            <ul class="space-y-4">
                <li class="bg-white p-4 rounded-md shadow-md">
                    <h3 class="text-xl font-semibold">GET /usuarios</h3>
                    <p>Devuelve todos los usuarios</p>
                    <code class="bg-gray-100 text-sm p-2 rounded-md">https://localhost:8000/usuarios</code>
                    <h4 class="mt-2 font-semibold">Ejemplo de Petición:</h4>
                    <pre class="bg-gray-100 text-sm p-2 rounded-md">
GET https://localhost:8000/usuarios</pre>
                </li>
                <li class="bg-white p-4 rounded-md shadow-md">
                    <h3 class="text-xl font-semibold">POST /usuarios</h3>
                    <p>Crea un usuario</p>
                    <code class="bg-gray-100 text-sm p-2 rounded-md">https://localhost:8000/usuarios</code>
                    <h4 class="mt-2 font-semibold">Ejemplo de Petición:</h4>
                    <pre class="bg-gray-100 text-sm p-2 rounded-md">
POST https://localhost:8000/usuarios 
Body:'{"nombre": "Juan Perez", "email": "juan@example.com", "edad": 30}'</pre>
                </li>
                <li class="bg-white p-4 rounded-md shadow-md">
                    <h3 class="text-xl font-semibold">GET /usuarios/{id}</h3>
                    <p>Devuelve el usuario por ID.</p>
                    <code class="bg-gray-100 text-sm p-2 rounded-md">https://localhost:8000/usuarios/{id}</code>
                    <h4 class="mt-2 font-semibold">Ejemplo de Petición:</h4>
                    <pre class="bg-gray-100 text-sm p-2 rounded-md">
GET https://localhost:8000/usuarios/1 </pre>
                </li>
                <li class="bg-white p-4 rounded-md shadow-md">
                    <h3 class="text-xl font-semibold">PUT/PATCH /usuarios/{id}</h3>
                    <p>Actualiza la información del usuario por su ID.</p>
                    <code class="bg-gray-100 text-sm p-2 rounded-md">https://localhost:8000/usuarios/{id}</code>
                    <h4 class="mt-2 font-semibold">Ejemplo de Petición por PUT:</h4>
                    <pre class="bg-gray-100 text-sm p-2 rounded-md">
PUT https://localhost:8000/usuarios/1 
Body:'{"nombre": "Juan Pérez", "email": "juan.perez@example.com", "edad": 31}'</pre>
                    <h4 class="mt-2 font-semibold">Ejemplo de Petición por PATCH:</h4>
                    <pre class="bg-gray-100 text-sm p-2 rounded-md">
PATCH https://localhost:8000/usuarios/1 
Body:'{"edad": 14}'</pre>
                </li>
                <li class="bg-white p-4 rounded-md shadow-md">
                    <h3 class="text-xl font-semibold">DELETE /usuarios/{id}</h3>
                    <p>Borra un usuario por ID.</p>
                    <code class="bg-gray-100 text-sm p-2 rounded-md">https://localhost:8000/usuarios/{id}</code>
                    <h4 class="mt-2 font-semibold">Ejemplo de Petición:</h4>
                    <pre class="bg-gray-100 text-sm p-2 rounded-md">
DELETE https://localhost:8000/usuarios/1</pre>
                </li>
            </ul>
        </section>
    </main>

</body>
</html>
