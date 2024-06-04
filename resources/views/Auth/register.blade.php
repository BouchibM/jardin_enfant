<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Sonatrach</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #333; /* Arrière-plan noir pour un contraste élevé */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #fff; /* Texte en blanc pour le contraste */
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
            max-width: 800px;
            padding: 15px;
            margin: auto;
            background-color: #444; /* Fond gris foncé pour adoucir le contraste */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.3); /* Ombre plus marquée pour un effet 3D prononcé */
        }
        .form-control {
            height: 48px;
            font-size: 16px;
        }
        .form-text {
            color: #ff8c00;
        }
        .btn-primary {
            background-color: #ff8c00; /* Orange vif */
            border: none;
            height: 48px;
        }
        .btn-primary:hover {
            background-color: #e67e00; /* Orange plus foncé au survol */
        }
        .card-header {
            background-color: #ff8c00; /* En-tête orange */
            color: #ffffff;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            border-bottom: 0;
        }
        .card-footer {
            background-color: transparent; /* Pied de page transparent */
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
            Inscription
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('register') }}" id="registrationForm">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrez votre nom" required>
                        <div class="form-text" id="nomError"></div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="prenom" class="form-label">Prénom</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Entrez votre prénom" required>
                        <div class="form-text" id="prenomError"></div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="profession" class="form-label">Profession</label>
                        <input type="text" class="form-control" id="profession" name="profession" placeholder="Entrez votre profession" required>
                        <div class="form-text" id="professionError"></div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="nin" class="form-label">NIN</label>
                        <input type="text" class="form-control" id="nin" name="nin" placeholder="Entrez votre numéro d'identification national" required>
                        <div class="form-text" id="ninError"></div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="entreprise" class="form-label">Entreprise</label>
                        <input type="text" class="form-control" id="entreprise" name="entreprise" placeholder="Entrez votre entreprise" required>
                        <div class="form-text" id="entrepriseError"></div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="direction" class="form-label">Direction</label>
                        <input type="text" class="form-control" id="direction" name="direction" placeholder="Entrez votre direction" required>
                        <div class="form-text" id="directionError"></div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="telephone_poste" class="form-label">Téléphone Poste</label>
                        <input type="text" class="form-control" id="telephone_poste" name="telephone_poste" placeholder="Entrez votre téléphone de poste" required>
                        <div class="form-text" id="telephonePosteError"></div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="telephone_domicile" class="form-label">Téléphone Domicile</label>
                        <input type="text" class="form-control" id="telephone_domicile" name="telephone_domicile" placeholder="Entrez votre téléphone de domicile" required>
                        <div class="form-text" id="telephoneDomicileError"></div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="telephone_portable" class="form-label">Téléphone Portable</label>
                        <input type="text" class="form-control" id="telephone_portable" name="telephone_portable" placeholder="Entrez votre téléphone portable" required>
                        <div class="form-text" id="telephonePortableError"></div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="situation_familiale" class="form-label">Situation Familiale</label>
                        <input type="text" class="form-control" id="situation_familiale" name="situation_familiale" placeholder="Entrez votre situation familiale" required>
                        <div class="form-text" id="situationFamilialeError"></div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="nombre_enfants" class="form-label">Nombre d'enfants</label>
                        <input type="number" class="form-control" id="nombre_enfants" name="nombre_enfants" placeholder="Entrez le nombre d'enfants" required>
                        <div class="form-text" id="nombreEnfantsError"></div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="type" class="form-label">Type</label>
                        <select class="form-control" id="type" name="type" required>
                            <option value="">Sélectionnez votre type</option>
                            <option value="père">Père</option>
                            <option value="mère">Mère</option>
                            <option value="tuteur">Tuteur</option>
                            <option value="tutrice">Tutrice</option>
                        </select>
                        <div class="form-text" id="typeError"></div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label">Adresse Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Entrez votre email" required>
                        <div class="form-text" id="emailError"></div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="password" class="form-label">Mot de Passe</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Entrez votre mot de passe" required>
                        <div class="form-text" id="passwordError"></div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="password_confirmation" class="form-label">Confirmer le Mot de Passe</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirmez votre mot de passe" required>
                        <div class="form-text" id="passwordConfirmationError"></div>
                    </div>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">S'inscrire</button>
                </div>
            </form>
        </div>
        <div class="card-footer text-muted">
            Déjà inscrit ? <a href="{{ route('login') }}">Connectez-vous ici</a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.getElementById('registrationForm').addEventListener('input', function (event) {
        const fields = [
            { id: 'nom', regex: /^[a-zA-Z]+$/, errorMessage: 'Le nom ne doit contenir que des lettres.' },
            { id: 'prenom', regex: /^[a-zA-Z]+$/, errorMessage: 'Le prénom ne doit contenir que des lettres.' },
            { id: 'nin', regex: /^\d{18}$/, errorMessage: 'Le NIN doit être composé de 18 chiffres.' },
            { id: 'telephone_portable', regex: /^(05|06|07)\d{8}$/, errorMessage: 'Le téléphone portable doit commencer par 05, 06 ou 07 et être composé de 10 chiffres.' },
            { id: 'telephone_poste', regex: /^\d+$/, errorMessage: 'Le téléphone de poste doit être composé uniquement de chiffres.' },
            { id: 'telephone_domicile', regex: /^\d+$/, errorMessage: 'Le téléphone de domicile doit être composé uniquement de chiffres.' },
            { id: 'email', regex: /^[^\s@]+@[^\s@]+\.[^\s@]+$/, errorMessage: 'Veuillez entrer une adresse email valide.' }
        ];

        fields.forEach(field => {
            const input = document.getElementById(field.id);
            const errorDiv = document.getElementById(`${field.id}Error`);

            if (!field.regex.test(input.value.trim())) {
                errorDiv.textContent = field.errorMessage;
            } else {
                errorDiv.textContent = '';
            }
        });
    });

    document.getElementById('registrationForm').addEventListener('submit', function (event) {
        let valid = true;

        const fields = [
            { id: 'nom', regex: /^[a-zA-Z]+$/, errorMessage: 'Le nom ne doit contenir que des lettres.' },
            { id: 'prenom', regex: /^[a-zA-Z]+$/, errorMessage: 'Le prénom ne doit contenir que des lettres.' },
            { id: 'nin', regex: /^\d{18}$/, errorMessage: 'Le NIN doit être composé de 18 chiffres.' },
            { id: 'telephone_portable', regex: /^(05|06|07)\d{8}$/, errorMessage: 'Le téléphone portable doit commencer par 05, 06 ou 07 et être composé de 10 chiffres.' },
            { id: 'telephone_poste', regex: /^\d+$/, errorMessage: 'Le téléphone de poste doit être composé uniquement de chiffres.' },
            { id: 'telephone_domicile', regex: /^\d+$/, errorMessage: 'Le téléphone de domicile doit être composé uniquement de chiffres.' },
            { id: 'email', regex: /^[^\s@]+@[^\s@]+\.[^\s@]+$/, errorMessage: 'Veuillez entrer une adresse email valide.' }
        ];

        fields.forEach(field => {
            const input = document.getElementById(field.id);
            const errorDiv = document.getElementById(`${field.id}Error`);

            if (!field.regex.test(input.value.trim())) {
                errorDiv.textContent = field.errorMessage;
                valid = false;
            } else {
                errorDiv.textContent = '';
            }
        });

        const password = document.getElementById('password').value;
        const passwordConfirmation = document.getElementById('password_confirmation').value;

        if (password !== passwordConfirmation) {
            document.getElementById('passwordConfirmationError').textContent = 'Les mots de passe ne correspondent pas.';
            valid = false;
        } else {
            document.getElementById('passwordConfirmationError').textContent = '';
        }

        if (!valid) {
            event.preventDefault();
        }
    });
</script>
</body>
</html>
