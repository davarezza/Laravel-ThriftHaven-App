<aside id="sidebar">
    {{-- Sidebar Content --}}
    <div class="h-100">
        <div class="sidebar-logo">
            <a href="#">{{ config('app.name') }}</a>
        </div>
        @if (auth()->user()->role === 'admin')
        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Management
            </li>
            <li class="sidebar-item">
                <a href="{{ route('admin.dashboard') }}" class="sidebar-link"><i class='bx bx-list-ul'></i> Dashboard</a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link collapsed" data-bs-target="#user" data-bs-toggle="collapse" aria-expanded="false"><i class='bx bxs-user pe-2'></i> User Management</a>
                <ul id="user" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a href="{{ route('admin.customers') }}" class="sidebar-link">Customer</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="{{ route('admin.sellers') }}" class="sidebar-link">Seller</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link collapsed" data-bs-target="#post" data-bs-toggle="collapse" aria-expanded="false"><i class='bx bx-slider pe-2'></i> Posts Management</a>
                <ul id="post" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">Accepted Posts</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">Pending Posts</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">Rejected Posts</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-header">
                Operations
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link"><i class='bx bxs-report'></i> Reported Issues</a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link"><i class='bx bxs-cog'></i> Settings</a>
            </li>
            @elseif(auth()->user()->role === 'seller')
            <li class="sidebar-header">
                Management
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link"><i class='bx bx-list-ul'></i> Dashboard</a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link collapsed" data-bs-target="#user" data-bs-toggle="collapse" aria-expanded="false"><i class='bx bx-package'></i> Product Management</a>
                <ul id="user" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">Uploaded Products</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">Pending Products</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">Rejected Products</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-header">
                Operations
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link"><i class='bx bxs-cog'></i> Settings</a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link"><i class='bx bx-no-entry'></i></i> Violation</a>
            </li>
            @endif
            <li class="sidebar-item">
                <a href="{{ route('home') }}" class="sidebar-link"><i class='bx bx-door-open'></i> Back</a>
            </li>
        </ul>
    </div>
</aside>