<nav class="navbar navbar-expand navbar-light ">
    <div class="container-fluid">
        <a href="#" class="burger-btn d-block">
            <i class="bi bi-justify fs-3"></i>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            </ul>

            <div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="user-menu d-flex">
                        <div class="user-name text-end me-3">
                            <h6 class="mb-0 text-gray-600">{{ auth()->user()->name }}</h6>
                            <p class="mb-0 text-sm text-gray-600">{{ auth()->user()->role->name }}</p>
                        </div>
                        <div class="user-img d-flex align-items-center">
                            <div class="avatar avatar-md">
                                @php
                                    use Illuminate\Support\Facades\Storage;
                                    $path = Storage::url('images/profil/'.auth()->user()->foto_profil);
                                    $imageUrl = asset($path);
                                @endphp
                                <img src="{{ $imageUrl }}" onerror="this.src='/assets/images/samples/default.png'" alt="avatar-icon" />
                            </div>
                        </div>
                    </div>
                </a>



                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li>
                        <h6 class="dropdown-header">Halo, {{ auth()->user()->name }}!</h6>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('admin.profiles.edit') }}">
                            <i class="icon-mid bi bi-person me-2"></i> My Profile
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <button class="btn"><i class="icon-mid bi bi-box-arrow-left me-2"></i>Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
