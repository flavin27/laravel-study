<body>
    <div class="login-container">
        <h2>Login</h2>

        @if (isset($debugInfo))
            <div style="color: red;">
                Debug Information:
                <pre>{{ json_encode($debugInfo, JSON_PRETTY_PRINT) }}</pre>
            </div>
        @endif

        <form class="login-form" action="/login" method="post">
            @csrf
            <div class="form-group">
                <label for="username">Usuário:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit">Entrar</button>
            </div>
        </form>
    </div>
</body>
