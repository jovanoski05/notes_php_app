<nav class="p-3 navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
  <a class="navbar-brand" href="/notesapp/">
  <img src="/notesapp/images/logo.svg" alt="Logo" width="40" height="34" class="d-inline-block align-text-top">
      Notes
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?= $url=="/notesapp/" ? 'active' : null ?>" aria-current="page" href="/notesapp/">My Notes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $url=="/notesapp/note/create" ? 'active' : null ?>" href="/notesapp/note/create">Create Notes</a>
        </li>
        <!--<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>-->
        <!--<li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>-->
      </ul>
      <!--<form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>-->
      <ul class="navbar-nav">
        <a href="/notesapp/login" class="nav-link">Log In</a>
        <a href="#" class="nav-link">Sign Up</a>
      </ul>
    </div>
  </div>
</nav>