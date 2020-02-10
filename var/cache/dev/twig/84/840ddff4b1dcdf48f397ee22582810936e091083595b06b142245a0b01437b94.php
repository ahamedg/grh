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

/* cloud_compte/compte/nouveauCloudFamilleCompte.html.twig */
class __TwigTemplate_ee028854800c3a0d0b4401e01e55b9bca86a423a240c2bcd826a1cfd2141836a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cloud_compte/compte/nouveauCloudFamilleCompte.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cloud_compte/compte/nouveauCloudFamilleCompte.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cloud_compte/compte/nouveauCloudFamilleCompte.html.twig", 1);
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
        echo "    pro6- GRH / Création d'un compte
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
        echo "    <li class=\"breadcrumb-item active\"> Nouveau compte</li>
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
        $this->loadTemplate("cloud_compte/pills/paramComptePills.html.twig", "cloud_compte/compte/nouveauCloudFamilleCompte.html.twig", 10)->display($context);
        // line 11
        echo "    <br/>
    <div class=\"container\">
        ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start');
        echo "
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div id=\"typeCompte\" class=\"form-group\">
                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "cloudTypeCompte", [], "any", false, false, false, 17), 'label', ["label" => "Type de compte *"]);
        echo "
                    <div class=\"row\">
                        <div class=\"col-md-10\">
                            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "cloudTypeCompte", [], "any", false, false, false, 20), 'widget');
        echo "
                        </div>
                        <div class=\"col-md-2\">
                            <button class=\"btn btn-success float-left\" style=\"width: 40px\">
                                <i class=\"fa fa-plus\"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "designationCloudFamilleCompte", [], "any", false, false, false, 30), 'label');
        echo "
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "designationCloudFamilleCompte", [], "any", false, false, false, 31), 'widget');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "codeAccesCloudFamilleCompte", [], "any", false, false, false, 34), 'label');
        echo "
                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "codeAccesCloudFamilleCompte", [], "any", false, false, false, 35), 'widget');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "cleAccesCloudFamilleCompte", [], "any", false, false, false, 38), 'label');
        echo "
                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "cleAccesCloudFamilleCompte", [], "any", false, false, false, 39), 'widget');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "sigleCloudFamilleCompte", [], "any", false, false, false, 42), 'label');
        echo "
                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "sigleCloudFamilleCompte", [], "any", false, false, false, 43), 'widget');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "emailCloudFamilleCompte", [], "any", false, false, false, 46), 'label');
        echo "
                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "emailCloudFamilleCompte", [], "any", false, false, false, 47), 'widget');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "telephoneCloudFamilleCompte", [], "any", false, false, false, 50), 'label');
        echo "
                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "telephoneCloudFamilleCompte", [], "any", false, false, false, 51), 'widget');
        echo "
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "logoCloudFamilleCompte", [], "any", false, false, false, 56), 'label');
        echo "
                    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "logoCloudFamilleCompte", [], "any", false, false, false, 57), 'widget');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "pays", [], "any", false, false, false, 60), 'label', ["label" => "Pays *"]);
        echo "
                    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "pays", [], "any", false, false, false, 61), 'widget');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "states", [], "any", false, false, false, 64), 'label', ["label" => "State/Région *"]);
        echo "
                    ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "states", [], "any", false, false, false, 65), 'widget');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "ville", [], "any", false, false, false, 68), 'label', ["label" => "Ville *"]);
        echo "
                    ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "ville", [], "any", false, false, false, 69), 'widget');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "adresseCloudFamilleCompte", [], "any", false, false, false, 72), 'label');
        echo "
                    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "adresseCloudFamilleCompte", [], "any", false, false, false, 73), 'widget');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "descriptionCloudFamilleCompte", [], "any", false, false, false, 76), 'label');
        echo "
                    ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "descriptionCloudFamilleCompte", [], "any", false, false, false, 77), 'widget');
        echo "
                </div>
                <br/>
                <div class=\"form-group\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                <button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>
                                <a href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("compte");
        echo "\" class=\"\">
                                    <button type=\"reset\" href=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("compte");
        echo "\"
                                            class=\"btn btn-secondary float-right\">Annuler
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class=\"col-md-6\"></div>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 97
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), 'form_end');
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cloud_compte/compte/nouveauCloudFamilleCompte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 97,  276 => 86,  272 => 85,  261 => 77,  257 => 76,  251 => 73,  247 => 72,  241 => 69,  237 => 68,  231 => 65,  227 => 64,  221 => 61,  217 => 60,  211 => 57,  207 => 56,  199 => 51,  195 => 50,  189 => 47,  185 => 46,  179 => 43,  175 => 42,  169 => 39,  165 => 38,  159 => 35,  155 => 34,  149 => 31,  145 => 30,  132 => 20,  126 => 17,  119 => 13,  115 => 11,  112 => 10,  102 => 9,  91 => 6,  81 => 5,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    pro6- GRH / Création d'un compte
{% endblock %}
{% block  breadcrumb %}
    <li class=\"breadcrumb-item active\"> Nouveau compte</li>
{% endblock %}

{% block body_inside %}
    {% include 'cloud_compte/pills/paramComptePills.html.twig' %}
    <br/>
    <div class=\"container\">
        {{ form_start(form) }}
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div id=\"typeCompte\" class=\"form-group\">
                    {{ form_label(form.cloudTypeCompte, 'Type de compte *') }}
                    <div class=\"row\">
                        <div class=\"col-md-10\">
                            {{ form_widget(form.cloudTypeCompte) }}
                        </div>
                        <div class=\"col-md-2\">
                            <button class=\"btn btn-success float-left\" style=\"width: 40px\">
                                <i class=\"fa fa-plus\"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.designationCloudFamilleCompte) }}
                    {{ form_widget(form.designationCloudFamilleCompte) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.codeAccesCloudFamilleCompte) }}
                    {{ form_widget(form.codeAccesCloudFamilleCompte) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.cleAccesCloudFamilleCompte) }}
                    {{ form_widget(form.cleAccesCloudFamilleCompte) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.sigleCloudFamilleCompte) }}
                    {{ form_widget(form.sigleCloudFamilleCompte) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.emailCloudFamilleCompte) }}
                    {{ form_widget(form.emailCloudFamilleCompte) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.telephoneCloudFamilleCompte) }}
                    {{ form_widget(form.telephoneCloudFamilleCompte) }}
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    {{ form_label(form.logoCloudFamilleCompte) }}
                    {{ form_widget(form.logoCloudFamilleCompte) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.pays, 'Pays *') }}
                    {{ form_widget(form.pays) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.states, 'State/Région *') }}
                    {{ form_widget(form.states) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.ville, 'Ville *') }}
                    {{ form_widget(form.ville) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.adresseCloudFamilleCompte) }}
                    {{ form_widget(form.adresseCloudFamilleCompte) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.descriptionCloudFamilleCompte) }}
                    {{ form_widget(form.descriptionCloudFamilleCompte) }}
                </div>
                <br/>
                <div class=\"form-group\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                <button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>
                                <a href=\"{{ path('compte') }}\" class=\"\">
                                    <button type=\"reset\" href=\"{{ path('compte') }}\"
                                            class=\"btn btn-secondary float-right\">Annuler
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class=\"col-md-6\"></div>
                    </div>
                </div>
            </div>
        </div>
        {{ form_end(form) }}
    </div>
{% endblock %}", "cloud_compte/compte/nouveauCloudFamilleCompte.html.twig", "D:\\GOLDMAN\\PROJECTS\\Symfony\\GRH\\templates\\cloud_compte\\compte\\nouveauCloudFamilleCompte.html.twig");
    }
}
