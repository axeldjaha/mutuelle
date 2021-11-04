<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <img src="{{ asset("assets/images/logo-icon.png") }}" class="logo-icon" alt="logo icon">
                </div>
                <div>
                    <h4 class="logo-text">Mutuelle</h4>
                </div>
                <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
                </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    <a href="{{ route("home") }}" class="">
                        <div class="parent-icon"><i class='bx bx-home-circle'></i>
                        </div>
                        <div class="menu-title">Accueil</div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="bx bx-user"></i>
                        </div>
                        <div class="menu-title">Adhésion</div>
                    </a>
                    <ul>
                        <li> <a href="{{ url('index') }}"><i class="bx bx-user"></i>Adhérent</a>
                        </li>
                        <li> <a href="{{ url('app-chat-box') }}"><i class="bx bx-user-check"></i>Validation adhésion</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="bx bx-money"></i>
                        </div>
                        <div class="menu-title">Comptabilité</div>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ url('index') }}"><i class="bx bx-plus"></i>Saisie cotisation</a>
                        </li>
                        <li>
                            <a href="{{ url('index') }}"><i class="bx bxs-file-import"></i>Importation cotisation</a>
                        </li>
                        <li>
                            <a href="{{ url('index') }}"><i class="bx bx-check"></i>Validation cotisation</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="bx bx-calendar"></i>
                        </div>
                        <div class="menu-title">Evènement</div>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ url('index') }}"><i class="bx bx-plus"></i>Saisie évènement</a>
                        </li>
                        <li>
                            <a href="{{ url('index') }}"><i class="bx bx-check"></i>Validation évènement</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="bx bx-cog"></i>
                        </div>
                        <div class="menu-title">Paramétrage</div>
                    </a>
                    <ul>
                        <li class="@if(isset($menu) && $menu == "Sexe") mm-active @endif">
                            <a href="{{ route('sexe.index') }}"><i class="bx bx-right-arrow-alt"></i>Sexe</a>
                        </li>
                        <li>
                            <a href="{{ url('index') }}"><i class="bx bx-right-arrow-alt"></i>Civilité</a>
                        </li>
                        <li>
                            <a href="{{ url('index') }}"><i class="bx bx-right-arrow-alt"></i>Statut adhésion</a>
                        </li>
                        <li>
                            <a href="{{ url('index') }}"><i class="bx bx-right-arrow-alt"></i>Type cotisation</a>
                        </li>
                        <li>
                            <a href="{{ url('index') }}"><i class="bx bx-right-arrow-alt"></i>Année</a>
                        </li>
                        <li>
                            <a href="{{ url('index') }}"><i class="bx bx-right-arrow-alt"></i>Mois</a>
                        </li>
                        <li>
                            <a href="{{ url('index') }}"><i class="bx bx-right-arrow-alt"></i>Type job</a>
                        </li>
                        <li>
                            <a href="{{ url('index') }}"><i class="bx bx-right-arrow-alt"></i>Statut job</a>
                        </li>
                        <li>
                            <a href="{{ url('index') }}"><i class="bx bx-right-arrow-alt"></i>Type évènement</a>
                        </li>
                        <li>
                            <a href="{{ url('index') }}"><i class="bx bx-right-arrow-alt"></i>Statut évènement</a>
                        </li>
                        <li>
                            <a href="{{ url('index') }}"><i class="bx bx-right-arrow-alt"></i>Mensualité</a>
                        </li>
                    </ul>
                </li>


            </ul>
            <!--end navigation-->
        </div>
        <!--end sidebar wrapper -->
