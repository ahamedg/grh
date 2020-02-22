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

/* cloud_compte/compte/listCloudComptecopy1.html.twig */
class __TwigTemplate_f5801275cfd423048d005f26d514e396e466b49bc5afd25fb92b72c6404de401 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cloud_compte/compte/listCloudComptecopy1.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cloud_compte/compte/listCloudComptecopy1.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cloud_compte/compte/listCloudComptecopy1.html.twig", 1);
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
        echo "    pro6- GRH / Création d'un sous-compte
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
        echo "    <li class=\"breadcrumb-item\">
        <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sous_compte");
        echo "\">Sous-comptes</a>
    </li>
    <li class=\"breadcrumb-item active\">Nouveau sous-compte</li>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_body_inside($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_inside"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_inside"));

        // line 12
        echo "    <br>
    <div class=\"container\">
        ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start');
        echo "
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    <label>Compte parent *</label>
                    <textarea class=\"form-control\" rows=\"2\" id=\"compteParent\" style=\"text-transform: uppercase;\" disabled>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cloudCompte"]) || array_key_exists("cloudCompte", $context) ? $context["cloudCompte"] : (function () { throw new RuntimeError('Variable "cloudCompte" does not exist.', 19, $this->source); })()), "designationCloudCompte", [], "any", false, false, false, 19), "html", null, true);
        echo "</textarea>
                </div>
                <div class=\"form-group\">
                    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "designationCloudCompte", [], "any", false, false, false, 22), 'row');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "sigleCloudCompte", [], "any", false, false, false, 25), 'row');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "emailCloudCompte", [], "any", false, false, false, 28), 'row');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "logoCloudCompte", [], "any", false, false, false, 31), 'row');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "adresseCloudCompte", [], "any", false, false, false, 34), 'row');
        echo "
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "telephone1CloudCompte", [], "any", false, false, false, 39), 'row');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "telephone2CloudCompte", [], "any", false, false, false, 42), 'row');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "pays", [], "any", false, false, false, 45), 'row');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "states", [], "any", false, false, false, 48), 'row');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "ville", [], "any", false, false, false, 51), 'row');
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
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "cloudCategorieService", [], "any", false, false, false, 61), 'row');
        echo "
                    ";
        // line 72
        echo "                </div>
                <div class=\"form-group\">
                    ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "cloudTypeService", [], "any", false, false, false, 74), 'row');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "prefecture", [], "any", false, false, false, 77), 'row');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "commune", [], "any", false, false, false, 80), 'row');
        echo "
                </div>
                <div class=\"form-group\"></div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"form-group\">
                    ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "cloudTypeBudget", [], "any", false, false, false, 86), 'row');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "cloudSection", [], "any", false, false, false, 89), 'row');
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
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sous_compte");
        echo "\" class=\"\">
                            <button type=\"reset\" href=\"";
        // line 109
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sous_compte");
        echo "\" class=\"btn btn-secondary\">Annuler
                            </button>
                        </a>
                    </div>
                </div>
                <div class=\"col-md-4\"></div>
                <div class=\"col-md-4\"></div>
            </div>
        </div>
        ";
        // line 118
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), 'form_end');
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cloud_compte/compte/listCloudComptecopy1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 118,  266 => 109,  262 => 108,  240 => 89,  234 => 86,  225 => 80,  219 => 77,  213 => 74,  209 => 72,  205 => 61,  192 => 51,  186 => 48,  180 => 45,  174 => 42,  168 => 39,  160 => 34,  154 => 31,  148 => 28,  142 => 25,  136 => 22,  130 => 19,  122 => 14,  118 => 12,  108 => 11,  94 => 7,  91 => 6,  81 => 5,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    pro6- GRH / Création d'un sous-compte
{% endblock %}
{% block  breadcrumb %}
    <li class=\"breadcrumb-item\">
        <a href=\"{{path('sous_compte')}}\">Sous-comptes</a>
    </li>
    <li class=\"breadcrumb-item active\">Nouveau sous-compte</li>
{% endblock %}
{% block body_inside %}
    <br>
    <div class=\"container\">
        {{ form_start(form) }}
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    <label>Compte parent *</label>
                    <textarea class=\"form-control\" rows=\"2\" id=\"compteParent\" style=\"text-transform: uppercase;\" disabled>{{cloudCompte.designationCloudCompte}}</textarea>
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
                        <a href=\"{{ path('sous_compte') }}\" class=\"\">
                            <button type=\"reset\" href=\"{{ path('sous_compte') }}\" class=\"btn btn-secondary\">Annuler
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
{% endblock %}
", "cloud_compte/compte/listCloudComptecopy1.html.twig", "D:\\GOLDMAN\\PROJECTS\\Symfony\\GRH\\templates\\cloud_compte\\compte\\listCloudComptecopy1.html.twig");
    }
}
