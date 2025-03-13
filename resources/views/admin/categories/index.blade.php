@section('title', 'Fimac Atlantis | Liste des Catégories')
@include('admin.layouts.sidebar') 

<div class="page-body">
  <div class="container-fluid">
    <div class="page-title"> 
      <div class="row">
        <div class="col-xl-4 col-sm-7 box-col-3">
          <h3>Liste des Catégories</h3>
        </div>
        <div class="col-5 d-none d-xl-block">

        </div>
        <div class="col-xl-3 col-sm-5 box-col-4">
          <ol class="breadcrumb"> 
            <li class="breadcrumb-item">
              <a href="{{ route('dashboard') }}">
                <svg class="stroke-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z" fill="none" stroke="black" stroke-width="2"/>
                </svg>
              </a>
            </li>
            <li class="breadcrumb-item">Catégories</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <!-- Container-fluid starts-->
  <div class="container-fluid default-dashboard"> 
    <div class="row">
      <div class="col-xl-12 col-md-12 box-col-12 proorder-md-4">
        <div class="card">
          <div class="card-header card-no-border">
            <div class="header-top">
              <h4>Catégories Disponibles</h4>
              <div class="icon-dropdown setting-menu">
                <a href="{{ route('categories.create') }}" class="btn">
                  <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" class="feather feather-plus">
                    <path d="M12 5v14m7-7H5"></path>
                  </svg>
                </a>
              </div>    
            </div>
          </div>
          <div class="card-body pt-0">
            <div class="table-responsive custom-scrollbar"> 
              <table class="last-orders-table table text-center" id="last-orders">
                <thead>
                  <tr>
                    <th class="col-2">Nom</th>
                    <th class="col-2">Image</th>
                    <th class="col-3">Description</th>
                    <th class="col-2">Status</th>
                    <th class="col-2">Date de Création</th>
                    <th class="col-2">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($categories as $category)
                    <tr> 
                      <td>{{ $category->name }}</td>
                      <td>
                        @if($category->image)
                        <img src="{{ asset($category->image) }}" alt="Image de la catégorie" style="width: 80px; height: 80px; object-fit: cover;">
                        @else
                          <span>Aucune image</span>
                        @endif
                      </td>
                      <td>{{ $category->description }}</td>
                      <td>
                        @if($category->status === 'active')
                            <span class="badge bg-success">Active</span>
                        @else
                            <span class="badge bg-danger">Inactive</span>
                        @endif
                      </td>
                      <td>{{ $category->created_at->format('d M, Y') }}</td>
                      <td>
                        <div class="d-flex justify-content-end">
                          <!-- Icône Modifier -->
                          <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-info me-2" title="Modifier">
                              <!-- SVG pour l'icône Modifier -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                  <path d="M12.146 0l3.708 3.708a1 1 0 0 1 0 1.414l-9 9a1 1 0 0 1-.293.208l-3.5 1.5a1 1 0 0 1-1.208-1.208l1.5-3.5a1 1 0 0 1 .208-.293l9-9A1 1 0 0 1 12.146 0zM11 3.5L8.5 6.5l3 3L14 6.5a1 1 0 0 0 0-1.414L11 3.5z"/>
                              </svg>
                          </a>
                      
                          <!-- Icône Supprimer -->
                          <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="d-inline">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-sm btn-danger" title="Supprimer" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette catégorie ?')">
                                  <!-- SVG pour l'icône Supprimer -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                      <path d="M5.5 0a.5.5 0 0 1 .5.5V1h5V.5a.5.5 0 0 1 1 0V1h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H1a.5.5 0 0 1-.5-.5V1a.5.5 0 0 1 .5-.5h2V0a.5.5 0 0 1 .5-.5zM3 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2H3z"/>
                                  </svg>
                              </button>
                          </form>
                      </div>                              
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid Ends-->
</div>

@include('admin.layouts.footer')
