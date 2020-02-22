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

/* personnel/params/paramPersonnelPills.html.twig */
class __TwigTemplate_c65363527ac7733baeb1809fac48594d0d2769fb622cfab77a975b076c3cc679 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "personnel/params/paramPersonnelPills.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "personnel/params/paramPersonnelPills.html.twig"));

        // line 1
        echo "<div class=\"container\">
    <ul class=\"nav nav-pills\">
        <li class=\"active\"><a href=\"#\">Civilité</a></li>
        <li class=\"active\"><a href=\"#\">Groupe de personnel</a></li>
        <li class=\"active\"><a href=\"#\">Fonction</a></li>
        <li class=\"active\"><a href=\"#\">Poste</a></li>
        <li class=\"active\"><a href=\"#\">Diplôme</a></li>
        <li class=\"active\"><a href=\"#\">Statut</a></li>
        <li class=\"active\"><a href=\"#\">Convention</a></li>
        <li class=\"active\"><a href=\"#\">Absence</a></li>
        <li class=\"active\"><a href=\"#\">Retard</a></li>

    </ul>
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "flashes", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 15
            echo "        <div class=\"container\">
            <div class=\"alert alert-";
            // line 16
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "\">
                ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 18
                echo "                    <p>";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</p>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "personnel/params/paramPersonnelPills.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 23,  82 => 20,  73 => 18,  69 => 17,  65 => 16,  62 => 15,  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <ul class=\"nav nav-pills\">
        <li class=\"active\"><a href=\"#\">Civilité</a></li>
        <li class=\"active\"><a href=\"#\">Groupe de personnel</a></li>
        <li class=\"active\"><a href=\"#\">Fonction</a></li>
        <li class=\"active\"><a href=\"#\">Poste</a></li>
        <li class=\"active\"><a href=\"#\">Diplôme</a></li>
        <li class=\"active\"><a href=\"#\">Statut</a></li>
        <li class=\"active\"><a href=\"#\">Convention</a></li>
        <li class=\"active\"><a href=\"#\">Absence</a></li>
        <li class=\"active\"><a href=\"#\">Retard</a></li>

    </ul>
    {% for label, messages in app.flashes %}
        <div class=\"container\">
            <div class=\"alert alert-{{ label }}\">
                {% for message in messages %}
                    <p>{{ message }}</p>
                {% endfor %}
            </div>
        </div>
    {% endfor %}
</div>
", "personnel/params/paramPersonnelPills.html.twig", "D:\\GOLDMAN\\PROJECTS\\Symfony\\GRH\\templates\\personnel\\params\\paramPersonnelPills.html.twig");
    }
}
