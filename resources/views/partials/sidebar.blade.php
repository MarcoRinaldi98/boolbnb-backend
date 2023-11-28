<div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary">

    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}"
                class="nav-link {{ Route::currentRouteName() == 'admin.dashboard' ? 'active' : '' }}" aria-current="page">
                <svg class="bi pe-none me-2" width="16" height="16">
                    <use xlink:href="#home"></use>
                </svg>
                Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.apartments.index') }}"
                class="nav-link {{ Route::currentRouteName() == 'admin.apartments.index' ? 'active' : '' }}"
                aria-current="page">
                <svg class="bi pe-none me-2" width="16" height="16">
                    <use xlink:href="#home"></use>
                </svg>
                Apartments
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.messages.index') }}"
                class="nav-link {{ Route::currentRouteName() == 'admin.messages.index' ? 'active' : '' }}"
                aria-current="page">
                <svg class="bi pe-none me-2" width="16" height="16">
                    <use xlink:href="#home"></use>
                </svg>
                Messages
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.services.index') }}"
                class="nav-link {{ Route::currentRouteName() == 'admin.services.index' ? 'active' : '' }}"
                aria-current="page">
                <svg class="bi pe-none me-2" width="16" height="16">
                    <use xlink:href="#home"></use>
                </svg>
                Services
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.sponsorships.index') }}"
                class="nav-link {{ Route::currentRouteName() == 'admin.sponsorships.index' ? 'active' : '' }}"
                aria-current="page">
                <svg class="bi pe-none me-2" width="16" height="16">
                    <use xlink:href="#home"></use>
                </svg>
                Sponsorships
            </a>
        </li>
    </ul>

</div>
