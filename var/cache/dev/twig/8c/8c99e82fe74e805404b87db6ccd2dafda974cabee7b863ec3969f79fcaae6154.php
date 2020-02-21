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

/* cloud_compte/compte/editCloudCompte.html.twig */
class __TwigTemplate_3da967a51961a754c8b91b2ed3e03b667917948157fa78e6cb9839ba51bb9c3f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cloud_compte/compte/editCloudCompte.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cloud_compte/compte/editCloudCompte.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cloud_compte/compte/editCloudCompte.html.twig", 1);
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
        echo "\tpro6- GRH / Modification d'un sous-compte
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
        echo "\t<li class=\"breadcrumb-item active\">Modification sous-compte</li>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body_inside($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_inside"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_inside"));

        // line 9
        echo "\t";
        $this->loadTemplate("cloud_compte/pills/paramComptePills.html.twig", "cloud_compte/compte/editCloudCompte.html.twig", 9)->display($context);
        // line 10
        echo "\t<br>
\t<div class=\"container\">
\t\t<h3>Modification du sous-compte «<strong>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cloudCompte"]) || array_key_exists("cloudCompte", $context) ? $context["cloudCompte"] : (function () { throw new RuntimeError('Variable "cloudCompte" does not exist.', 12, $this->source); })()), "designationCloudCompte", [], "any", false, false, false, 12), "html", null, true);
        echo "</strong>»</h3>
\t\t<hr style=\"margin-top: auto; color: black\">
\t\t";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start');
        echo "
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 18
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["cloudCompte"]) || array_key_exists("cloudCompte", $context) ? $context["cloudCompte"] : (function () { throw new RuntimeError('Variable "cloudCompte" does not exist.', 18, $this->source); })()), "cloudCompte", [], "any", false, false, false, 18), null)) {
            // line 19
            echo "\t\t\t\t\t\t<label>Compte parent *</label>
\t\t\t\t\t\t<textarea class=\"form-control\" rows=\"2\" id=\"compteParent\" style=\"text-transform: uppercase;\" disabled>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cloudFamilleCompte"]) || array_key_exists("cloudFamilleCompte", $context) ? $context["cloudFamilleCompte"] : (function () { throw new RuntimeError('Variable "cloudFamilleCompte" does not exist.', 20, $this->source); })()), "designationCloudFamilleCompte", [], "any", false, false, false, 20), "html", null, true);
            echo "</textarea>
\t\t\t\t\t";
        } else {
            // line 22
            echo "\t\t\t\t\t\t<label>Compte parent *</label>
\t\t\t\t\t\t<textarea class=\"form-control\" rows=\"2\" id=\"compteParent\" style=\"text-transform: uppercase;\" disabled>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cloudCompte"]) || array_key_exists("cloudCompte", $context) ? $context["cloudCompte"] : (function () { throw new RuntimeError('Variable "cloudCompte" does not exist.', 23, $this->source); })()), "designationCloudCompte", [], "any", false, false, false, 23), "html", null, true);
            echo "</textarea>

\t\t\t\t\t";
        }
        // line 26
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "designationCloudCompte", [], "any", false, false, false, 29), 'row');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "sigleCloudCompte", [], "any", false, false, false, 32), 'row');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "emailCloudCompte", [], "any", false, false, false, 35), 'row');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "logoCloudCompte", [], "any", false, false, false, 38), 'row');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "adresseCloudCompte", [], "any", false, false, false, 41), 'row');
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "telephone1CloudCompte", [], "any", false, false, false, 46), 'row');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "telephone2CloudCompte", [], "any", false, false, false, 49), 'row');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "pays", [], "any", false, false, false, 52), 'row');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "states", [], "any", false, false, false, 55), 'row');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "ville", [], "any", false, false, false, 58), 'row');
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<br>
\t\t<label>Localisation</label>
\t\t<hr style=\"margin-top: auto; color: red\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "cloudCategorieService", [], "any", false, false, false, 68), 'row');
        echo "
\t\t\t\t\t";
        // line 79
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "cloudTypeService", [], "any", false, false, false, 81), 'row');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "prefecture", [], "any", false, false, false, 84), 'row');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "commune", [], "any", false, false, false, 87), 'row');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\"></div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "cloudTypeBudget", [], "any", false, false, false, 93), 'row');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "cloudSection", [], "any", false, false, false, 96), 'row');
        echo "
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\"></div>
\t\t\t\t<div class=\"form-group\"></div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"form-group\"></div>
\t\t\t\t<div class=\"form-group\"></div>
\t\t\t\t<div class=\"form-group\"></div>
\t\t\t\t<div class=\"form-group\"></div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\"></div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>&#160;&#160;&#160;&#160;
\t\t\t\t\t\t<a href=\"";
        // line 115
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sous_compte");
        echo "\" class=\"\">
\t\t\t\t\t\t\t<button type=\"reset\" href=\"";
        // line 116
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sous_compte");
        echo "\" class=\"btn btn-secondary\">Annuler
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\"></div>
\t\t\t\t<div class=\"col-md-4\"></div>
\t\t\t</div>
\t\t</div>
\t\t";
        // line 125
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), 'form_end');
        echo "
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cloud_compte/compte/editCloudCompte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 125,  285 => 116,  281 => 115,  259 => 96,  253 => 93,  244 => 87,  238 => 84,  232 => 81,  228 => 79,  224 => 68,  211 => 58,  205 => 55,  199 => 52,  193 => 49,  187 => 46,  179 => 41,  173 => 38,  167 => 35,  161 => 32,  155 => 29,  150 => 26,  144 => 23,  141 => 22,  136 => 20,  133 => 19,  131 => 18,  124 => 14,  119 => 12,  115 => 10,  112 => 9,  102 => 8,  91 => 6,  81 => 5,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
\tpro6- GRH / Modification d'un sous-compte
{% endblock %}
{% block  breadcrumb %}
\t<li class=\"breadcrumb-item active\">Modification sous-compte</li>
{% endblock %}
{% block body_inside %}
\t{% include 'cloud_compte/pills/paramComptePills.html.twig' %}
\t<br>
\t<div class=\"container\">
\t\t<h3>Modification du sous-compte «<strong>{{cloudCompte.designationCloudCompte}}</strong>»</h3>
\t\t<hr style=\"margin-top: auto; color: black\">
\t\t{{ form_start(form) }}
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{% if cloudCompte.cloudCompte==null %}
\t\t\t\t\t\t<label>Compte parent *</label>
\t\t\t\t\t\t<textarea class=\"form-control\" rows=\"2\" id=\"compteParent\" style=\"text-transform: uppercase;\" disabled>{{cloudFamilleCompte.designationCloudFamilleCompte}}</textarea>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<label>Compte parent *</label>
\t\t\t\t\t\t<textarea class=\"form-control\" rows=\"2\" id=\"compteParent\" style=\"text-transform: uppercase;\" disabled>{{cloudCompte.designationCloudCompte}}</textarea>

\t\t\t\t\t{% endif %}

\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_row(form.designationCloudCompte) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_row(form.sigleCloudCompte) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_row(form.emailCloudCompte) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_row(form.logoCloudCompte) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_row(form.adresseCloudCompte) }}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_row(form.telephone1CloudCompte) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_row(form.telephone2CloudCompte) }}
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
\t\t\t</div>
\t\t</div>
\t\t<br>
\t\t<label>Localisation</label>
\t\t<hr style=\"margin-top: auto; color: red\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_row(form.cloudCategorieService) }}
\t\t\t\t\t{#<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        <div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        <div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                <button class=\"btn btn-success\" title=\"Ajouter une catégorie de service\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        style=\"width: 40px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                    <i class=\"fa fa-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                </button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    </div>#}
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_row(form.cloudTypeService) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_row(form.prefecture) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_row(form.commune) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\"></div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_row(form.cloudTypeBudget) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_row(form.cloudSection) }}
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\"></div>
\t\t\t\t<div class=\"form-group\"></div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"form-group\"></div>
\t\t\t\t<div class=\"form-group\"></div>
\t\t\t\t<div class=\"form-group\"></div>
\t\t\t\t<div class=\"form-group\"></div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\"></div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>&#160;&#160;&#160;&#160;
\t\t\t\t\t\t<a href=\"{{ path('sous_compte') }}\" class=\"\">
\t\t\t\t\t\t\t<button type=\"reset\" href=\"{{ path('sous_compte') }}\" class=\"btn btn-secondary\">Annuler
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\"></div>
\t\t\t\t<div class=\"col-md-4\"></div>
\t\t\t</div>
\t\t</div>
\t\t{{ form_end(form) }}
\t</div>
{% endblock %}
", "cloud_compte/compte/editCloudCompte.html.twig", "G:\\TPS\\grh\\templates\\cloud_compte\\compte\\editCloudCompte.html.twig");
    }
}
