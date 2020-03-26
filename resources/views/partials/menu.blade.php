<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link">
                <i class="fas fa-users" style='font-size:25px'></i>
                <p>
                    Administration
                    <i class="right fas fa-angle-left" ></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.users.index') }}" class="nav-link ">
                        <i class="fas fa-user"></i>
                        <p>Utilisateur</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.roles.index') }}" class="nav-link">
                        <i class="fas fa-binoculars"></i>
                        <p>Role</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link">
                <i class="fas fa-hands" style='font-size:25px'></i>
                <p>
                    Réception requêtes
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.users.index') }}" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>......</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.roles.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>.......</p>
                    </a>
                </li>
            </ul>
        </li>


        <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link">
                <i class="fas fa-exchange-alt" style='font-size:25px'></i>
                <p>
                    Gestion des affections
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.users.index') }}" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>......</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.roles.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>.....</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link">
                <i class="fas fa-pencil-ruler" style='font-size:25px'></i>
                <p>
                    Mise en l'état
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.users.index') }}" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>......</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.roles.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>.....</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link">
                <i class="fas fa-chalkboard-teacher" style='font-size:25px'></i>
                <p>
                    Observations
                    <i class="right fas fa-angle-left" ></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.users.index') }}" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>......</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.roles.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>.....</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link">
                <i class="fa fa-server" style='font-size:25px'></i>
                <p>
                    Enrolement
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.users.index') }}" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>......</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.roles.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>.....</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link">
                <i class="fas fa-balance-scale" style='font-size:25px'></i>
                <p>
                    Gestion des audiances
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.users.index') }}" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>......</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.roles.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>.....</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link">
                <i class="fas fa-address-book" style='font-size:25px'></i>
                <p>
                    Profil
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('password.update') }}" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Changer mot de passe</p>
                    </a>
                </li>
                <li class="nav-item">

                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out-alt"></i>      {{ __('Déconnexion') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                <i class="fa fa-sign-out fa-2x"></i>      {{ __('Déconnexion') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</nav>
