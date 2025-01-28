@section('title', 'Fimac Atlantis | Modifier la catégorie ' . $category->name)
@include('admin.layouts.sidebar') 
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row"> 
                <div class="col-xl-4 col-sm-7 box-col-3">
                    <h3>Modifier une catégorie</h3>
                </div>
                <div class="col-5 d-none d-xl-block"></div>
                <div class="col-xl-3 col-sm-5 box-col-4">
                    <ol class="breadcrumb"> 
                        <li class="breadcrumb-item">
                            <a href="{{route('dashboard')}}">
                                <svg class="stroke-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z" fill="none" stroke="black" stroke-width="2"/>
                                </svg>
                            </a>
                        </li>
                        <li class="breadcrumb-item">Modifier une catégorie</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Container-fluid starts-->
    <div class="card-body">
        <div class="form theme-form">
            <form action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label>Nom de la catégorie</label>
                            <input class="form-control" type="text" name="name" placeholder="Nom de la catégorie *" value="{{ old('name', $category->name) }}" required>
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label>Statut</label>
                            <select class="form-select" name="status" required>
                                <option value="active" {{ old('status', $category->status) == 'active' ? 'selected' : '' }}>Actif</option>
                                <option value="inactive" {{ old('status', $category->status) == 'inactive' ? 'selected' : '' }}>Inactif</option>
                            </select>                                                
                            @error('status')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label>Description</label>
                            <textarea class="form-control" name="description" rows="3" placeholder="Entrez les détails de la catégorie">{{ old('description', $category->description) }}</textarea>
                            @error('description')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label>Importer une image de la catégorie</label>
                            <input type="file" class="form-control" name="image" id="imageInput" accept=".jpg, .jpeg, .png" onchange="previewImage(event)">
                            <div id="imagePreviewContainer" style="margin-top: 10px; {{ $category->image ? '' : 'display: none;' }}">
                                <img id="imagePreview" src="{{ $category->image ? asset('storage/' . $category->image) : '#' }}" alt="Aperçu de l'image" style="max-height: 200px; border: 1px solid #ddd; padding: 5px; display: block;">
                                <button type="button" class="btn btn-danger btn-sm mt-2" onclick="removeImage()">Supprimer l'image</button>
                            </div>
                            @error('image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>                
                
                <div class="row">
                    <div class="col">
                        <div class="text-end">
                            <button type="submit" class="btn btn-success me-3">Mettre à jour la catégorie</button>
                            <a class="btn btn-danger" href="{{ route('categories.index') }}">Annuler</a>
                        </div>
                    </div>
                </div>
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

        // Vérifie si un fichier est sélectionné
        if (fileInput.files && fileInput.files[0]) {
            const reader = new FileReader();

            // Affiche l'image après son chargement
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

        // Réinitialise l'input file
        fileInput.value = '';
        imagePreview.src = '#';
        imagePreviewContainer.style.display = 'none';
    }
</script>
