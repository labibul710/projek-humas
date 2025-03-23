<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="../dashboard/index.html" class="b-brand text-primary">
                <!-- ========   Change your logo from here   ============ -->
                <img src="../assets/images/logo-dark.svg" class="img-fluid logo-lg" alt="logo">
            </a>
        </div>
        <div class="navbar-content">
            <ul class="pc-navbar">
                <li class="pc-item">
                    <a href="{{ route('dashboard') }}" class="pc-link">
                        <span class="pc-micon"><i class="ti ti-dashboard"></i></span>
                        <span class="pc-mtext">Dashboard</span>
                    </a>
                </li>

                <li class="pc-item pc-caption">
                    <label>UI Components</label>
                    <i class="ti ti-dashboard"></i>
                </li>
                <li class="pc-item">
                    <a href="../elements/bc_typography.html" class="pc-link">
                        <span class="pc-micon"><i class="ti ti-folders"></i></span>
                        <span class="pc-mtext">Divisi</span>
                    </a>
                </li>
                <li class="pc-item">
                    <a href="../elements/bc_color.html" class="pc-link">
                        <span class="pc-micon"><i class="ti ti-school"></i></span>
                        <span class="pc-mtext">Teacher</span>
                    </a>
                </li>
                <li class="pc-item">
                    <a href="../elements/icon-tabler.html" class="pc-link">
                        <span class="pc-micon"><i class="ti ti-users"></i></span>
                        <span class="pc-mtext">Student</span>
                    </a>
                </li>

                <li class="pc-item">
                    <a href="{{route('task.index')}}" class="pc-link">
                        <span class="pc-micon"><i class="ti ti-book"></i></span>
                        <span class="pc-mtext">Task</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
