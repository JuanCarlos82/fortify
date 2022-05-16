<form action="{{ route('login')}}" method="POST">
    <label>
        <input type="email" name="email" placeholder="Email...">
    </label>
    <label>
        <input type="password" name="password" placeholder="Password...">
    </label>
    <input type="submit" value="Login">
</form>