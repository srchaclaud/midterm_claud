<!DOCTYPE html>
<html>
<head>
    <title>Add SSH Key</title>
</head>
<body>

    <h1>Add SSH Key</h1>

    <form action="{{ route('ssh-keys.store') }}" method="POST">
        @csrf

        <label>Name</label><br>
        <input type="text" name="name" required>
        <br><br>

        <label>Public Key</label><br>
        <textarea name="public_key" required></textarea>
        <br><br>

        <label>Private Key</label><br>
        <textarea name="private_key"></textarea>
        <br><br>

        <label>Passphrase</label><br>
        <input type="text" name="passphrase">
        <br><br>

        <button type="submit">Save SSH Key</button>
    </form>

    <br>

    <a href="{{ route('ssh-keys.index') }}">Back</a>

</body>
</html>