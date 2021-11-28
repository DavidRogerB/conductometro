<nav x-data="{ open: false }">
    <!-- Primary Navigation Menu -->

    <!-- Responsive Navigation Menu -->
    <div >

        <!-- Responsive Settings Options -->
        <div>
            <div>
                <div>{{ Auth::user()->name }}</div>
                <div>{{ Auth::user()->email }}</div>
            </div>

        </div>
    </div>
</nav>

