<!-- Preloader Start -->
<div class="preloader">
    <div class="loading-container">
        <div class="loading"></div>
        <div id="loading-icon"><img src="{{ asset('assets/images/logo.png') }}" width="180px" alt=""></div>
    </div>
</div>
<!-- Preloader End -->

<!-- Header Start -->
<header class="main-header">
    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo Start -->
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Logo">
                </a>
                <!-- Logo End -->

                <!-- Main Menu Start -->
                <div class="collapse navbar-collapse main-menu">
                    <div class="nav-menu-wrapper">
                        <ul class="navbar-nav mr-auto" id="menu">
                            <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                            <li class="nav-item submenu"><a class="nav-link" href="javascript:void(0)">About Us</a>
                                <ul>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('company-overview') }}">Company Overview</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('vision-mission') }}">Vision & Mission</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('core-values') }}">Core Values</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('leadership-team') }}">Leadership Team</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('manufacturing-facilities') }}">Manufacturing Facilities</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('sustainability-quality-standards') }}">Sustainability & Quality Standards</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('milestone') }}">Industry Experience & Milestones</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('why-choose-us') }}">Why Choose Us</a></li>
                                </ul>
                            </li>
                            <li class="nav-item submenu"><a class="nav-link" href="#">Products</a>
                                <ul>
                                    @if(isset($categories) && $categories->count() > 0)
                                        @foreach($categories as $category)
                                            @if($category->subCategories->count() > 0)
                                                <li class="nav-item submenu">
                                                    <a class="nav-link" href="{{ url('/' . $category->slug) }}" data-category-id="{{ $category->id }}">
                                                        {{ $category->name }}
                                                    </a>
                                                    <ul class="subcategory-menu" data-category="{{ $category->id }}">
                                                        <!-- Subcategories will be loaded here via AJAX -->
                                                    </ul>
                                                </li>
                                            @else
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ url('/' . $category->slug) }}">{{ $category->name }}</a>
                                                </li>
                                            @endif
                                        @endforeach
                                    @else
                                        <!-- Fallback to static menu if no categories are found -->
                                        <li class="nav-item submenu"><a class="nav-link" href="{{ route('aluminium-composite-panels') }}">Aluminium Composite Panels</a>
                                            <ul>
                                                <li class="nav-item"><a class="nav-link" href="{{ route('metallic-flair-series') }}">Metallic Flair Series</a></li>
                                                <li class="nav-item"><a class="nav-link" href="#">Solid Series</a></li>
                                                <li class="nav-item"><a class="nav-link" href="#"> Sand Series</a></li>
                                                <li class="nav-item"><a class="nav-link" href="#">Wooden Series</a></li>
                                                <li class="nav-item"><a class="nav-link" href="#">Stone Series</a></li>
                                                <li class="nav-item"><a class="nav-link" href="#">Sparkle Series</a></li>
                                                <li class="nav-item"><a class="nav-link" href="#">High Gloss Series</a></li>
                                                <li class="nav-item"><a class="nav-link" href="#">Marble Series</a></li>
                                                <li class="nav-item"><a class="nav-link" href="#">Emerald Series</a></li>
                                                <li class="nav-item"><a class="nav-link" href="#">Crystal Series</a></li>
                                                <li class="nav-item"><a class="nav-link" href="#">Mirror Series</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="{{ route('fire-retardant-acp-panels') }}">Fire Retardant ACP Panels</a></li>
                                        <li class="nav-item"><a class="nav-link" href="{{ route('ahpl') }}">4MANN HPL </a></li>
                                        <li class="nav-item"><a class="nav-link" href="{{ route('honeycomb-panels') }}">4MANN Honeycomb Panels </a></li>
                                        <li class="nav-item"><a class="nav-link" href="{{ route('louvers') }}">METAFLUTE – Aluminium Composite Louvers</a></li>
                                        <li class="nav-item"><a class="nav-link" href="{{ route('other-building') }}">Other Building Materials</a></li>
                                    @endif
                                </ul>
                            </li>
                            <li class="nav-item submenu"><a class="nav-link" href="{{ route('resources') }}">Resources</a>
                                <ul>
                                    <li class="nav-item"><a class="nav-link" href="{{ url('resources#technical-manual') }}">4MANN - Technical Manual</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ url('resources#BIS-Certificate') }}">BIS Certificate</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ url('resources#Catalogs') }}">Catalogs</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ url('resources#IGBC-Certificate') }}">IGBC Certificate</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ url('resources#Fire-Test-Certificate') }}">Fire Test Certificate</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ url('resources#ISO-Certificates') }}">ISO Certificates</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ url('resources#TDS') }}">TDS</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ url('resources#Other-Test-Reports') }}">Other Test Reports</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ url('resources#Other-Resources') }}">Other Resources</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('blog') }}">Media & News</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('projects') }}">Projects</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('career') }}">Career</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact Us</a></li>
                        </ul>
                    </div>

                    <!-- Header Social Box Start -->
                    <div class="header-social-box d-inline-flex">
                        <!-- Header Social Links Start -->
                        <div class="header-social-links">
                            <ul>
                                <li><a href="https://x.com/4mannindustries" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="https://www.facebook.com/4mannindustries" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="https://www.instagram.com/4mann__acp/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <!-- Header Social Links End -->
                    </div>
                    <!-- Header Social Box End -->
                </div>
                <!-- Main Menu End -->
                <div class="navbar-toggle"></div>
            </div>
        </nav>
        <div class="responsive-menu"></div>
    </div>
</header>
<!-- Header End -->

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Handle category hover to load subcategories
    const categoryLinks = document.querySelectorAll('a[data-category-id]');

    categoryLinks.forEach(function(link) {
        link.addEventListener('mouseenter', function() {
            const categoryId = this.getAttribute('data-category-id');
            const subcategoryMenu = document.querySelector(`ul[data-category="${categoryId}"]`);

            // Only load if not already loaded
            if (subcategoryMenu && subcategoryMenu.children.length === 0) {
                loadSubcategories(categoryId, subcategoryMenu);
            }
        });
    });

    function loadSubcategories(categoryId, container) {
        fetch(`/get-subcategories/${categoryId}`)
            .then(response => response.json())
            .then(subcategories => {
                container.innerHTML = '';
                subcategories.forEach(function(subcategory) {
                    const li = document.createElement('li');
                    li.className = 'nav-item';
                    // Create proper link to subcategory page
                    const link = document.createElement('a');
                    link.className = 'nav-link';
                    // Use slug if available, otherwise use ID
                    if (subcategory.slug) {
                        link.href = `/subcategory/${subcategory.slug}`;
                    } else {
                        link.href = `/subcategory-by-id/${subcategory.id}`;
                    }
                    link.textContent = subcategory.name;
                    li.appendChild(link);
                    container.appendChild(li);
                });
            })
            .catch(error => {
                console.error('Error loading subcategories:', error);
            });
    }
});
</script>

