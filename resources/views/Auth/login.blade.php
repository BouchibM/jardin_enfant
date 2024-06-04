<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Sonatrach</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background-color: #333;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: #fff;
    }

    .login-container {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .login-form-card {
        width: 100%;
        max-width: 380px;
        padding: 15px;
        margin: auto;
        background-color: #444;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    }

    .form-control {
        height: 48px;
        font-size: 16px;
    }

    .btn-primary {
        background-color: #ff8c00;
        border: none;
        height: 48px;
    }

    .btn-primary:hover {
        background-color: #e67e00;
    }

    .card-header {
        background-color: #ff8c00;
        color: #ffffff;
        text-align: center;
        font-size: 24px;
        font-weight: bold;
        border-bottom: 0;
    }

    .card-footer {
        background-color: transparent;
        text-align: center;
        color: #fff;
    }

    .logo img {
        max-width: 100%;
        height: auto;
        margin-bottom: 5px;
    }
    </style>
</head>

<body>
    <div class="login-container">
        <!-- Logo de Sonatrach -->
        <div class="logo">
            <img src="{{ asset('assets/images/SH-LOGO.jpg') }}" alt="Sonatrach Logo">
        </div>
        <div class="card login-form-card">
            <div class="card-header">
                Connexion
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="POST" action="{{ route('Login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Adresse Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="Entrez votre email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Mot de Passe</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Entrez votre mot de passe" required>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Se connecter</button>
                    </div>
                </form>
            </div>
            <div class="card-footer text-muted">
                Pas encore inscrit ? <a href="{{ route('register.form') }}">Inscrivez-vous ici</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>