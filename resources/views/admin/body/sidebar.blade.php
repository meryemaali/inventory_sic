

<div class="vertical-menu">

<div data-simplebar class="h-100">

    <!-- User details -->
    

    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu list-unstyled" id="side-menu">
            <li class="menu-title">Menu</li>

            <li>
                <a href="index.html" class="waves-effect">
                    <i class="ri-dashboard-line"></i>
                    <span>Dashboard</span>
                </a>
            </li>

           

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-mail-send-line"></i>
                    <span>Gérer Fournisseurs</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('supplier.all') }}">Tous les fournisseurs</a></li>
                </ul>
            </li>

            <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-mail-send-line"></i>
                <span>Gérer Entités</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('entity.all') }}">Toutes les entités</a></li>
                <!-- <li><a href="{{ route('credit.entity') }}">Crédit entités</a></li> -->
                </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-mail-send-line"></i>
                <span>Gérer Catégories</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('category.all') }}">Toutes les catégories</a></li>

            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-mail-send-line"></i>
                <span>Gérer les produits</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('product.all') }}">Tous les produits</a></li>

            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-mail-send-line"></i>
                <span>Etat Matériel</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('productEtat.all') }}">Etat Matériel MR</a></li>

            </ul>
        </li>
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-mail-send-line"></i>
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
                <i class="ri-mail-send-line"></i>
                <span>Gérer les factures </span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('invoice.all') }}">Toutes les factures</a></li>
                <li><a href="{{ route('invoice.pending.list') }} ">Factures à approuver</a></li>
                <li><a href="{{ route('print.invoice.list') }}">Imprimer liste factures</a></li>
                <li><a href="{{ route('daily.invoice.report') }}">Rapport quotidien des factures</a></li>

            </ul>
        </li>
        <li class="menu-title">Stock</li>

<li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <i class="ri-account-circle-line"></i>
        <span>Gérer Stock</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">
        <li><a href="{{ route('stock.report') }}">Rapport de Stock</a></li>
        <li><a href="{{ route('stock.supplier.wise') }}">Fournisseur / Produit </a></li>

    </ul>
</li>
<!-- 
            <li class="menu-title">Pages</li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-account-circle-line"></i>
                    <span>Authentication</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="auth-login.html">Login</a></li>
                    <li><a href="auth-register.html">Register</a></li>
                    <li><a href="auth-recoverpw.html">Recover Password</a></li>
                    <li><a href="auth-lock-screen.html">Lock Screen</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-profile-line"></i>
                    <span>Utility</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="pages-starter.html">Starter Page</a></li>
                    <li><a href="pages-timeline.html">Timeline</a></li>
                    <li><a href="pages-directory.html">Directory</a></li>
                    <li><a href="pages-invoice.html">Invoice</a></li>
                    <li><a href="pages-404.html">Error 404</a></li>
                    <li><a href="pages-500.html">Error 500</a></li>
                </ul>
            </li>



        

        </ul> -->
    </div>
    <!-- Sidebar -->
</div>
</div>