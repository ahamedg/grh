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

/* cloud_compte/compte/nouveauCloudCompte.html.twig */
class __TwigTemplate_dadc116775e5d81054d41258f0006e74e207f1d38de82d86a5d35e96be71221e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cloud_compte/compte/nouveauCloudCompte.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cloud_compte/compte/nouveauCloudCompte.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cloud_compte/compte/nouveauCloudCompte.html.twig", 1);
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
        echo "    pro6- GRH / Création d'un service/subdivision
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
        echo "    <li class=\"breadcrumb-item active\"> Nouveau service/subdivision</li>
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
        echo "    <br>
    <div class=\"container\">
        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start');
        echo "
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "cloudFamilleCompte", [], "any", false, false, false, 15), 'row');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "designationCloudCompte", [], "any", false, false, false, 18), 'row');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "sigleCloudCompte", [], "any", false, false, false, 21), 'row');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "emailCloudCompte", [], "any", false, false, false, 24), 'row');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "logoCloudCompte", [], "any", false, false, false, 27), 'row');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "adresseCloudCompte", [], "any", false, false, false, 30), 'row');
        echo "
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "telephone1CloudCompte", [], "any", false, false, false, 35), 'row');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "telephone2CloudCompte", [], "any", false, false, false, 38), 'row');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "pays", [], "any", false, false, false, 41), 'row');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "states", [], "any", false, false, false, 44), 'row');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "ville", [], "any", false, false, false, 47), 'row');
        echo "
                </div>
            </div>
        </div>
        <br>
        <label>Localisation</label>
        <hr style=\"margin-top: auto; color: red\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"form-group\">
                    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "cloudCategorieService", [], "any", false, false, false, 57), 'row');
        echo "
                    ";
        // line 68
        echo "                </div>
                <div class=\"form-group\">
                    ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "cloudTypeService", [], "any", false, false, false, 70), 'row');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "prefecture", [], "any", false, false, false, 73), 'row');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "commune", [], "any", false, false, false, 76), 'row');
        echo "
                </div>
                <div class=\"form-group\"></div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"form-group\">
                    ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "cloudTypeBudget", [], "any", false, false, false, 82), 'row');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "cloudSection", [], "any", false, false, false, 85), 'row');
        echo "
                </div>

                <div class=\"form-group\"></div>
                <div class=\"form-group\"></div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"form-group\"></div>
                <div class=\"form-group\"></div>
                <div class=\"form-group\"></div>
                <div class=\"form-group\"></div>
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"row\">
                <div class=\"col-md-4\"></div>
                <div class=\"col-md-4\">
                    <div class=\"form-group\">
                        <button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>&#160;&#160;&#160;&#160;
                        <a href=\"";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service");
        echo "\" class=\"\">
                            <button type=\"reset\" href=\"";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service");
        echo "\"
                                    class=\"btn btn-secondary\">Annuler
                            </button>
                        </a>
                    </div>
                </div>
                <div class=\"col-md-4\"></div>
                <div class=\"col-md-4\"></div>
            </div>
        </div>
        ";
        // line 115
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), 'form_end');
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cloud_compte/compte/nouveauCloudCompte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 115,  259 => 105,  255 => 104,  233 => 85,  227 => 82,  218 => 76,  212 => 73,  206 => 70,  202 => 68,  198 => 57,  185 => 47,  179 => 44,  173 => 41,  167 => 38,  161 => 35,  153 => 30,  147 => 27,  141 => 24,  135 => 21,  129 => 18,  123 => 15,  116 => 11,  112 => 9,  102 => 8,  91 => 6,  81 => 5,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    pro6- GRH / Création d'un service/subdivision
{% endblock %}
{% block  breadcrumb %}
    <li class=\"breadcrumb-item active\"> Nouveau service/subdivision</li>
{% endblock %}
{% block body_inside %}
    <br>
    <div class=\"container\">
        {{ form_start(form) }}
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    {{ form_row(form.cloudFamilleCompte) }}
                </div>
                <div class=\"form-group\">
                    {{ form_row(form.designationCloudCompte) }}
                </div>
                <div class=\"form-group\">
                    {{ form_row(form.sigleCloudCompte) }}
                </div>
                <div class=\"form-group\">
                    {{ form_row(form.emailCloudCompte) }}
                </div>
                <div class=\"form-group\">
                    {{ form_row(form.logoCloudCompte) }}
                </div>
                <div class=\"form-group\">
                    {{ form_row(form.adresseCloudCompte) }}
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    {{ form_row(form.telephone1CloudCompte) }}
                </div>
                <div class=\"form-group\">
                    {{ form_row(form.telephone2CloudCompte) }}
                </div>
                <div class=\"form-group\">
                    {{ form_row(form.pays) }}
                </div>
                <div class=\"form-group\">
                    {{ form_row(form.states) }}
                </div>
                <div class=\"form-group\">
                    {{ form_row(form.ville) }}
                </div>
            </div>
        </div>
        <br>
        <label>Localisation</label>
        <hr style=\"margin-top: auto; color: red\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"form-group\">
                    {{ form_row(form.cloudCategorieService) }}
                    {#<div class=\"row\">
                        <div class=\"col-md-8\">
                        </div>
                        <div class=\"col-md-4\">
                                <button class=\"btn btn-success\" title=\"Ajouter une catégorie de service\"
                                        style=\"width: 40px\">
                                    <i class=\"fa fa-plus\"></i>
                                </button>
                        </div>
                    </div>#}
                </div>
                <div class=\"form-group\">
                    {{ form_row(form.cloudTypeService) }}
                </div>
                <div class=\"form-group\">
                    {{ form_row(form.prefecture) }}
                </div>
                <div class=\"form-group\">
                    {{ form_row(form.commune) }}
                </div>
                <div class=\"form-group\"></div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"form-group\">
                    {{ form_row(form.cloudTypeBudget) }}
                </div>
                <div class=\"form-group\">
                    {{ form_row(form.cloudSection) }}
                </div>

                <div class=\"form-group\"></div>
                <div class=\"form-group\"></div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"form-group\"></div>
                <div class=\"form-group\"></div>
                <div class=\"form-group\"></div>
                <div class=\"form-group\"></div>
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"row\">
                <div class=\"col-md-4\"></div>
                <div class=\"col-md-4\">
                    <div class=\"form-group\">
                        <button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>&#160;&#160;&#160;&#160;
                        <a href=\"{{ path('service') }}\" class=\"\">
                            <button type=\"reset\" href=\"{{ path('service') }}\"
                                    class=\"btn btn-secondary\">Annuler
                            </button>
                        </a>
                    </div>
                </div>
                <div class=\"col-md-4\"></div>
                <div class=\"col-md-4\"></div>
            </div>
        </div>
        {{ form_end(form) }}
    </div>
{% endblock %}", "cloud_compte/compte/nouveauCloudCompte.html.twig", "D:\\GOLDMAN\\PROJECTS\\Symfony\\GRH\\templates\\cloud_compte\\compte\\nouveauCloudCompte.html.twig");
    }
}
