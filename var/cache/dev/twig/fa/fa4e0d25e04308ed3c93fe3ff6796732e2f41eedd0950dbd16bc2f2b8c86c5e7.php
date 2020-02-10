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

/* cloud_compte/compte/listCloudCompte.html.twig */
class __TwigTemplate_f2679cd39edaff776b40b48f924a309653347499a0e057fa88efdde16836e0d8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'body_inside' => [$this, 'block_body_inside'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cloud_compte/compte/listCloudCompte.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cloud_compte/compte/listCloudCompte.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cloud_compte/compte/listCloudCompte.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    pro6- GRH / Comptes
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 6
        echo "    <li class=\"breadcrumb-item active\"> Comptes</li>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body_inside($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_inside"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_inside"));

        // line 10
        echo "    ";
        $this->loadTemplate("cloud_compte/pills/paramComptePills.html.twig", "cloud_compte/compte/listCloudCompte.html.twig", 10)->display($context);
        // line 11
        echo "    <br/>
    <div class=\"container\">
        <div class=\"form-group\">
            <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("compte_new");
        echo "\" class=\"\">
                <button type=\"button\" class=\"btn btn-info\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("compte_new");
        echo "\">Nouveau compte</button>
            </a>
        </div>
        <table class=\"table table-bordered\">
            <thead class=\"bg-gradient-secondary\">
            <tr>
                <th style=\"width: 3%\"></th>
                <th style=\"width: 40%\">Libellé</th>
                <th style=\"width: 10%\">Sigle</th>
                <th style=\"width: 25%\">Contact</th>
                <th style=\"width: 20%\">Adresse</th>
                <th style=\"width: 10%\">Etat</th>
                ";
        // line 28
        echo "            </tr>
            </thead>
            <tbody>
            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listCloudCompte"]) || array_key_exists("listCloudCompte", $context) ? $context["listCloudCompte"] : (function () { throw new RuntimeError('Variable "listCloudCompte" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fc"]) {
            // line 32
            echo "                <tr>
                    <td>
                        <label>
                            <input type=\"checkbox\" class=\"form-check-input\" value=\"\">
                        </label>
                    </td>
                    <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fc"], "designationCloudCompte", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                    <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fc"], "logoCloudCompte", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fc"], "sigleCloudCompte", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                    <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fc"], "ville", [], "any", false, false, false, 41), "nomVille", [], "any", false, false, false, 41), "html", null, true);
            echo " &#160;(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fc"], "pays", [], "any", false, false, false, 41), "nomPays", [], "any", false, false, false, 41), "html", null, true);
            echo ") <br>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fc"], "telephone1CloudCompte", [], "any", false, false, false, 41), "html", null, true);
            echo "
                        / ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fc"], "telephone2CloudCompte", [], "any", false, false, false, 42), "html", null, true);
            echo " <br>(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fc"], "emailCloudFamilleCompte", [], "any", false, false, false, 42), "html", null, true);
            echo ")
                    </td>
                    <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fc"], "adresseCloudCompte", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                    <td>
                        <i id=\"btnEdit\" data-toggle=\"modal\"
                           data-target=\"#editCloudCategorieServiceModal\"
                           class=\"btn-default fa fa-edit\"></i>
                        <i class=\"fas fa-list-alt\"></i>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "            </tbody>
        </table>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cloud_compte/compte/listCloudCompte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 53,  183 => 44,  176 => 42,  168 => 41,  164 => 40,  160 => 39,  156 => 38,  148 => 32,  144 => 31,  139 => 28,  124 => 15,  120 => 14,  115 => 11,  112 => 10,  102 => 9,  91 => 6,  81 => 5,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    pro6- GRH / Comptes
{% endblock %}
{% block  breadcrumb %}
    <li class=\"breadcrumb-item active\"> Comptes</li>
{% endblock %}

{% block body_inside %}
    {% include 'cloud_compte/pills/paramComptePills.html.twig' %}
    <br/>
    <div class=\"container\">
        <div class=\"form-group\">
            <a href=\"{{ path('compte_new') }}\" class=\"\">
                <button type=\"button\" class=\"btn btn-info\" href=\"{{ path('compte_new') }}\">Nouveau compte</button>
            </a>
        </div>
        <table class=\"table table-bordered\">
            <thead class=\"bg-gradient-secondary\">
            <tr>
                <th style=\"width: 3%\"></th>
                <th style=\"width: 40%\">Libellé</th>
                <th style=\"width: 10%\">Sigle</th>
                <th style=\"width: 25%\">Contact</th>
                <th style=\"width: 20%\">Adresse</th>
                <th style=\"width: 10%\">Etat</th>
                {#<th style=\"width: 10%\">Action</th>#}
            </tr>
            </thead>
            <tbody>
            {% for fc in listCloudCompte %}
                <tr>
                    <td>
                        <label>
                            <input type=\"checkbox\" class=\"form-check-input\" value=\"\">
                        </label>
                    </td>
                    <td>{{ fc.designationCloudCompte }}</td>
                    <td>{{ fc.logoCloudCompte }}</td>
                    <td>{{ fc.sigleCloudCompte }}</td>
                    <td>{{ fc.ville.nomVille }} &#160;({{ fc.pays.nomPays }}) <br>{{ fc.telephone1CloudCompte }}
                        / {{ fc.telephone2CloudCompte }} <br>({{ fc.emailCloudFamilleCompte }})
                    </td>
                    <td>{{ fc.adresseCloudCompte }}</td>
                    <td>
                        <i id=\"btnEdit\" data-toggle=\"modal\"
                           data-target=\"#editCloudCategorieServiceModal\"
                           class=\"btn-default fa fa-edit\"></i>
                        <i class=\"fas fa-list-alt\"></i>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>

{% endblock %}
", "cloud_compte/compte/listCloudCompte.html.twig", "D:\\GOLDMAN\\PROJECTS\\Symfony\\GRH\\templates\\cloud_compte\\compte\\listCloudCompte.html.twig");
    }
}
