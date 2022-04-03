<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">

    <div class="text-center">
        <img class="mb-0 mt-3" src="\img\fix.png" alt="" width="120" height="120">
    </div>
    <div class="position-sticky pt-3">
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard')? 'active' :''}} text-white" aria-current="page" href="/dashboard">
                    <i class="bi bi-house-door-fill"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/appointment*')? 'active' :''}} text-white" href="/dashboard/appointment">
                    <i class="bi bi-file-earmark-fill"></i>
                    Appointment
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/NewAppointment*')? 'active' :''}} text-white" href="/dashboard/NewAppointment">
                    <i class="bi bi-file-earmark-plus-fill"></i>
                    New Appointment
                </a>
            </li>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/Chats')? 'active' :''}} text-white" href="/dashboard/Chats">
                    <i class="bi bi-chat-quote-fill"></i>
                    Chats
                </a>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('/logout')? 'active' :''}} text-white" href="/logout">
                    <i class="bi bi-arrow-right-circle-fill"></i>
                    Sign Out
                </a>
            </li>

        </ul>
    </div>
</nav>