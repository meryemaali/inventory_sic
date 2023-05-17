

<div class="vertical-menu">

<div data-simplebar class="h-100">

    <!-- User details -->
    

    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu list-unstyled" id="side-menu">
            <li class="menu-title">Menu</li>

            <li>
                <a href="{{ url('/dashboard') }}" class="waves-effect">
                    <i class="ri-home-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>

           

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-hotel-fill"></i>
                    <span>Gérer Fournisseurs</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('supplier.all') }}">Tous les fournisseurs</a></li>
                </ul>
            </li>

            <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-shield-user-fill"></i>
                <span>Gérer Entités</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('entity.all') }}">Toutes les entités</a></li>
                <!-- <li><a href="{{ route('credit.entity') }}">Crédit entités</a></li> -->
                </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-delete-back-fill"></i>
                <span>Gérer Catégories</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('category.all') }}">Toutes les catégories</a></li>

            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-apps-2-fill"></i>
                <span>Gérer les produits</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('product.all') }}">Tous les produits</a></li>

            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-reddit-fill"></i>
                <span>Etat Matériel</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('productEtat.all') }}">Etat Matériel MR</a></li>

            </ul>
        </li>
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-oil-fill"></i>
                <span>Gérer les Bons de commandes</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('purchase.all') }}">Tous les bons de commandes</a></li>
                <li><a href="{{ route('purchase.pending') }}">Bons à approuver</a></li>
                <li><a href="{{ route('daily.purchase.report') }}">Rapport d’achat quotidien</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-compass-2-fill"></i>
                <span>Gérer les bons de sortie </span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('invoice.all') }}">Tous les bons</a></li>
                <li><a href="{{ route('invoice.pending.list') }} ">Bons à approuver</a></li>
                <li><a href="{{ route('print.invoice.list') }}">Imprimer liste bons</a></li>
                <li><a href="{{ route('daily.invoice.report') }}">Rapport quotidien des bons</a></li>

            </ul>
        </li>
        <li class="menu-title">Stock</li>

<li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <i class="ri-gift-fill"></i>
        <span>Gérer Stock</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">
        <li><a href="{{ route('stock.report') }}">Rapport de Stock</a></li>
        <li><a href="{{ route('stock.supplier.wise') }}">Fournisseur / Produit </a></li>

    </ul>
</li>
<li>
                                <!-- <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-profile-line"></i>
                                    <span>Support</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="pages-starter.html">Starter Page</a></li> -->

    </div>
    <!-- Sidebar -->
</div>
</div>