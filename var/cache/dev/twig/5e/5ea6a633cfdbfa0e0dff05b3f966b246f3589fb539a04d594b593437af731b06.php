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
class __TwigTemplate_1411ccff51ff4b72a5cdd74817560aada4fedada28dac0843cee42bfd086898f extends Template
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
        echo "<nav class=\"main-header navbar navbar-expand navbar-white\">
    <!-- Left navbar links -->
    <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\">
                <i class=\"fas fa-bars\"></i>
            </a>
        </li>
    </ul>


    <!-- Right navbar links -->
    <ul class=\"navbar-nav ml-auto\">
        <!-- Messages Dropdown Menu -->
        <li class=\"nav-item dropdown\">
            <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
                <i class=\"far fa-comments\"></i>
                <span class=\"badge badge-danger navbar-badge\">3</span>
            </a>
            <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
                <a href=\"#\" class=\"dropdown-item\">
                    <!-- Message Start -->
                    <div class=\"media\">
                        <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/user1-128x128.jpg"), "html", null, true);
        echo "\" alt=\"User Avatar\" class=\"img-size-50 mr-3 img-circle\">
                        <div class=\"media-body\">
                            <h3 class=\"dropdown-item-title\">
                                Brad Diesel
                                <span class=\"float-right text-sm text-danger\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-star\"></i>
\t\t\t\t\t\t\t\t</span>
                            </h3>
                            <p class=\"text-sm\">Call me whenever you can...</p>
                            <p class=\"text-sm text-muted\">
                                <i class=\"far fa-clock mr-1\"></i>
                                4 Hours Ago</p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <div class=\"dropdown-divider\"></div>
                <a href=\"#\" class=\"dropdown-item\">
                    <!-- Message Start -->
                    <div class=\"media\">
                        <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/user8-128x128.jpg"), "html", null, true);
        echo "\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
                        <div class=\"media-body\">
                            <h3 class=\"dropdown-item-title\">
                                John Pierce
                                <span class=\"float-right text-sm text-muted\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-star\"></i>
\t\t\t\t\t\t\t\t</span>
                            </h3>
                            <p class=\"text-sm\">I got your message bro</p>
                            <p class=\"text-sm text-muted\">
                                <i class=\"far fa-clock mr-1\"></i>
                                4 Hours Ago</p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <div class=\"dropdown-divider\"></div>
                <a href=\"#\" class=\"dropdown-item\">
                    <!-- Message Start -->
                    <div class=\"media\">
                        <img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/user3-128x128.jpg"), "html", null, true);
        echo "\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
                        <div class=\"media-body\">
                            <h3 class=\"dropdown-item-title\">
                                Nora Silvester
                                <span class=\"float-right text-sm text-warning\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-star\"></i>
\t\t\t\t\t\t\t\t</span>
                            </h3>
                            <p class=\"text-sm\">The subject goes here</p>
                            <p class=\"text-sm text-muted\">
                                <i class=\"far fa-clock mr-1\"></i>
                                4 Hours Ago</p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <div class=\"dropdown-divider\"></div>
                <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Messages</a>
            </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class=\"nav-item dropdown\">
            <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
                <i class=\"far fa-bell\"></i>
                <span class=\"badge badge-warning navbar-badge\">15</span>
            </a>
            <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
                <span class=\"dropdown-item dropdown-header\">15 Notifications</span>
                <div class=\"dropdown-divider\"></div>
                <a href=\"#\" class=\"dropdown-item\">
                    <i class=\"fas fa-envelope mr-2\"></i>
                    4 new messages
                    <span class=\"float-right text-muted text-sm\">3 mins</span>
                </a>
                <div class=\"dropdown-divider\"></div>
                <a href=\"#\" class=\"dropdown-item\">
                    <i class=\"fas fa-users mr-2\"></i>
                    8 friend requests
                    <span class=\"float-right text-muted text-sm\">12 hours</span>
                </a>
                <div class=\"dropdown-divider\"></div>
                <a href=\"#\" class=\"dropdown-item\">
                    <i class=\"fas fa-file mr-2\"></i>
                    3 new reports
                    <span class=\"float-right text-muted text-sm\">2 days</span>
                </a>
                <div class=\"dropdown-divider\"></div>
                <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Notifications</a>
            </div>
        </li>
        <!-- User Dropdown Menu -->
        <li class=\"nav-item dropdown\">
            <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
                <i class=\"far fa-user\"></i>
            </a>
            <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
\t\t\t\t<span class=\"dropdown-item dropdown-header\">
\t\t\t\t\t<img src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle elevation-2\"
                         alt=\"User Image\">
\t\t\t\t</span>

                <div class=\"dropdown-divider\"></div>
                <a href=\"#\" class=\"dropdown-item\">
                    User: GOBI Gobi
                </a>
                <div class=\"dropdown-divider\"></div>
                <a href=\"";
        // line 130
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\" class=\"dropdown-item dropdown-footer\">
                    <button type=\"button\" class=\"btn btn-info\" href=\"";
        // line 131
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\">Se déconnecter</button>
                </a>
            </div>
        </li>

        <li class=\"nav-item\">
            <a class=\"nav-link\" data-widget=\"control-sidebar\" data-slide=\"true\" href=\"#\">
                <i class=\"fas fa-th-large\"></i>
            </a>
        </li>
    </ul>
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
        return array (  190 => 131,  186 => 130,  174 => 121,  114 => 64,  91 => 44,  68 => 24,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"main-header navbar navbar-expand navbar-white\">
    <!-- Left navbar links -->
    <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\">
                <i class=\"fas fa-bars\"></i>
            </a>
        </li>
    </ul>


    <!-- Right navbar links -->
    <ul class=\"navbar-nav ml-auto\">
        <!-- Messages Dropdown Menu -->
        <li class=\"nav-item dropdown\">
            <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
                <i class=\"far fa-comments\"></i>
                <span class=\"badge badge-danger navbar-badge\">3</span>
            </a>
            <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
                <a href=\"#\" class=\"dropdown-item\">
                    <!-- Message Start -->
                    <div class=\"media\">
                        <img src=\"{{asset('dist/img/user1-128x128.jpg')}}\" alt=\"User Avatar\" class=\"img-size-50 mr-3 img-circle\">
                        <div class=\"media-body\">
                            <h3 class=\"dropdown-item-title\">
                                Brad Diesel
                                <span class=\"float-right text-sm text-danger\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-star\"></i>
\t\t\t\t\t\t\t\t</span>
                            </h3>
                            <p class=\"text-sm\">Call me whenever you can...</p>
                            <p class=\"text-sm text-muted\">
                                <i class=\"far fa-clock mr-1\"></i>
                                4 Hours Ago</p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <div class=\"dropdown-divider\"></div>
                <a href=\"#\" class=\"dropdown-item\">
                    <!-- Message Start -->
                    <div class=\"media\">
                        <img src=\"{{asset('dist/img/user8-128x128.jpg')}}\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
                        <div class=\"media-body\">
                            <h3 class=\"dropdown-item-title\">
                                John Pierce
                                <span class=\"float-right text-sm text-muted\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-star\"></i>
\t\t\t\t\t\t\t\t</span>
                            </h3>
                            <p class=\"text-sm\">I got your message bro</p>
                            <p class=\"text-sm text-muted\">
                                <i class=\"far fa-clock mr-1\"></i>
                                4 Hours Ago</p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <div class=\"dropdown-divider\"></div>
                <a href=\"#\" class=\"dropdown-item\">
                    <!-- Message Start -->
                    <div class=\"media\">
                        <img src=\"{{asset('dist/img/user3-128x128.jpg')}}\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
                        <div class=\"media-body\">
                            <h3 class=\"dropdown-item-title\">
                                Nora Silvester
                                <span class=\"float-right text-sm text-warning\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-star\"></i>
\t\t\t\t\t\t\t\t</span>
                            </h3>
                            <p class=\"text-sm\">The subject goes here</p>
                            <p class=\"text-sm text-muted\">
                                <i class=\"far fa-clock mr-1\"></i>
                                4 Hours Ago</p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <div class=\"dropdown-divider\"></div>
                <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Messages</a>
            </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class=\"nav-item dropdown\">
            <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
                <i class=\"far fa-bell\"></i>
                <span class=\"badge badge-warning navbar-badge\">15</span>
            </a>
            <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
                <span class=\"dropdown-item dropdown-header\">15 Notifications</span>
                <div class=\"dropdown-divider\"></div>
                <a href=\"#\" class=\"dropdown-item\">
                    <i class=\"fas fa-envelope mr-2\"></i>
                    4 new messages
                    <span class=\"float-right text-muted text-sm\">3 mins</span>
                </a>
                <div class=\"dropdown-divider\"></div>
                <a href=\"#\" class=\"dropdown-item\">
                    <i class=\"fas fa-users mr-2\"></i>
                    8 friend requests
                    <span class=\"float-right text-muted text-sm\">12 hours</span>
                </a>
                <div class=\"dropdown-divider\"></div>
                <a href=\"#\" class=\"dropdown-item\">
                    <i class=\"fas fa-file mr-2\"></i>
                    3 new reports
                    <span class=\"float-right text-muted text-sm\">2 days</span>
                </a>
                <div class=\"dropdown-divider\"></div>
                <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Notifications</a>
            </div>
        </li>
        <!-- User Dropdown Menu -->
        <li class=\"nav-item dropdown\">
            <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
                <i class=\"far fa-user\"></i>
            </a>
            <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
\t\t\t\t<span class=\"dropdown-item dropdown-header\">
\t\t\t\t\t<img src=\"{{ asset('admin-lte/dist/img/user2-160x160.jpg') }}\" class=\"img-circle elevation-2\"
                         alt=\"User Image\">
\t\t\t\t</span>

                <div class=\"dropdown-divider\"></div>
                <a href=\"#\" class=\"dropdown-item\">
                    User: GOBI Gobi
                </a>
                <div class=\"dropdown-divider\"></div>
                <a href=\"{{ path('logout') }}\" class=\"dropdown-item dropdown-footer\">
                    <button type=\"button\" class=\"btn btn-info\" href=\"{{ path('logout') }}\">Se déconnecter</button>
                </a>
            </div>
        </li>

        <li class=\"nav-item\">
            <a class=\"nav-link\" data-widget=\"control-sidebar\" data-slide=\"true\" href=\"#\">
                <i class=\"fas fa-th-large\"></i>
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
", "partials/header.html.twig", "D:\\GOLDMAN\\PROJECTS\\Symfony\\GRH\\templates\\partials\\header.html.twig");
    }
}
