<!DOCTYPE html>
<html>
<head>
    <title>Server Manager</title>

    <style>
        body {
            font-family: Arial;
            background: #f4f6f8;
            margin: 0;
            padding: 40px;
        }

        .container {
            width: 900px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px #ccc;
        }

        h1 {
            color: #333;
        }

        .add {
            display: inline-block;
            background: #2563eb;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .add:hover {
            background: #1d4ed8;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #2563eb;
            color: white;
            padding: 12px;
        }

        td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background: #f1f5f9;
        }

        .delete {
            background: #dc2626;
            color: white;
            border: none;
            padding: 7px 12px;
            border-radius: 4px;
            cursor: pointer;
        }

        .delete:hover {
            background: #b91c1c;
        }

        .ssh {
            display: inline-block;
            margin-top: 20px;
            color: #2563eb;
            text-decoration: none;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>🖥️ Server Manager</h1>

    <a class="add" href="{{ route('servers.create') }}">
        + Add Server
    </a>

    <table>
        <tr>
            <th>Name</th>
            <th>Host</th>
            <th>Username</th>
            <th>Port</th>
            <th>Action</th>
        </tr>

        @foreach($servers as $server)
        <tr>
            <td>{{ $server->name }}</td>
            <td>{{ $server->host }}</td>
            <td>{{ $server->username }}</td>
            <td>{{ $server->port }}</td>
            <td>
                <form action="{{ route('servers.destroy', $server->id) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button class="delete" type="submit">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>

    <a class="ssh" href="{{ route('ssh-keys.index') }}">
        🔑 Manage SSH Keys
    </a>

</div>

</body>
</html>