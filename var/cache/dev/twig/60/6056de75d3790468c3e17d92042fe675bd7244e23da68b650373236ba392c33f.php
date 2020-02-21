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

/* utilisateur/listUtilisateur.html.twig */
class __TwigTemplate_0898b00c20892f9a43b0f6a6d8f608ad2b5d23bdc165d19401d1c2a5fe82f012 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/listUtilisateur.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/listUtilisateur.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/listUtilisateur.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 3
        echo "\t<li class=\"breadcrumb-item active\">
\t\tListe des utilisateurs</li>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body_inside($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_inside"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_inside"));

        // line 7
        echo "\t<div class=\"container\">
\t\t<div class=\"form-group\">
\t\t\t<a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_new");
        echo "\" class=\"\">
\t\t\t\t<button type=\"button\" class=\"btn btn-info\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_new");
        echo "\">Créer un utilisateur</button>
\t\t\t</a>
\t\t</div>
\t\t<div class=\"card card-secondary\">
\t\t\t<div class=\"card-header\">
\t\t\t\tLes différents utilisateurs
\t\t\t</div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th style=\"width: 3%\"></th>
\t\t\t\t\t\t\t<th style=\"width: 10%\" class=\"text-center\">Profil</th>
\t\t\t\t\t\t\t<th style=\"width: 15%\" class=\"text-center\">Nom d'utilisateur</th>
\t\t\t\t\t\t\t<th style=\"width: 40%\" class=\"text-center\">Contacts</th>
\t\t\t\t\t\t\t<th style=\"width: 5%\" class=\"text-center\">Etat</th>
\t\t\t\t\t\t\t<th style=\"width: 20%\" class=\"text-center\">Action</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listUtilisateur"]) || array_key_exists("listUtilisateur", $context) ? $context["listUtilisateur"] : (function () { throw new RuntimeError('Variable "listUtilisateur" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 31
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" value=\"\">
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/dist/img/manager.png"), "html", null, true);
            echo "\" alt=\"Photo de profil\" width=\"100%\" class=\"center-block\">
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "username", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>Adresse :
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\tTel :
\t\t\t\t\t\t\t\t\t";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "telephone1Utilisateur", [], "any", false, false, false, 44), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t/
\t\t\t\t\t\t\t\t\t";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "telephone2Utilisateur", [], "any", false, false, false, 46), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\temail :
\t\t\t\t\t\t\t\t\t";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "emailCompte", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>Etat</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<i id=\"btnEdit\" title=\"Modifier un utilisateur\" class=\"far fa-edit\" style=\"font-size:16px;\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t&#160;&#160;
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-list-alt\"></i>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<ul class=\"pagination justify-content-end float-sm-right\">
\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t<a class=\"page-link\" href=\"javascript:void(0);\">Previous</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t<a class=\"page-link\" href=\"javascript:void(0);\">1</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t<a class=\"page-link\" href=\"javascript:void(0);\">2</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t<a class=\"page-link\" href=\"javascript:void(0);\">Next</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/listUtilisateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 60,  164 => 52,  158 => 49,  152 => 46,  147 => 44,  140 => 40,  135 => 38,  126 => 31,  122 => 30,  99 => 10,  95 => 9,  91 => 7,  81 => 6,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block  breadcrumb %}
\t<li class=\"breadcrumb-item active\">
\t\tListe des utilisateurs</li>
{% endblock %}
{% block body_inside %}
\t<div class=\"container\">
\t\t<div class=\"form-group\">
\t\t\t<a href=\"{{ path('utilisateur_new') }}\" class=\"\">
\t\t\t\t<button type=\"button\" class=\"btn btn-info\" href=\"{{ path('utilisateur_new') }}\">Créer un utilisateur</button>
\t\t\t</a>
\t\t</div>
\t\t<div class=\"card card-secondary\">
\t\t\t<div class=\"card-header\">
\t\t\t\tLes différents utilisateurs
\t\t\t</div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th style=\"width: 3%\"></th>
\t\t\t\t\t\t\t<th style=\"width: 10%\" class=\"text-center\">Profil</th>
\t\t\t\t\t\t\t<th style=\"width: 15%\" class=\"text-center\">Nom d'utilisateur</th>
\t\t\t\t\t\t\t<th style=\"width: 40%\" class=\"text-center\">Contacts</th>
\t\t\t\t\t\t\t<th style=\"width: 5%\" class=\"text-center\">Etat</th>
\t\t\t\t\t\t\t<th style=\"width: 20%\" class=\"text-center\">Action</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% for u in listUtilisateur %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" value=\"\">
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('admin-lte/dist/img/manager.png') }}\" alt=\"Photo de profil\" width=\"100%\" class=\"center-block\">
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>{{ u.username }}</td>
\t\t\t\t\t\t\t\t<td>Adresse :
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\tTel :
\t\t\t\t\t\t\t\t\t{{ u.telephone1Utilisateur }}
\t\t\t\t\t\t\t\t\t/
\t\t\t\t\t\t\t\t\t{{ u.telephone2Utilisateur }}
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\temail :
\t\t\t\t\t\t\t\t\t{{ u.emailCompte }}</td>
\t\t\t\t\t\t\t\t<td>Etat</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\"{{path('utilisateur_edit', {'id': u.id})}}\">
\t\t\t\t\t\t\t\t\t\t<i id=\"btnEdit\" title=\"Modifier un utilisateur\" class=\"far fa-edit\" style=\"font-size:16px;\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t&#160;&#160;
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-list-alt\"></i>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<ul class=\"pagination justify-content-end float-sm-right\">
\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t<a class=\"page-link\" href=\"javascript:void(0);\">Previous</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t<a class=\"page-link\" href=\"javascript:void(0);\">1</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t<a class=\"page-link\" href=\"javascript:void(0);\">2</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t<a class=\"page-link\" href=\"javascript:void(0);\">Next</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "utilisateur/listUtilisateur.html.twig", "G:\\TPS\\grh\\templates\\utilisateur\\listUtilisateur.html.twig");
    }
}
