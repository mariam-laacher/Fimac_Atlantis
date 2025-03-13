@section('title', 'Fimac Atlantis | Modifier un appartement')
@include('admin.layouts.sidebar')

<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row"> 
                <div class="col-xl-4 col-sm-7 box-col-3">
                    <h3>Modifier un appartement</h3>
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
                        <li class="breadcrumb-item">Modifier un appartement</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Container-fluid starts-->
    <div class="card-body">
        <div class="form theme-form">
            <form action="{{ route('appartements.update', $appartement->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Nom de l'appartement -->
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="designation">Nom de l'appartement</label>
                            <input class="form-control" type="text" name="designation" id="designation" placeholder="Nom de l'appartement *" value="{{ old('designation', $appartement->designation) }}" required>
                            @error('designation')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Niveau -->
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="niveau">Niveau</label>
                            <select class="form-select" name="niveau" id="niveau" required>
                                <option value="" disabled {{ old('niveau', $appartement->niveau) ? '' : 'selected' }}>Sélectionner le niveau</option>
                                <option value="rdc" {{ old('niveau', $appartement->niveau) == 'rdc' ? 'selected' : '' }}>Rez-de-Chaussée</option>
                                <option value="mezzanine" {{ old('niveau', $appartement->niveau) == 'mezzanine' ? 'selected' : '' }}>Mezzanine</option>
                                <option value="1er_etage" {{ old('niveau', $appartement->niveau) == '1er_etage' ? 'selected' : '' }}>1er étage</option>
                                <option value="2eme_etage" {{ old('niveau', $appartement->niveau) == '2eme_etage' ? 'selected' : '' }}>2ème étage</option>
                                <option value="3eme_etage" {{ old('niveau', $appartement->niveau) == '3eme_etage' ? 'selected' : '' }}>3ème étage</option>
                            </select>
                            @error('niveau')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>                    
                </div>

                <!-- Surface et Salon -->
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="surface">Surface (m²)</label>
                            <input class="form-control" type="number" step="0.01" name="surface" id="surface" placeholder="Surface de l'appartement" value="{{ old('surface', $appartement->surface) }}" required>
                            @error('surface')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="salon">Salon</label>
                            <select class="form-select" name="salon" id="salon" required>
                                <option value="0" {{ old('salon', $appartement->salon) == '0' ? 'selected' : '' }}>Non</option>
                                <option value="1" {{ old('salon', $appartement->salon) == '1' ? 'selected' : '' }}>Oui</option>
                            </select>                            
                            @error('salon')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Hall et Cuisine -->
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="hall">Hall</label>
                            <select class="form-select" name="hall" id="hall" required>
                                <option value="0" {{ old('hall', $appartement->hall) == '0' ? 'selected' : '' }}>Non</option>
                                <option value="1" {{ old('hall', $appartement->hall) == '1' ? 'selected' : '' }}>Oui</option>
                            </select>                            
                            @error('hall')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="cuisine">Cuisine</label>
                            <select class="form-select" name="cuisine" id="cuisine" required>
                                <option value="0" {{ old('cuisine', $appartement->cuisine) == '0' ? 'selected' : '' }}>Non</option>
                                <option value="1" {{ old('cuisine', $appartement->cuisine) == '1' ? 'selected' : '' }}>Oui</option>
                            </select>                            
                            @error('cuisine')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Chambres 1 et 2 -->
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="chambre_1">Chambre 1</label>
                            <select class="form-select" name="chambre_1" id="chambre_1" required>
                                <option value="0" {{ old('chambre_1', $appartement->chambre_1) == '0' ? 'selected' : '' }}>Non</option>
                                <option value="1" {{ old('chambre_1', $appartement->chambre_1) == '1' ? 'selected' : '' }}>Oui</option>
                            </select>                            
                            @error('chambre_1')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="chambre_2">Chambre 2</label>
                            <select class="form-select" name="chambre_2" id="chambre_2" required>
                                <option value="0" {{ old('chambre_2', $appartement->chambre_2) == '0' ? 'selected' : '' }}>Non</option>
                                <option value="1" {{ old('chambre_2', $appartement->chambre_2) == '1' ? 'selected' : '' }}>Oui</option>
                            </select>                            
                            @error('chambre_2')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- SDB et WC -->
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="sdb">SDB (Salle de bain)</label>
                            <select class="form-select" name="sdb" id="sdb" required>
                                <option value="" disabled selected>Sélectionner</option>
                                <option value="0" {{ old('sdb',$appartement->sdb) == '0' ? 'selected' : '' }}>Non</option>
                                <option value="1" {{ old('sdb',$appartement->sdb) == '1' ? 'selected' : '' }}>Oui</option>
                            </select>                            
                            @error('sdb')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="wc">WC</label>
                            <select class="form-select" name="wc" id="wc" required>
                                <option value="" disabled selected>Sélectionner</option>
                                <option value="0" {{ old('wc',$appartement->wc) == '0' ? 'selected' : '' }}>Non</option>
                                <option value="1" {{ old('wc',$appartement->wc) == '1' ? 'selected' : '' }}>Oui</option>
                            </select>                            
                            @error('wc')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Terrasse et Statut -->
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="terrasse">Terrasse</label>
                            <select class="form-select" name="terrasse" id="terrasse" required>
                                <option value="" disabled selected>Sélectionner</option>
                                <option value="0" {{ old('terrasse',$appartement->terrasse) == '0' ? 'selected' : '' }}>Non</option>
                                <option value="1" {{ old('terrasse',$appartement->terrasse) == '1' ? 'selected' : '' }}>Oui</option>
                            </select> 
                            @error('terrasse')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="status">Statut</label>
                            <select class="form-select" name="status" id="status" required>
                                <option value="" disabled selected>Sélectionner</option>
                                <option value="active" {{ old('status',$appartement->status) == 'active' ? 'selected' : '' }}>Actif</option>
                                <option value="inactive" {{ old('status',$appartement->status) == 'inactive' ? 'selected' : '' }}>Inactif</option>
                            </select> 
                            @error('status')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Sous-catégorie -->
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="sub_category_id">Sous-catégorie</label>
                            <select class="form-select" name="sub_category_id" id="sub_category_id" required>
                                <option value="" disabled selected>Sélectionner</option>
                                @foreach($subcategories as $subcategory)
                                    <option value="{{ $subcategory->id }}" {{ old('sub_category_id', $appartement->sub_category_id) == $subcategory->id ? 'selected' : '' }}>
                                        {{ $subcategory->name }} 
                                    </option>
                                @endforeach
                            </select> 
                            @error('sub_category_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>                    
                </div>

                <!-- Image d'appartement -->
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="imageInput">Importer des images de l'appartement</label>
                            <input type="file" class="form-control" name="images[]" id="imageInput" accept=".jpg, .jpeg, .png" onchange="previewImages(event)" multiple>
                            <div id="imagePreviewContainer" style="margin-top: 10px; {{ $appartement->images->isEmpty() ? 'display: none;' : 'display: block;' }}">
                                <div id="imagePreviews" style="display: flex; flex-wrap: wrap;">
                                    @foreach($appartement->images as $image)
                                        <img src="{{ asset($image->image_path) }}" alt="Image" style="width: 100px; height: 100px; object-fit: cover; margin: 5px; border-radius: 5px;">
                                    @endforeach
                                </div>
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
                            <button type="submit" class="btn btn-success me-3">Mettre à jour l'appartement</button>
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
    function previewImages(event) {
        const fileInput = event.target;
        const imagePreviewsContainer = document.getElementById('imagePreviews');
        const previewContainer = document.getElementById('imagePreviewContainer');
        
        imagePreviewsContainer.innerHTML = '';

        if (fileInput.files.length > 0) {
            previewContainer.style.display = 'block';

            Array.from(fileInput.files).forEach(file => {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const imgElement = document.createElement('img');
                    imgElement.src = e.target.result;
                    imgElement.style.width = '100px';
                    imgElement.style.height = '100px';
                    imgElement.style.objectFit = 'cover';
                    imgElement.style.margin = '5px';
                    imgElement.style.borderRadius = '5px';
                    
                    imagePreviewsContainer.appendChild(imgElement);
                };
                reader.readAsDataURL(file);
            });
        } else {
            previewContainer.style.display = 'none';
        }
    }

    function removeImages() {
        document.getElementById('imageInput').value = '';
        document.getElementById('imagePreviewContainer').style.display = 'none';
        document.getElementById('imagePreviews').innerHTML = '';
    }
</script>
