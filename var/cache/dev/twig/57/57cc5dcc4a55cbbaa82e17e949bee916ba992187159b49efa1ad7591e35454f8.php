<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/sidebar.html.twig */
class __TwigTemplate_98b372ba4561fbc7aa7333125682268d0ea247d65f1a396c98a23df958625bfd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/sidebar.html.twig"));

        // line 1
        echo "<aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
    <!-- Brand Logo -->
    <a href=\"#\" class=\"brand-link\">
        <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/dist/img/AdminLTELogo.png"), "html", null, true);
        echo "\" alt=\"AdminLTE Logo\" class=\"brand-image img-circle elevation-3\" style=\"opacity: .8\">
        <span class=\"brand-text font-weight-light\">pro6- GRH</span>
    </a>

    <!-- Sidebar -->
    <div
            class=\"sidebar\">
        <!-- Sidebar Menu -->
        <nav class=\"mt-2\">
            <ul
                    class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\"
                    data-accordion=\"false\">
                <!-- Add icons to the links using the .nav-icon class\t\t\t\t\t\t\t\t\t\t\t\twith font-awesome or any other icon font library -->
                <li class=\"nav-item \">
                    <a href=\"/accueil\" class=\"nav-link active\">
                        <i class=\"nav-icon fas fa-tachometer-alt\"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class=\"nav-item has-treeview\">
                    <a href=\"#\" class=\"nav-link\">
                        <i class=\"nav-icon fas fa-copy\"></i>
                        <p>
                            COMPTE
                            <i class=\"fas fa-angle-left right\"></i>
                        </p>
                    </a>
                    <ul class=\"nav nav-treeview\">
                        <li class=\"nav-item\">
                            <a href=\"#\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Organigramme</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Vue tabulaire</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("compte_new");
        echo "\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Nouveau compte</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("compte");
        echo "\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Liste des comptes</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sous_compte");
        echo "\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Liste des sous-comptes</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item has-treeview\">
                    <a href=\"#\" class=\"nav-link\">
                        <i class=\"nav-icon fas fa-cogs\"></i>
                        <p>
                            UTILISATEUR
                            <i class=\"fas fa-angle-left right\"></i>
                        </p>
                    </a>
                    <ul class=\"nav nav-treeview\">
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_new");
        echo "\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Nouvel utilisateur</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur");
        echo "\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Liste des utilisateurs</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item has-treeview\">
                    <a href=\"#\" class=\"nav-link\">
                        <i class=\"nav-icon fas fa-cogs\"></i>
                        <p>
                            PARAMETRES
                            <i class=\"fas fa-angle-left right\"></i>
                        </p>
                    </a>
                    <ul class=\"nav nav-treeview\">
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_service");
        echo "\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Paramètres compte</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("civilite");
        echo "\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Paramètres personnel</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 111
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pays");
        echo "\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Localisation</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class=\"nav-item has-treeview\">
                    <a href=\"#\" class=\"nav-link\">
                        <i class=\"fas fa-users-cog\"></i>
                        <p>
                            UTILISATEUR
                            <i class=\"fas fa-angle-left right\"></i>
                        </p>
                    </a>
                    <ul class=\"nav nav-treeview\">
                        <li class=\"nav-item\">
                            <a href=\"pages/layout/top-nav.html\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Profils</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"pages/layout/boxed.html\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Droits</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"pages/layout/fixed-topnav.html\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Nouvel utilisateur</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"pages/layout/fixed-sidebar.html\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Liste des utilisateurs</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item has-treeview\">
                    <a href=\"#\" class=\"nav-link\">
                        <i class=\"fas fa-users\"></i>
                        <p>
                            PERSONNEL
                            <i class=\"fas fa-angle-left right\"></i>
                        </p>
                    </a>
                    <ul class=\"nav nav-treeview\">
                        <li class=\"nav-item\">
                            <a href=\"pages/layout/top-nav.html\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Nouveau personnel</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"pages/layout/boxed.html\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Liste des personnels</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"pages/layout/boxed.html\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Liste des absents</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"pages/layout/boxed.html\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Liste des retardataires</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 111,  170 => 105,  161 => 99,  141 => 82,  132 => 76,  112 => 59,  103 => 53,  94 => 47,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
    <!-- Brand Logo -->
    <a href=\"#\" class=\"brand-link\">
        <img src=\"{{asset('admin-lte/dist/img/AdminLTELogo.png')}}\" alt=\"AdminLTE Logo\" class=\"brand-image img-circle elevation-3\" style=\"opacity: .8\">
        <span class=\"brand-text font-weight-light\">pro6- GRH</span>
    </a>

    <!-- Sidebar -->
    <div
            class=\"sidebar\">
        <!-- Sidebar Menu -->
        <nav class=\"mt-2\">
            <ul
                    class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\"
                    data-accordion=\"false\">
                <!-- Add icons to the links using the .nav-icon class\t\t\t\t\t\t\t\t\t\t\t\twith font-awesome or any other icon font library -->
                <li class=\"nav-item \">
                    <a href=\"/accueil\" class=\"nav-link active\">
                        <i class=\"nav-icon fas fa-tachometer-alt\"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class=\"nav-item has-treeview\">
                    <a href=\"#\" class=\"nav-link\">
                        <i class=\"nav-icon fas fa-copy\"></i>
                        <p>
                            COMPTE
                            <i class=\"fas fa-angle-left right\"></i>
                        </p>
                    </a>
                    <ul class=\"nav nav-treeview\">
                        <li class=\"nav-item\">
                            <a href=\"#\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Organigramme</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Vue tabulaire</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"{{path('compte_new')}}\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Nouveau compte</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"{{path('compte')}}\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Liste des comptes</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"{{path('sous_compte')}}\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Liste des sous-comptes</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item has-treeview\">
                    <a href=\"#\" class=\"nav-link\">
                        <i class=\"nav-icon fas fa-cogs\"></i>
                        <p>
                            UTILISATEUR
                            <i class=\"fas fa-angle-left right\"></i>
                        </p>
                    </a>
                    <ul class=\"nav nav-treeview\">
                        <li class=\"nav-item\">
                            <a href=\"{{ path('utilisateur_new') }}\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Nouvel utilisateur</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"{{ path('utilisateur') }}\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Liste des utilisateurs</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item has-treeview\">
                    <a href=\"#\" class=\"nav-link\">
                        <i class=\"nav-icon fas fa-cogs\"></i>
                        <p>
                            PARAMETRES
                            <i class=\"fas fa-angle-left right\"></i>
                        </p>
                    </a>
                    <ul class=\"nav nav-treeview\">
                        <li class=\"nav-item\">
                            <a href=\"{{ path('categorie_service') }}\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Paramètres compte</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"{{ path('civilite') }}\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Paramètres personnel</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"{{ path('pays') }}\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Localisation</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class=\"nav-item has-treeview\">
                    <a href=\"#\" class=\"nav-link\">
                        <i class=\"fas fa-users-cog\"></i>
                        <p>
                            UTILISATEUR
                            <i class=\"fas fa-angle-left right\"></i>
                        </p>
                    </a>
                    <ul class=\"nav nav-treeview\">
                        <li class=\"nav-item\">
                            <a href=\"pages/layout/top-nav.html\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Profils</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"pages/layout/boxed.html\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Droits</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"pages/layout/fixed-topnav.html\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Nouvel utilisateur</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"pages/layout/fixed-sidebar.html\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Liste des utilisateurs</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item has-treeview\">
                    <a href=\"#\" class=\"nav-link\">
                        <i class=\"fas fa-users\"></i>
                        <p>
                            PERSONNEL
                            <i class=\"fas fa-angle-left right\"></i>
                        </p>
                    </a>
                    <ul class=\"nav nav-treeview\">
                        <li class=\"nav-item\">
                            <a href=\"pages/layout/top-nav.html\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Nouveau personnel</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"pages/layout/boxed.html\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Liste des personnels</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"pages/layout/boxed.html\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Liste des absents</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"pages/layout/boxed.html\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Liste des retardataires</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
", "partials/sidebar.html.twig", "G:\\TPS\\grh\\templates\\partials\\sidebar.html.twig");
    }
}
