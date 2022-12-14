@extends('layouts.admin')

@section('content')
    <div class="container">
        <header class="d-flex justify-content-between">
            <div>
                <h2>Bootstrap 5 Sidebar Menu - Simple</h2>
                <p class="lead">A offcanvas "push" vertical nav menu example.</p>
            </div>
            <div class="ml-auto">
                <div class="dropdown">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Actions
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </div>
        </header>


        <div class="row py-3">

            <div class="col-md-12">
                <div class="card card-body">
                    <p>
                        This is a simple collapsing sidebar menu for Bootstrap 5.
                        Unlike the Offcanvas component that overlays the content, this
                        sidebar will "push" the content. Sriracha biodiesel taxidermy
                        organic post-ironic, Intelligentsia salvia mustache 90's code
                        editing brunch. Butcher polaroid VHS art party, hashtag
                        Brooklyn deep v PBR narwhal sustainable mixtape swag wolf
                        squid tote bag. Tote bag cronut semiotics, raw denim deep v
                        taxidermy messenger bag. Tofu YOLO Etsy, direct trade ethical
                        Odd Future jean shorts paleo. Forage Shoreditch tousled
                        aesthetic irony, street art organic Bushwick artisan cliche
                        semiotics ugh synth chillwave meditation. Shabby chic lomo
                        plaid vinyl chambray Vice. Vice sustainable cardigan,
                        Williamsburg master cleanse hella DIY 90's blog.
                    </p>
                    <p>
                        Ethical Kickstarter PBR asymmetrical lo-fi. Dreamcatcher
                        street art Carles, stumptown gluten-free Kickstarter artisan
                        Wes Anderson wolf pug. Godard sustainable you probably haven't
                        heard of them, vegan farm-to-table Williamsburg slow-carb
                        readymade disrupt deep v. Meggings seitan Wes Anderson
                        semiotics, cliche American Apparel whatever. Helvetica cray
                        plaid, vegan brunch Banksy leggings +1 direct trade. Wayfarers
                        codeply PBR selfies. Banh mi McSweeney's Shoreditch selfies,
                        forage fingerstache food truck occupy YOLO Pitchfork fixie
                        iPhone fanny pack art party Portland.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
