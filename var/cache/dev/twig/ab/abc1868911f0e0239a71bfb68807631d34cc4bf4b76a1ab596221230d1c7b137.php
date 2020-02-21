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

/* cloud_compte/compte/editCloudFamilleCompte.html.twig */
class __TwigTemplate_1364b66f8d8bba5d19332248eb2e87af4c969e2f9126b5ed52cd1223546108d9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cloud_compte/compte/editCloudFamilleCompte.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cloud_compte/compte/editCloudFamilleCompte.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cloud_compte/compte/editCloudFamilleCompte.html.twig", 1);
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
        echo "\tpro6- GRH / Modification d'un compte
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
\t\tModification compte</li>
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
        $this->loadTemplate("cloud_compte/pills/paramComptePills.html.twig", "cloud_compte/compte/editCloudFamilleCompte.html.twig", 11)->display($context);
        // line 12
        echo "\t<br/>
\t<div class=\"container\">
\t\t<h3>Modification du sous-compte « <strong>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cloudCompte"]) || array_key_exists("cloudCompte", $context) ? $context["cloudCompte"] : (function () { throw new RuntimeError('Variable "cloudCompte" does not exist.', 14, $this->source); })()), "designationCloudCompte", [], "any", false, false, false, 14), "html", null, true);
        echo "</strong> »</h3>
\t<hr style=\"margin-top: auto; color: black\">
\t\t";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_start');
        echo "
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div id=\"typeCompte\" class=\"form-group\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "cloudTypeCompte", [], "any", false, false, false, 23), 'row');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<br/>
\t\t\t\t \t\t\t\t<button class=\"btn btn-success float-left\" style=\"width: 40px\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "designationCloudFamilleCompte", [], "any", false, false, false, 37), 'row');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "codeAccesCloudFamilleCompte", [], "any", false, false, false, 40), 'row');
        echo "
\t\t\t\t</div>
\t\t\t\t";
        // line 45
        echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "sigleCloudFamilleCompte", [], "any", false, false, false, 46), 'row');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "emailCloudFamilleCompte", [], "any", false, false, false, 49), 'row');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "telephoneCloudFamilleCompte", [], "any", false, false, false, 52), 'row');
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "logoCloudFamilleCompte", [], "any", false, false, false, 57), 'row');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "pays", [], "any", false, false, false, 60), 'row');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "states", [], "any", false, false, false, 63), 'row');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "ville", [], "any", false, false, false, 66), 'row');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "adresseCloudFamilleCompte", [], "any", false, false, false, 69), 'row');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "descriptionCloudFamilleCompte", [], "any", false, false, false, 72), 'row');
        echo "
\t\t\t\t</div>
\t\t\t\t<br/>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("compte");
        echo "\" class=\"\">
\t\t\t\t\t\t\t\t\t<button type=\"reset\" href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("compte");
        echo "\" class=\"btn btn-secondary float-right\">Annuler
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
        // line 91
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), 'form_end');
        echo "
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cloud_compte/compte/editCloudFamilleCompte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 91,  231 => 81,  227 => 80,  216 => 72,  210 => 69,  204 => 66,  198 => 63,  192 => 60,  186 => 57,  178 => 52,  172 => 49,  166 => 46,  163 => 45,  158 => 40,  152 => 37,  135 => 23,  125 => 16,  120 => 14,  116 => 12,  113 => 11,  103 => 10,  91 => 6,  81 => 5,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
\tpro6- GRH / Modification d'un compte
{% endblock %}
{% block  breadcrumb %}
\t<li class=\"breadcrumb-item active\">
\t\tModification compte</li>
{% endblock %}

{% block body_inside %}
\t{% include 'cloud_compte/pills/paramComptePills.html.twig' %}
\t<br/>
\t<div class=\"container\">
\t\t<h3>Modification du sous-compte « <strong>{{cloudCompte.designationCloudCompte}}</strong> »</h3>
\t<hr style=\"margin-top: auto; color: black\">
\t\t{{ form_start(form) }}
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div id=\"typeCompte\" class=\"form-group\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t{{ form_row(form.cloudTypeCompte) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<br/>
\t\t\t\t \t\t\t\t<button class=\"btn btn-success float-left\" style=\"width: 40px\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_row(form.designationCloudFamilleCompte) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_row(form.codeAccesCloudFamilleCompte) }}
\t\t\t\t</div>
\t\t\t\t{# <div class=\"form-group\">
\t\t\t\t\t{{ form_row(form.cleAccesCloudFamilleCompte) }}
\t\t\t\t</div> #}
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_row(form.sigleCloudFamilleCompte) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_row(form.emailCloudFamilleCompte) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_row(form.telephoneCloudFamilleCompte) }}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_row(form.logoCloudFamilleCompte) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_row(form.pays) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_row(form.states) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_row(form.ville) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_row(form.adresseCloudFamilleCompte) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_row(form.descriptionCloudFamilleCompte) }}
\t\t\t\t</div>
\t\t\t\t<br/>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>
\t\t\t\t\t\t\t\t<a href=\"{{ path('compte') }}\" class=\"\">
\t\t\t\t\t\t\t\t\t<button type=\"reset\" href=\"{{ path('compte') }}\" class=\"btn btn-secondary float-right\">Annuler
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t{{ form_end(form) }}
\t</div>
{% endblock %}
", "cloud_compte/compte/editCloudFamilleCompte.html.twig", "G:\\TPS\\grh\\templates\\cloud_compte\\compte\\editCloudFamilleCompte.html.twig");
    }
}
