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

/* cloud_compte/pills/localisationPills.html.twig */
class __TwigTemplate_10ea442313fae0e9a42886fc1b6fc3915db4528d22099159944a50f31eaec2aa extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cloud_compte/pills/localisationPills.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cloud_compte/pills/localisationPills.html.twig"));

        // line 1
        echo "<div class=\"container\">
    <ul class=\"nav nav-pills\">
        <li class=\"active\">
            <a href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pays");
        echo "\">Pays</a>
        </li>
        <li class=\"active\">
            <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("states");
        echo "\">States & Régions</a>
        </li>
        <li class=\"active\">
            <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ville");
        echo "\">Ville</a>
        </li>
        <li class=\"active\">
            <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prefecture");
        echo "\">Préfecture</a>
        </li>
        <li class=\"active\">
            <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commune");
        echo "\">Commune</a>
        </li>
    </ul>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "cloud_compte/pills/localisationPills.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 16,  66 => 13,  60 => 10,  54 => 7,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <ul class=\"nav nav-pills\">
        <li class=\"active\">
            <a href=\"{{ path('pays') }}\">Pays</a>
        </li>
        <li class=\"active\">
            <a href=\"{{ path('states') }}\">States & Régions</a>
        </li>
        <li class=\"active\">
            <a href=\"{{ path('ville') }}\">Ville</a>
        </li>
        <li class=\"active\">
            <a href=\"{{ path('prefecture') }}\">Préfecture</a>
        </li>
        <li class=\"active\">
            <a href=\"{{ path('commune') }}\">Commune</a>
        </li>
    </ul>
</div>
", "cloud_compte/pills/localisationPills.html.twig", "G:\\TPS\\grh\\templates\\cloud_compte\\pills\\localisationPills.html.twig");
    }
}
