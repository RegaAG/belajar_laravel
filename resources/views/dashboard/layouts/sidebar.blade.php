<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-lg offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu"
        aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link gap-2 {{ Request::is('dashboard') ? 'text-dark' : '' }}" aria-current="page"
                        href="/dashboard"> <i class="bi bi-house"></i>
                        Dashboard </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link gap-2 {{ Request::is('dashboard/posts') ? 'text-dark' : '' }}"
                        href="/dashboard/posts"><i class="bi bi-card-heading"></i> My Posts </a>
                </li>
                <li class="nav-item">
                    <form action="/logout" method="POST">
                        @csrf
                        <button class="nav-link gap-2" type="submit"><i
                                class="bi bi-box-arrow-right"></i>Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
