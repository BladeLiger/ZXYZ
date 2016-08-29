<div class="todo">
    @include('extends.nav')
</div>
<div class="navbar">
    <div class="navbar-inner">
        <div class="container">
            <a href="#" class="brand">
                <img src="{{asset('images/logo1.png')}}" width="120" height="40" alt="Logo" />
                <!-- This is website logo -->
            </a>
            <!-- Navigation button, visible on small resolution -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <i class="icon-menu"></i>
            </button>
            <button type="button" class="btn btn-navbar">
                
            </button>
            <!-- Main navigation -->
            <div class="nav-collapse collapse pull-right">
                <ul class="nav" id="top-navigation">
                    <li class="active"><a href="#home">Home</a></li>
                    <li><a href="#" class="trigger">Mas...</a></li>
                </ul>
            </div>
            <!-- End main navigation -->
        </div>
    </div>
</div>