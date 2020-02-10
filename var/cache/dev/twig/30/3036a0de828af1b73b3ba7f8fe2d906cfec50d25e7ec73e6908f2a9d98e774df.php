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

/* cloud_compte/pills/paramComptePills.html.twig */
class __TwigTemplate_d62a26cd63e181bd68e98814f59e58329f86f1c399b37e5385f72c11b0e1fa73 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cloud_compte/pills/paramComptePills.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cloud_compte/pills/paramComptePills.html.twig"));

        // line 1
        echo "<div class=\"container\">
    <ul class=\"nav nav-pills\">
        <li class=\"active\"><a href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_service");
        echo "\">Catégorie service</a></li>
        <li class=\"active\"><a href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("type_service");
        echo "\">Type service</a></li>
        <li class=\"active\"><a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("type_compte");
        echo "\">Type compte</a></li>
        <li class=\"active\"><a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("type_budget");
        echo "\">Type budget</a></li>
        <li class=\"active\"><a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("section");
        echo "\">Section</a></li>
        <li class=\"active\"><a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("compte");
        echo "\">Compte</a></li>
        <li class=\"active\"><a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service");
        echo "\">Service/subdivision</a></li>
        <li class=\"active\"><a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service_new");
        echo "\">Nouveau service/subdivision</a></li>
    </ul>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "cloud_compte/pills/paramComptePills.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 10,  71 => 9,  67 => 8,  63 => 7,  59 => 6,  55 => 5,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <ul class=\"nav nav-pills\">
        <li class=\"active\"><a href=\"{{ path('categorie_service') }}\">Catégorie service</a></li>
        <li class=\"active\"><a href=\"{{ path('type_service') }}\">Type service</a></li>
        <li class=\"active\"><a href=\"{{ path('type_compte') }}\">Type compte</a></li>
        <li class=\"active\"><a href=\"{{ path('type_budget') }}\">Type budget</a></li>
        <li class=\"active\"><a href=\"{{ path('section') }}\">Section</a></li>
        <li class=\"active\"><a href=\"{{ path('compte') }}\">Compte</a></li>
        <li class=\"active\"><a href=\"{{ path('service') }}\">Service/subdivision</a></li>
        <li class=\"active\"><a href=\"{{ path('service_new') }}\">Nouveau service/subdivision</a></li>
    </ul>
</div>
", "cloud_compte/pills/paramComptePills.html.twig", "D:\\GOLDMAN\\PROJECTS\\Symfony\\GRH\\templates\\cloud_compte\\pills\\paramComptePills.html.twig");
    }
}
