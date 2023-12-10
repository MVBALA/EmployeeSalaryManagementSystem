<!-- Sidebar -->
<div class="sidebar">
    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Dashboard</div>
        </a>
        <div class="text-light" style="padding-left: 20px;">
            {{ Auth::user()->name }}
        </div>

        <!-- Nav Item - Employee -->
        @canany(['employee.read'])
            <li class="nav-item">
                <a id="employee-link" class="nav-link" href="{{ url('employees') }}">
                    <i class="bi bi-people-fill"></i>
                    <span>Employee</span>
                </a>
                <hr class="sidebar-divider">
            </li>
        @endcanany

        <!-- Nav Item - Payment -->
        @canany(['payment.read', 'payment.write'])
            <li class="nav-item">
                <a id="payment-link" class="nav-link" href="{{ route('payments.index') }}">
                    <i class="bi bi-wallet2"></i>
                    <span>Payment</span>
                </a>
                <hr class="sidebar-divider">
            </li>
        @endcanany

        <!-- Nav Item - Salary -->
        @canany(['salary.read', 'salary.write'])
            <li class="nav-item">
                <a id="salary-link" class="nav-link" href="{{ route('salary.index') }}">
                    <i class="bi bi-wallet2"></i>
                    <span>Salary</span>
                </a>
                <hr class="sidebar-divider">
            </li>
        @endcanany

        {{-- Logout Button --}}
        <a class="nav-link" href="{{ url("logout") }}">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-dropdown-link :href="route('logout')"
                                 onclick="event.preventDefault();
                        this.closest('form').submit();">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Logout</span>
                </x-dropdown-link>
            </form>
        </a>


    </ul>
</div>
<!-- End of Sidebar -->
