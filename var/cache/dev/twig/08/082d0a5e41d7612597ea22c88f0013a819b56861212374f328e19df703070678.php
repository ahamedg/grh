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
class __TwigTemplate_24728d479bc4722f7b5eeacb074b9c353685c19665f6c9db7da0c4c183fce020 extends Template
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
        echo "\">Comptes</a></li>
        <li class=\"active\"><a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sous_compte");
        echo "\">Sous-comptes</a></li>
        ";
        // line 11
        echo "    </ul>
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
        return array (  75 => 11,  71 => 9,  67 => 8,  63 => 7,  59 => 6,  55 => 5,  51 => 4,  47 => 3,  43 => 1,);
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
        <li class=\"active\"><a href=\"{{ path('compte') }}\">Comptes</a></li>
        <li class=\"active\"><a href=\"{{ path('sous_compte') }}\">Sous-comptes</a></li>
        {# <li class=\"active\"><a href=\"{{ path('service_new') }}\">Nouveau service/subdivision</a></li> #}
    </ul>
</div>
", "cloud_compte/pills/paramComptePills.html.twig", "G:\\TPS\\grh\\templates\\cloud_compte\\pills\\paramComptePills.html.twig");
    }
}
