<nav class="navbar navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-btn" STYLE="height: 50px">
            <button type="button" class="btn-toggle-offcanvas" style="padding-top:15px"><i class="lnr lnr-menu fa fa-bars"></i></button>
        </div> 
        {{-- <div class="navbar-right">              
            <div id="navbar-menu">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{ route('logout') }}" class="icon-menu" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i class="icon-login"></i></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div> --}}
    </div>
</nav>

<style>
    @media (max-width: 600px) {
      .facet_sidebar {
        /* display: none; */
        margin-top: 15%;
      }
    }
    </style>