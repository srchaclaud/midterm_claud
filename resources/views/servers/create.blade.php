<!DOCTYPE html>
<html>
<head>
    <title>Add Server</title>

    <style>
        body {
            font-family: Arial;
            background: #f4f6f8;
            padding: 40px;
        }

        .container {
            width: 450px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px #ccc;
        }

        h1 {
            color: #333;
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            margin-top: 20px;
            background: #2563eb;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #1d4ed8;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            color: #2563eb;
            text-decoration: none;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>➕ Add Server</h1>

    <form action="{{ route('servers.store') }}" method="POST">
        @csrf

        <label>Name</label>
        <input type="text" name="name">

        <label>Host</label>
        <input type="text" name="host">

        <label>Username</label>
        <input type="text" name="username">

        <label>Port</label>
        <input type="number" name="port" value="22">

        <button type="submit">Save Server</button>
    </form>

    <a href="{{ route('servers.index') }}">
        ← Back to Servers
    </a>

</div>

</body>
</html>