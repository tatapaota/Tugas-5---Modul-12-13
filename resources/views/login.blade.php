<form method="POST" action="/auth">

    @csrf

    Email
    <input type="text" name="em">

    <br><br>

    Password
    <input type="password" name="pwd">

    <br><br>

    <button>Login</button>

</form>

{{ session('msg') }}