<nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('Homepage')}}">HOME</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{route('About_me')}}">About Me</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('Contacts')}}">Contatti</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('Projects')}}">Progetti</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            </a>
            <ul class="dropdown-menu">
{{--               @foreach ($projects as $project)
              <li><a class="dropdown-item" href="{{route('Project', ['id'=>$id])}}">Mobile Robotics</a></li>
              @endforeach --}}

            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>