@extends('layouts.sidebarUser')

@section('main')
<div class="container mt-5">
    <h2 class="mb-4">Ajouter Inscription</h2>
    <form method="POST" action="{{ route('inscription.create') }}" enctype="multipart/form-data" id="inscriptionForm">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="nom" class="form-label">Nom de l'enfant</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
                <div class="form-text text-danger" id="nomError"></div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="prenom" class="form-label">Prénom de l'enfant</label>
                <input type="text" class="form-control" id="prenom" name="prenom" required>
                <div class="form-text text-danger" id="prenomError"></div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="date_naissance" class="form-label">Date de Naissance</label>
                <input type="date" class="form-control" id="date_naissance" name="date_naissance" required>
                <div class="form-text text-danger" id="dateNaissanceError"></div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="groupe_sanguin" class="form-label">Groupe Sanguin</label>
                <input type="text" class="form-control" id="groupe_sanguin" name="groupe_sanguin" required>
                <div class="form-text text-danger" id="groupeSanguinError"></div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="adresse_domicile" class="form-label">Adresse Domicile</label>
                <input type="text" class="form-control" id="adresse_domicile" name="adresse_domicile" required>
                <div class="form-text text-danger" id="adresseDomicileError"></div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="region_souhaitee" class="form-label">Région Souhaitée</label>
                <select class="form-control" id="region_souhaitee" name="region_souhaitee" required>
                    <option value="">Sélectionnez une région</option>
                    @foreach($regions as $region)
                        <option value="{{ $region->id }}">{{ $region->nom }}</option>
                    @endforeach
                </select>
                <div class="form-text text-danger" id="regionSouhaiteeError"></div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="jardin_souhaite" class="form-label">Jardin Souhaité</label>
                <select class="form-control" id="jardin_souhaite" name="jardin_souhaite" required>
                    <option value="">Sélectionnez un jardin</option>
                    @foreach($jardins as $jardin)
                        <option value="{{ $jardin->id }}" data-region="{{ $jardin->region_id }}">{{ $jardin->nom }}</option>
                    @endforeach
                </select>
                <div class="form-text text-danger" id="jardinSouhaiteError"></div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="extrait_naissance" class="form-label">Extrait de Naissance</label>
                <input type="file" class="form-control" id="extrait_naissance" name="extrait_naissance">
                <div class="form-text text-danger" id="extraitNaissanceError"></div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="certificat_vaccination" class="form-label">Certificat de Vaccination</label>
                <input type="file" class="form-control" id="certificat_vaccination" name="certificat_vaccination">
                <div class="form-text text-danger" id="certificatVaccinationError"></div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="certificat_medical" class="form-label">Certificat Médical</label>
                <input type="file" class="form-control" id="certificat_medical" name="certificat_medical">
                <div class="form-text text-danger" id="certificatMedicalError"></div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="photo_identite" class="form-label">Photo d'Identité</label>
                <input type="file" class="form-control" id="photo_identite" name="photo_identite">
                <div class="form-text text-danger" id="photoIdentiteError"></div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="certificat_justice" class="form-label">Certificat de Justice</label>
                <input type="file" class="form-control" id="certificat_justice" name="certificat_justice">
                <div class="form-text text-danger" id="certificatJusticeError"></div>
            </div>
        </div>

        <h3 class="mb-4">Questionnaire</h3>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="age_marche" class="form-label">Âge de la marche</label>
                <input type="number" class="form-control" id="age_marche" name="age_marche">
                <div class="form-text text-danger" id="ageMarcheError"></div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="age_propre_jour" class="form-label">Âge de propreté de jour</label>
                <input type="number" class="form-control" id="age_propre_jour" name="age_propre_jour">
                <div class="form-text text-danger" id="agePropreJourError"></div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="age_propre_nuit" class="form-label">Âge de propreté de nuit</label>
                <input type="number" class="form-control" id="age_propre_nuit" name="age_propre_nuit">
                <div class="form-text text-danger" id="agePropreNuitError"></div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="age_parle" class="form-label">Âge où l'enfant a commencé à parler</label>
                <input type="number" class="form-control" id="age_parle" name="age_parle">
                <div class="form-text text-danger" id="ageParleError"></div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="premier_mot" class="form-label">Premier mot</label>
                <input type="text" class="form-control" id="premier_mot" name="premier_mot">
                <div class="form-text text-danger" id="premierMotError"></div>
            </div>
            <div class="col-md-12 mb-3">
                <label for="conditions" class="form-label">Conditions particulières</label>
                <textarea class="form-control" id="conditions" name="conditions"></textarea>
                <div class="form-text text-danger" id="conditionsError"></div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="collectivite_avant" class="form-label">A-t-il été en collectivité avant ?</label>
                <select class="form-control" id="collectivite_avant" name="collectivite_avant">
                    <option value="1">Oui</option>
                    <option value="0">Non</option>
                </select>
                <div class="form-text text-danger" id="collectiviteAvantError"></div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="maladies" class="form-label">Maladies</label>
                <textarea class="form-control" id="maladies" name="maladies"></textarea>
                <div class="form-text text-danger" id="maladiesError"></div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="operations" class="form-label">Opérations</label>
                <textarea class="form-control" id="operations" name="operations"></textarea>
                <div class="form-text text-danger" id="operationsError"></div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="nombre_freres_soeurs" class="form-label">Nombre de frères et soeurs</label>
                <input type="number" class="form-control" id="nombre_freres_soeurs" name="nombre_freres_soeurs">
                <div class="form-text text-danger" id="nombreFreresSoeursError"></div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="condition_habitation" class="form-label">Condition d'habitation</label>
                <input type="text" class="form-control" id="condition_habitation" name="condition_habitation">
                <div class="form-text text-danger" id="conditionHabitationError"></div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="chambre_individuelle" class="form-label">A-t-il une chambre individuelle ?</label>
                <select class="form-control" id="chambre_individuelle" name="chambre_individuelle">
                    <option value="1">Oui</option>
                    <option value="0">Non</option>
                </select>
                <div class="form-text text-danger" id="chambreIndividuelleError"></div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="partage_chambre_avec" class="form-label">Partage-t-il la chambre avec ?</label>
                <input type="text" class="form-control" id="partage_chambre_avec" name="partage_chambre_avec">
                <div class="form-text text-danger" id="partageChambreAvecError"></div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="mange_bien" class="form-label">Mange-t-il bien ?</label>
                <select class="form-control" id="mange_bien" name="mange_bien">
                    <option value="1">Oui</option>
                    <option value="0">Non</option>
                </select>
                <div class="form-text text-danger" id="mangeBienError"></div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="dort_bien" class="form-label">Dort-il bien ?</label>
                <select class="form-control" id="dort_bien" name="dort_bien">
                    <option value="1">Oui</option>
                    <option value="0">Non</option>
                </select>
                <div class="form-text text-danger" id="dortBienError"></div>
            </div>
            <div class="col-md-12 mb-3">
                <label for="activites_maison" class="form-label">Activités à la maison</label>
                <textarea class="form-control" id="activites_maison" name="activites_maison"></textarea>
                <div class="form-text text-danger" id="activitesMaisonError"></div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="volontaire" class="form-label">Est-il volontaire ?</label>
                <select class="form-control" id="volontaire" name="volontaire">
                    <option value="1">Oui</option>
                    <option value="0">Non</option>
                </select>
                <div class="form-text text-danger" id="volontaireError"></div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="turbulent" class="form-label">Est-il turbulent ?</label>
                <select class="form-control" id="turbulent" name="turbulent">
                    <option value="1">Oui</option>
                    <option value="0">Non</option>
                </select>
                <div class="form-text text-danger" id="turbulentError"></div>
            </div>
            <div class="col-md-12 mb-3">
                <label for="observations" class="form-label">Observations</label>
                <textarea class="form-control" id="observations" name="observations"></textarea>
                <div class="form-text text-danger" id="observationsError"></div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Soumettre</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#region_souhaitee').on('change', function() {
            var region_id = $(this).val();
            if(region_id) {
                $.ajax({
                    url: '/jardins/' + region_id,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        $('#jardin_souhaite').empty();
                        $('#jardin_souhaite').append('<option value="">Sélectionnez un jardin</option>');
                        $.each(data, function(key, value) {
                            $('#jardin_souhaite').append('<option value="' + value.id + '">' + value.nom + '</option>');
                        });
                    }
                });
            } else {
                $('#jardin_souhaite').empty();
                $('#jardin_souhaite').append('<option value="">Sélectionnez un jardin</option>');
            }
        });

        $('#date_naissance').on('blur', function() {
            const dateNaissance = this.value;
            const age = new Date().getFullYear() - new Date(dateNaissance).getFullYear();
            const typeParent = '{{ Auth::user()->parent->type }}';
            const dateNaissanceError = document.getElementById('dateNaissanceError');

            if ((typeParent !== 'mère' && (age < 3 || age > 5)) || (typeParent === 'mère' && (age < 2 || age > 5))) {
                dateNaissanceError.textContent = "L'âge de l'enfant doit correspondre aux critères pour le type de parent.";
            } else {
                dateNaissanceError.textContent = '';
            }
        });

        $('#inscriptionForm').on('input', function(event) {
            const fields = [
                { id: 'nom', regex: /^[a-zA-Z]+$/, errorMessage: 'Le nom ne doit contenir que des lettres.' },
                { id: 'prenom', regex: /^[a-zA-Z]+$/, errorMessage: 'Le prénom ne doit contenir que des lettres.' },
                { id: 'groupe_sanguin', regex: /^[A-ORH+-]+$/, errorMessage: 'Le groupe sanguin n\'est pas valide.' },
                { id: 'adresse_domicile', regex: /^[\w\s,.'-]+$/, errorMessage: 'L\'adresse domicile n\'est pas valide.' },
                { id: 'extrait_naissance', regex: /\.(pdf|jpg|png)$/i, errorMessage: 'Le fichier doit être au format PDF, JPG ou PNG.' },
                { id: 'certificat_vaccination', regex: /\.(pdf|jpg|png)$/i, errorMessage: 'Le fichier doit être au format PDF, JPG ou PNG.' },
                { id: 'certificat_medical', regex: /\.(pdf|jpg|png)$/i, errorMessage: 'Le fichier doit être au format PDF, JPG ou PNG.' },
                { id: 'photo_identite', regex: /\.(jpg|jpeg|png)$/i, errorMessage: 'Le fichier doit être au format JPG ou PNG.' },
                { id: 'certificat_justice', regex: /\.(pdf|jpg|png)$/i, errorMessage: 'Le fichier doit être au format PDF, JPG ou PNG.' },
                { id: 'premier_mot', regex: /^[a-zA-Z]+$/, errorMessage: 'Le premier mot ne doit contenir que des lettres.' }
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

        $('#inscriptionForm').on('submit', function(event) {
            let valid = true;

            const fields = [
                { id: 'nom', regex: /^[a-zA-Z]+$/, errorMessage: 'Le nom ne doit contenir que des lettres.' },
                { id: 'prenom', regex: /^[a-zA-Z]+$/, errorMessage: 'Le prénom ne doit contenir que des lettres.' },
                { id: 'groupe_sanguin', regex: /^[A-ORH+-]+$/, errorMessage: 'Le groupe sanguin n\'est pas valide.' },
                { id: 'adresse_domicile', regex: /^[\w\s,.'-]+$/, errorMessage: 'L\'adresse domicile n\'est pas valide.' },
                { id: 'extrait_naissance', regex: /\.(pdf|jpg|png)$/i, errorMessage: 'Le fichier doit être au format PDF, JPG ou PNG.' },
                { id: 'certificat_vaccination', regex: /\.(pdf|jpg|png)$/i, errorMessage: 'Le fichier doit être au format PDF, JPG ou PNG.' },
                { id: 'certificat_medical', regex: /\.(pdf|jpg|png)$/i, errorMessage: 'Le fichier doit être au format PDF, JPG ou PNG.' },
                { id: 'photo_identite', regex: /\.(jpg|jpeg|png)$/i, errorMessage: 'Le fichier doit être au format JPG ou PNG.' },
                { id: 'certificat_justice', regex: /\.(pdf|jpg|png)$/i, errorMessage: 'Le fichier doit être au format PDF, JPG ou PNG.' },
                { id: 'premier_mot', regex: /^[a-zA-Z]+$/, errorMessage: 'Le premier mot ne doit contenir que des lettres.' }
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

            const dateNaissance = $('#date_naissance').val();
            const age = new Date().getFullYear() - new Date(dateNaissance).getFullYear();
            const typeParent = '{{ Auth::user()->parent->type }}';

            if ((typeParent !== 'mère' && (age < 3 || age > 5)) || (typeParent === 'mère' && (age < 2 || age > 5))) {
                $('#dateNaissanceError').text("L'âge de l'enfant doit correspondre aux critères pour le type de parent.");
                valid = false;
            } else {
                $('#dateNaissanceError').text('');
            }

            if (!valid) {
                event.preventDefault();
            }
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
