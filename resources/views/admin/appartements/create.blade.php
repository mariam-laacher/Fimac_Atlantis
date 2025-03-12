@section('title', 'Fimac Atlantis | Créer un appartement')
@include('admin.layouts.sidebar')

<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row"> 
                <div class="col-xl-4 col-sm-7 box-col-3">
                    <h3>Créer un appartement</h3>
                </div>
                <div class="col-5 d-none d-xl-block"></div>
                <div class="col-xl-3 col-sm-5 box-col-4">
                    <ol class="breadcrumb"> 
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard') }}">
                                <svg class="stroke-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z" fill="none" stroke="black" stroke-width="2"/>
                                </svg>
                            </a>
                        </li>
                        <li class="breadcrumb-item">Créer un appartement</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Container-fluid starts-->
    <div class="card-body">
        <div class="form theme-form">
            <form action="{{ route('appartements.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label>Nom de l'appartement</label>
                            <input class="form-control" type="text" name="designation" placeholder="Nom de l'appartement *" value="{{ old('designation') }}" required>
                            @error('designation')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label>Niveau</label>
                            <select class="form-select" name="niveau" required>
                                <option value="" disabled selected>Sélectionner le niveau</option>
                                <option value="rdc" {{ old('niveau') == 'rdc' ? 'selected' : '' }}>Rez-de-Chaussée</option>
                                <option value="mezzanine" {{ old('niveau') == 'mezzanine' ? 'selected' : '' }}>Mezzanine</option>
                                <option value="1er_etage" {{ old('niveau') == '1er_etage' ? 'selected' : '' }}>1er étage</option>
                                <option value="2eme_etage" {{ old('niveau') == '2eme_etage' ? 'selected' : '' }}>2ème étage</option>
                                <option value="3eme_etage" {{ old('niveau') == '3eme_etage' ? 'selected' : '' }}>3ème étage</option>
                            </select>
                            @error('niveau')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>                    
                </div>
                
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label>Surface (m²)</label>
                            <input class="form-control" type="number" step="0.01" name="surface" placeholder="Surface de l'appartement" value="{{ old('surface') }}" required>
                            @error('surface')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label>Salon</label>
                            <select class="form-select" name="salon" required>
                                <option value="" disabled selected>Sélectionner</option>
                                <option value="0" {{ old('salon') == '0' ? 'selected' : '' }}>Non</option>
                                <option value="1" {{ old('salon') == '1' ? 'selected' : '' }}>Oui</option>
                            </select>                            
                            @error('salon')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label>Hall</label>
                            <select class="form-select" name="hall" required>
                                <option value="" disabled selected>Sélectionner</option>
                                <option value="0" {{ old('hall') == '0' ? 'selected' : '' }}>Non</option>
                                <option value="1" {{ old('hall') == '1' ? 'selected' : '' }}>Oui</option>
                            </select>                            
                            @error('hall')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label>Cuisine</label>
                            <select class="form-select" name="cuisine" required>
                                <option value="" disabled selected>Sélectionner</option>
                                <option value="0" {{ old('cuisine') == '0' ? 'selected' : '' }}>Non</option>
                                <option value="1" {{ old('cuisine') == '1' ? 'selected' : '' }}>Oui</option>
                            </select>                            
                            @error('cuisine')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label>Chambre 1</label>
                            <select class="form-select" name="chambre1" required>
                                <option value="" disabled selected>Sélectionner</option>
                                <option value="0" {{ old('chambre1') == '0' ? 'selected' : '' }}>Non</option>
                                <option value="1" {{ old('chambre1') == '1' ? 'selected' : '' }}>Oui</option>
                            </select>                            
                            @error('chambre1')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label>Chambre 2</label>
                            <select class="form-select" name="chambre2" required>
                                <option value="" disabled selected>Sélectionner</option>
                                <option value="0" {{ old('chambre2') == '0' ? 'selected' : '' }}>Non</option>
                                <option value="1" {{ old('chambre2') == '1' ? 'selected' : '' }}>Oui</option>
                            </select>                            
                            @error('chambre2')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label>SDB (Salle de bain)</label>
                            <select class="form-select" name="sdb" required>
                                <option value="" disabled selected>Sélectionner</option>
                                <option value="0" {{ old('sdb') == '0' ? 'selected' : '' }}>Non</option>
                                <option value="1" {{ old('sdb') == '1' ? 'selected' : '' }}>Oui</option>
                            </select>                            
                            @error('sdb')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label>WC</label>
                            <select class="form-select" name="wc" required>
                                <option value="" disabled selected>Sélectionner</option>
                                <option value="0" {{ old('wc') == '0' ? 'selected' : '' }}>Non</option>
                                <option value="1" {{ old('wc') == '1' ? 'selected' : '' }}>Oui</option>
                            </select>                            
                            @error('wc')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label>Terrasse</label>
                            <select class="form-select" name="terrasse" required>
                                <option value="" disabled selected>Sélectionner</option>
                                <option value="0" {{ old('terrasse') == '0' ? 'selected' : '' }}>Non</option>
                                <option value="1" {{ old('terrasse') == '1' ? 'selected' : '' }}>Oui</option>
                            </select> 
                            @error('terrasse')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label>Statut</label>
                            <select class="form-select" name="status" required>
                                <option value="" disabled selected>Sélectionner</option>
                                <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Actif</option>
                                <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactif</option>
                            </select> 
                            @error('status')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label>Sous-catégorie</label>
                            <select class="form-select" name="sous_categorie" required>
                                <option value="" disabled selected>Sélectionner</option>
                                @foreach($subcategories as $subcategory)
                                    <option value="{{ $subcategory->id }}" {{ old('sous_categorie') == $subcategory->id ? 'selected' : '' }}>
                                        {{ $subcategory->name }} 
                                    </option>
                                @endforeach
                            </select> 
                            @error('sous_categorie')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- Champ pour l'image -->
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label>Importer des images de l'appartement</label>
                            <input type="file" class="form-control" name="images[]" id="imageInput" accept=".jpg, .jpeg, .png" onchange="previewImages(event)" multiple>
                            <div id="imagePreviewContainer" style="margin-top: 10px; display: none;">
                                <div id="imagePreviews" style="display: flex; flex-wrap: wrap;"></div>
                                <button type="button" class="btn btn-danger btn-sm mt-2" onclick="removeImages()">Supprimer les images</button>
                            </div>
                            @error('images')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                
                
                <div class="row">
                    <div class="col">
                        <div class="text-end">
                            <button type="submit" class="btn btn-success me-3">Ajouter l'appartement</button>
                            <a class="btn btn-danger" href="{{ route('appartements.index') }}">Annuler</a>
                        </div>
                    </div>
                </div>
                <br>
            </form>
        </div>
    </div>
</div>

@include('admin.layouts.footer')

<script>
    function previewImage(event) {
        const fileInput = event.target;
        const imagePreviewContainer = document.getElementById('imagePreviewContainer');
        const imagePreview = document.getElementById('imagePreview');

        if (fileInput.files && fileInput.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                imagePreview.src = e.target.result;
                imagePreviewContainer.style.display = 'block';
            };

            reader.readAsDataURL(fileInput.files[0]);
        }
    }

    function removeImage() {
        const fileInput = document.getElementById('imageInput');
        const imagePreviewContainer = document.getElementById('imagePreviewContainer');
        const imagePreview = document.getElementById('imagePreview');

        fileInput.value = '';
        imagePreview.src = '#';
        imagePreviewContainer.style.display = 'none';
    }
</script>
