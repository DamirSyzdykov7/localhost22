<!DOCTYPE html>
<html>
<head>
    <title>Форма входа</title>
</head>
<body>
    <h2>Вход</h2>
    <form method="POST" action="/login">
        @csrf
        <label for="login">Логин:</label>
        <input type="text" name="login" required><br>
        
        <label for="password">Пароль:</label>
        <input type="password" name="password" required><br>
        
        <button type="submit">Войти</button>
        <h2 class="mt-3">если нету логина ,то зарегестрируйтесь</h2>

        <button type="submit" class="mt-3" onclick="redirectToRegister()">Зарегистрироваться</button>

        <script>
        function redirectToRegister() {
            window.location.href = "/register";
        }
    </script>
    </form>
</body>
</html>
