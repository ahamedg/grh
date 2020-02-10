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
        echo "\tpro6- GRH / Comptes
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
        echo "\t<li class=\"breadcrumb-item active\">
\t\tComptes</li>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body_inside($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_inside"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_inside"));

        // line 11
        echo "\t";
        $this->loadTemplate("cloud_compte/pills/paramComptePills.html.twig", "cloud_compte/compte/listCloudCompte.html.twig", 11)->display($context);
        // line 12
        echo "\t<br/>
\t<div class=\"container\">
\t\t<table class=\"table table-bordered\">
\t\t\t<thead class=\"bg-gradient-secondary\">
\t\t\t\t<tr>
\t\t\t\t\t<th style=\"width: 3%\"></th>
\t\t\t\t\t<th style=\"width: 20%\" class=\"text-center\">Nom du sous-compte</th>
\t\t\t\t\t<th style=\"width: 8%\" class=\"text-center\">Sigle</th>
\t\t\t\t\t<th style=\"width: 25%\" class=\"text-center\">Ville</th>
\t\t\t\t\t<th style=\"width: 40%\" class=\"text-center\">Contacts et Adresse</th>
\t\t\t\t\t<th style=\"width: 5%\" class=\"text-center\">Etat</th>
\t\t\t\t\t<th style=\"width: 10%\" class=\"text-center\">Action</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listCloudCompte"]) || array_key_exists("listCloudCompte", $context) ? $context["listCloudCompte"] : (function () { throw new RuntimeError('Variable "listCloudCompte" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 28
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" value=\"\">
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<p><img src=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/dist/img/globe.jpg"), "html", null, true);
            echo "\" alt=\"Logo de la société\" width=\"60%\" class=\"center-block\"></p>
\t\t\t\t\t\t\t<label style=\"text-transform: uppercase;\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "designationCloudCompte", [], "any", false, false, false, 36), "html", null, true);
            echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td style=\"text-transform: uppercase;\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "sigleCloudCompte", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "ville", [], "any", false, false, false, 39), "nomVille", [], "any", false, false, false, 39), "html", null, true);
            echo "
\t\t\t\t\t\t\t&#160;(";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "pays", [], "any", false, false, false, 40), "nomPays", [], "any", false, false, false, 40), "html", null, true);
            echo ")
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<span style=\"text-decoration: underline;\">
\t\t\t\t\t\t\t\t\t<strong>Contacts:</strong>
\t\t\t\t\t\t\t\t</span><br>
\t\t\t\t\t\t\t\t";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "telephone1CloudCompte", [], "any", false, false, false, 47), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "telephone2CloudCompte", [], "any", false, false, false, 47), "html", null, true);
            echo "<br>
\t\t\t\t\t\t\t\t";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "emailCloudCompte", [], "any", false, false, false, 48), "html", null, true);
            echo "
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<span style=\"text-decoration: underline;\">
\t\t\t\t\t\t\t\t\t<strong>Adresse:</strong><br>
\t\t\t\t\t\t\t\t\t";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "adresseCloudCompte", [], "any", false, false, false, 53), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t";
            // line 58
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["c"], "actif", [], "any", false, false, false, 58), true)) {
                // line 59
                echo "\t\t\t\t\t\t\t\t<i id=\"etatActif\" class=\"far fa-check-circle\" style=\"font-size:20px;color:green\" title=\"Compte actif\"></i>
\t\t\t\t\t\t\t";
            } else {
                // line 61
                echo "\t\t\t\t\t\t\t\t";
                // line 62
                echo "\t\t\t\t\t\t\t\t<i id=\"etatInactif\" class=\"far fa-times-circle\" style=\"font-size:20px;color:red\" title=\"Compte inactif\"></i>
\t\t\t\t\t\t\t";
            }
            // line 64
            echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("compte_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 66)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<i id=\"btnEdit\" title=\"Modifier un compte parent\" class=\"far fa-edit\" style=\"font-size:16px;\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sous_compte_new", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 69)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<i id=\"btnAdd\" title=\"Ajouter un sous-compte\" class=\"far fa-plus-square\" style=\"font-size:17px;color:green\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<i class=\"fas fa-list-alt\"></i>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "\t\t\t</tbody>
\t\t</table>
\t</div>

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
        return array (  231 => 77,  217 => 69,  211 => 66,  207 => 64,  203 => 62,  201 => 61,  197 => 59,  195 => 58,  187 => 53,  179 => 48,  173 => 47,  163 => 40,  159 => 39,  155 => 38,  150 => 36,  146 => 35,  137 => 28,  133 => 27,  116 => 12,  113 => 11,  103 => 10,  91 => 6,  81 => 5,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
\tpro6- GRH / Comptes
{% endblock %}
{% block  breadcrumb %}
\t<li class=\"breadcrumb-item active\">
\t\tComptes</li>
{% endblock %}

{% block body_inside %}
\t{% include 'cloud_compte/pills/paramComptePills.html.twig' %}
\t<br/>
\t<div class=\"container\">
\t\t<table class=\"table table-bordered\">
\t\t\t<thead class=\"bg-gradient-secondary\">
\t\t\t\t<tr>
\t\t\t\t\t<th style=\"width: 3%\"></th>
\t\t\t\t\t<th style=\"width: 20%\" class=\"text-center\">Nom du sous-compte</th>
\t\t\t\t\t<th style=\"width: 8%\" class=\"text-center\">Sigle</th>
\t\t\t\t\t<th style=\"width: 25%\" class=\"text-center\">Ville</th>
\t\t\t\t\t<th style=\"width: 40%\" class=\"text-center\">Contacts et Adresse</th>
\t\t\t\t\t<th style=\"width: 5%\" class=\"text-center\">Etat</th>
\t\t\t\t\t<th style=\"width: 10%\" class=\"text-center\">Action</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% for c in listCloudCompte %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" value=\"\">
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<p><img src=\"{{ asset('admin-lte/dist/img/globe.jpg') }}\" alt=\"Logo de la société\" width=\"60%\" class=\"center-block\"></p>
\t\t\t\t\t\t\t<label style=\"text-transform: uppercase;\">{{ c.designationCloudCompte }}</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td style=\"text-transform: uppercase;\">{{ c.sigleCloudCompte }}</td>
\t\t\t\t\t\t<td>{{ c.ville.nomVille }}
\t\t\t\t\t\t\t&#160;({{ c.pays.nomPays }})
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<span style=\"text-decoration: underline;\">
\t\t\t\t\t\t\t\t\t<strong>Contacts:</strong>
\t\t\t\t\t\t\t\t</span><br>
\t\t\t\t\t\t\t\t{{ c.telephone1CloudCompte }}/{{ c.telephone2CloudCompte }}<br>
\t\t\t\t\t\t\t\t{{ c.emailCloudCompte }}
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<span style=\"text-decoration: underline;\">
\t\t\t\t\t\t\t\t\t<strong>Adresse:</strong><br>
\t\t\t\t\t\t\t\t\t{{ c.adresseCloudCompte }}
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t{% if c.actif==true %}
\t\t\t\t\t\t\t\t<i id=\"etatActif\" class=\"far fa-check-circle\" style=\"font-size:20px;color:green\" title=\"Compte actif\"></i>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t{# <i id=\"etatInactif\" class=\"btn-success fas fa-check-circle\" style=\"width: 50%\"></i> #}
\t\t\t\t\t\t\t\t<i id=\"etatInactif\" class=\"far fa-times-circle\" style=\"font-size:20px;color:red\" title=\"Compte inactif\"></i>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<a href=\"{{path('compte_edit', {'id': c.id})}}\">
\t\t\t\t\t\t\t\t<i id=\"btnEdit\" title=\"Modifier un compte parent\" class=\"far fa-edit\" style=\"font-size:16px;\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"{{path('sous_compte_new', {'id': c.id})}}\">
\t\t\t\t\t\t\t\t<i id=\"btnAdd\" title=\"Ajouter un sous-compte\" class=\"far fa-plus-square\" style=\"font-size:17px;color:green\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<i class=\"fas fa-list-alt\"></i>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>
\t</div>

{% endblock %}
", "cloud_compte/compte/listCloudCompte.html.twig", "D:\\GOLDMAN\\PROJECTS\\Symfony\\GRH\\templates\\cloud_compte\\compte\\listCloudCompte.html.twig");
    }
}
