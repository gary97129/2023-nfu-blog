<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('get_index_page')}}">備忘錄</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" @yield('active_index') href="{{route('get_index_page')}}">首頁</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" @yield('active_create') href="{{route('get_create_page')}}">新增</a>
                </li>
            </ul>
            <form class="d-flex" action="{{route('get_index_page')}}">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_content">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
