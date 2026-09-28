<!DOCTYPE html>
<html>
<head>
    <title>SSH Key Manager</title>
</head>
<body>

<h1>SSH Key Manager</h1>

<a href="{{ route('ssh-keys.create') }}">Add SSH Key</a>

<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>Name</th>
        <th>Public Key</th>
        <th>Action</th>
    </tr>

    @foreach ($sshKeys as $sshKey)
        <tr>
            <td>{{ $sshKey->name }}</td>
            <td>{{ $sshKey->public_key }}</td>
            <td>
                <form action="{{ route('ssh-keys.destroy', $sshKey) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

<br>

<a href="{{ route('servers.index') }}">Manage Servers</a>

</body>
</html>