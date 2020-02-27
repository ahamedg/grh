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

/* partials/header.html.twig */
class __TwigTemplate_2d54625f7720bc0656ac55ddf29ea858cd6004f590cd96a2889e06cc06b3c591 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/header.html.twig"));

        // line 1
        echo "<nav
\tclass=\"main-header navbar navbar-expand navbar-white\">
\t<!-- Left navbar links -->
\t<ul class=\"navbar-nav\">
\t\t<li class=\"nav-item\">
\t\t\t<a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\">
\t\t\t\t<i class=\"fas fa-bars\"></i>
\t\t\t</a>
\t\t</li>
\t</ul>


\t<!-- Right navbar links -->
\t<ul
\t\tclass=\"navbar-nav ml-auto\">
\t\t<!-- Messages Dropdown Menu -->
\t\t<li class=\"nav-item dropdown\">
\t\t\t<a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t<i class=\"far fa-comments\"></i>
\t\t\t\t<span class=\"badge badge-danger navbar-badge\">3</span>
\t\t\t</a>
\t\t\t<div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
\t\t\t\t<a
\t\t\t\t\thref=\"#\" class=\"dropdown-item\">
\t\t\t\t\t<!-- Message Start -->
\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t<img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/dist/img/manager.png"), "html", null, true);
        echo "\" alt=\"User Avatar\" class=\"img-size-50 mr-3 img-circle\">
\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t<h3 class=\"dropdown-item-title\">
\t\t\t\t\t\t\t\tBrad Diesel
\t\t\t\t\t\t\t\t<span class=\"float-right text-sm text-danger\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-star\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<p class=\"text-sm\">Call me whenever you can...</p>
\t\t\t\t\t\t\t<p class=\"text-sm text-muted\">
\t\t\t\t\t\t\t\t<i class=\"far fa-clock mr-1\"></i>
\t\t\t\t\t\t\t\t4 Hours Ago</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Message End -->
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t<a
\t\t\t\t\thref=\"#\" class=\"dropdown-item\">
\t\t\t\t\t<!-- Message Start -->
\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t<img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/dist/img/manager.png"), "html", null, true);
        echo "\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t<h3 class=\"dropdown-item-title\">
\t\t\t\t\t\t\t\tJohn Pierce
\t\t\t\t\t\t\t\t<span class=\"float-right text-sm text-muted\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-star\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<p class=\"text-sm\">I got your message bro</p>
\t\t\t\t\t\t\t<p class=\"text-sm text-muted\">
\t\t\t\t\t\t\t\t<i class=\"far fa-clock mr-1\"></i>
\t\t\t\t\t\t\t\t4 Hours Ago</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Message End -->
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t<a
\t\t\t\t\thref=\"#\" class=\"dropdown-item\">
\t\t\t\t\t<!-- Message Start -->
\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t<img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/dist/img/manager.png"), "html", null, true);
        echo "\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t<h3 class=\"dropdown-item-title\">
\t\t\t\t\t\t\t\tNora Silvester
\t\t\t\t\t\t\t\t<span class=\"float-right text-sm text-warning\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-star\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<p class=\"text-sm\">The subject goes here</p>
\t\t\t\t\t\t\t<p class=\"text-sm text-muted\">
\t\t\t\t\t\t\t\t<i class=\"far fa-clock mr-1\"></i>
\t\t\t\t\t\t\t\t4 Hours Ago</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Message End -->
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t<a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Messages</a>
\t\t\t</div>
\t\t</li>
\t\t<!-- Notifications Dropdown Menu -->
\t\t<li class=\"nav-item dropdown\">
\t\t\t<a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t<i class=\"far fa-bell\"></i>
\t\t\t\t<span class=\"badge badge-warning navbar-badge\">15</span>
\t\t\t</a>
\t\t\t<div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
\t\t\t\t<span class=\"dropdown-item dropdown-header\">15 Notifications</span>
\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t<i class=\"fas fa-envelope mr-2\"></i>
\t\t\t\t\t4 new messages
\t\t\t\t\t<span class=\"float-right text-muted text-sm\">3 mins</span>
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t<i class=\"fas fa-users mr-2\"></i>
\t\t\t\t\t8 friend requests
\t\t\t\t\t<span class=\"float-right text-muted text-sm\">12 hours</span>
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t<i class=\"fas fa-file mr-2\"></i>
\t\t\t\t\t3 new reports
\t\t\t\t\t<span class=\"float-right text-muted text-sm\">2 days</span>
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t<a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Notifications</a>
\t\t\t</div>
\t\t</li>
\t\t<!-- User Dropdown Menu -->
\t\t<li class=\"nav-item dropdown\">
\t\t\t<a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t<i class=\"far fa-user\"></i>
\t\t\t</a>
\t\t\t<div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
\t\t\t\t<span class=\"dropdown-item dropdown-header\">
\t\t\t\t\t<img src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle elevation-2\" alt=\"User Image\">
\t\t\t\t</span>

\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\tUser: GOBI Gobi
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t<a href=\"";
        // line 134
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\" class=\"dropdown-item dropdown-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-info\" href=\"";
        // line 135
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\">Se déconnecter</button>
\t\t\t\t</a>
\t\t\t</div>
\t\t</li>

\t\t<li class=\"nav-item\">
\t\t\t<a class=\"nav-link\" data-widget=\"control-sidebar\" data-slide=\"true\" href=\"#\">
\t\t\t\t<i class=\"fas fa-th-large\"></i>
\t\t\t</a>
\t\t</li>
\t</ul>
</nav>
<!-- /.navbar -->
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 135,  190 => 134,  179 => 126,  119 => 69,  95 => 48,  71 => 27,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav
\tclass=\"main-header navbar navbar-expand navbar-white\">
\t<!-- Left navbar links -->
\t<ul class=\"navbar-nav\">
\t\t<li class=\"nav-item\">
\t\t\t<a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\">
\t\t\t\t<i class=\"fas fa-bars\"></i>
\t\t\t</a>
\t\t</li>
\t</ul>


\t<!-- Right navbar links -->
\t<ul
\t\tclass=\"navbar-nav ml-auto\">
\t\t<!-- Messages Dropdown Menu -->
\t\t<li class=\"nav-item dropdown\">
\t\t\t<a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t<i class=\"far fa-comments\"></i>
\t\t\t\t<span class=\"badge badge-danger navbar-badge\">3</span>
\t\t\t</a>
\t\t\t<div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
\t\t\t\t<a
\t\t\t\t\thref=\"#\" class=\"dropdown-item\">
\t\t\t\t\t<!-- Message Start -->
\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t<img src=\"{{ asset('admin-lte/dist/img/manager.png') }}\" alt=\"User Avatar\" class=\"img-size-50 mr-3 img-circle\">
\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t<h3 class=\"dropdown-item-title\">
\t\t\t\t\t\t\t\tBrad Diesel
\t\t\t\t\t\t\t\t<span class=\"float-right text-sm text-danger\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-star\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<p class=\"text-sm\">Call me whenever you can...</p>
\t\t\t\t\t\t\t<p class=\"text-sm text-muted\">
\t\t\t\t\t\t\t\t<i class=\"far fa-clock mr-1\"></i>
\t\t\t\t\t\t\t\t4 Hours Ago</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Message End -->
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t<a
\t\t\t\t\thref=\"#\" class=\"dropdown-item\">
\t\t\t\t\t<!-- Message Start -->
\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t<img src=\"{{ asset('admin-lte/dist/img/manager.png') }}\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t<h3 class=\"dropdown-item-title\">
\t\t\t\t\t\t\t\tJohn Pierce
\t\t\t\t\t\t\t\t<span class=\"float-right text-sm text-muted\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-star\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<p class=\"text-sm\">I got your message bro</p>
\t\t\t\t\t\t\t<p class=\"text-sm text-muted\">
\t\t\t\t\t\t\t\t<i class=\"far fa-clock mr-1\"></i>
\t\t\t\t\t\t\t\t4 Hours Ago</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Message End -->
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t<a
\t\t\t\t\thref=\"#\" class=\"dropdown-item\">
\t\t\t\t\t<!-- Message Start -->
\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t<img src=\"{{ asset('admin-lte/dist/img/manager.png') }}\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t<h3 class=\"dropdown-item-title\">
\t\t\t\t\t\t\t\tNora Silvester
\t\t\t\t\t\t\t\t<span class=\"float-right text-sm text-warning\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-star\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<p class=\"text-sm\">The subject goes here</p>
\t\t\t\t\t\t\t<p class=\"text-sm text-muted\">
\t\t\t\t\t\t\t\t<i class=\"far fa-clock mr-1\"></i>
\t\t\t\t\t\t\t\t4 Hours Ago</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Message End -->
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t<a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Messages</a>
\t\t\t</div>
\t\t</li>
\t\t<!-- Notifications Dropdown Menu -->
\t\t<li class=\"nav-item dropdown\">
\t\t\t<a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t<i class=\"far fa-bell\"></i>
\t\t\t\t<span class=\"badge badge-warning navbar-badge\">15</span>
\t\t\t</a>
\t\t\t<div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
\t\t\t\t<span class=\"dropdown-item dropdown-header\">15 Notifications</span>
\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t<i class=\"fas fa-envelope mr-2\"></i>
\t\t\t\t\t4 new messages
\t\t\t\t\t<span class=\"float-right text-muted text-sm\">3 mins</span>
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t<i class=\"fas fa-users mr-2\"></i>
\t\t\t\t\t8 friend requests
\t\t\t\t\t<span class=\"float-right text-muted text-sm\">12 hours</span>
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t<i class=\"fas fa-file mr-2\"></i>
\t\t\t\t\t3 new reports
\t\t\t\t\t<span class=\"float-right text-muted text-sm\">2 days</span>
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t<a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Notifications</a>
\t\t\t</div>
\t\t</li>
\t\t<!-- User Dropdown Menu -->
\t\t<li class=\"nav-item dropdown\">
\t\t\t<a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t<i class=\"far fa-user\"></i>
\t\t\t</a>
\t\t\t<div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
\t\t\t\t<span class=\"dropdown-item dropdown-header\">
\t\t\t\t\t<img src=\"{{ asset('admin-lte/dist/img/user2-160x160.jpg') }}\" class=\"img-circle elevation-2\" alt=\"User Image\">
\t\t\t\t</span>

\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\tUser: GOBI Gobi
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t<a href=\"{{ path('logout') }}\" class=\"dropdown-item dropdown-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-info\" href=\"{{ path('logout') }}\">Se déconnecter</button>
\t\t\t\t</a>
\t\t\t</div>
\t\t</li>

\t\t<li class=\"nav-item\">
\t\t\t<a class=\"nav-link\" data-widget=\"control-sidebar\" data-slide=\"true\" href=\"#\">
\t\t\t\t<i class=\"fas fa-th-large\"></i>
\t\t\t</a>
\t\t</li>
\t</ul>
</nav>
<!-- /.navbar -->
", "partials/header.html.twig", "G:\\TPS\\grh\\templates\\partials\\header.html.twig");
    }
}
