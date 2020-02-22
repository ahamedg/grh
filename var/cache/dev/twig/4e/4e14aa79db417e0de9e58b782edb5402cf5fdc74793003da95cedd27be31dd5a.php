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
class __TwigTemplate_926b22b4e232ce1f7809a16b1789fae7bb7d941ff06d242c5db7a709346b5621 extends Template
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
        echo "    pro6- GRH / Modification d'un compte
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
        echo "\t<li class=\"breadcrumb-item\">
\t\t<a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("compte");
        echo "\">Comptes</a>
\t</li>
    <li class=\"breadcrumb-item active\">Modification compte</li>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_body_inside($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_inside"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_inside"));

        // line 13
        echo "    ";
        $this->loadTemplate("cloud_compte/pills/paramComptePills.html.twig", "cloud_compte/compte/editCloudFamilleCompte.html.twig", 13)->display($context);
        // line 14
        echo "    <br/>
    <div class=\"container\">
        <h3>Modification du sous-compte « <strong>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cloudCompte"]) || array_key_exists("cloudCompte", $context) ? $context["cloudCompte"] : (function () { throw new RuntimeError('Variable "cloudCompte" does not exist.', 16, $this->source); })()), "designationCloudCompte", [], "any", false, false, false, 16), "html", null, true);
        echo "</strong> »</h3>
        <hr style=\"margin-top: auto; color: black\">
        ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_start');
        echo "
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div id=\"typeCompte\" class=\"form-group\">
                    <div class=\"row\">
                        <div class=\"col-md-10\">
                            <div class=\"form-group\">
                                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "cloudTypeCompte", [], "any", false, false, false, 25), 'row');
        echo "
                            </div>
                        </div>
                        <div class=\"col-md-2\">
                            <div class=\"form-group\">
                                <br/>
                                <button class=\"btn btn-success float-left\" style=\"width: 40px\">
                                    <i class=\"fa fa-plus\"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "designationCloudFamilleCompte", [], "any", false, false, false, 39), 'row');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "codeAccesCloudFamilleCompte", [], "any", false, false, false, 42), 'row');
        echo "
                </div>
                ";
        // line 47
        echo "                <div class=\"form-group\">
                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "sigleCloudFamilleCompte", [], "any", false, false, false, 48), 'row');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "emailCloudFamilleCompte", [], "any", false, false, false, 51), 'row');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "telephoneCloudFamilleCompte", [], "any", false, false, false, 54), 'row');
        echo "
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "logoCloudFamilleCompte", [], "any", false, false, false, 59), 'row');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "pays", [], "any", false, false, false, 62), 'row');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "states", [], "any", false, false, false, 65), 'row');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "ville", [], "any", false, false, false, 68), 'row');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "adresseCloudFamilleCompte", [], "any", false, false, false, 71), 'row');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "descriptionCloudFamilleCompte", [], "any", false, false, false, 74), 'row');
        echo "
                </div>
                <br/>
                <div class=\"form-group\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                <button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>
                                <a href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("compte");
        echo "\" class=\"\">
                                    <button type=\"reset\" href=\"";
        // line 83
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
        // line 94
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), 'form_end');
        echo "
    </div>
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
        return array (  250 => 94,  236 => 83,  232 => 82,  221 => 74,  215 => 71,  209 => 68,  203 => 65,  197 => 62,  191 => 59,  183 => 54,  177 => 51,  171 => 48,  168 => 47,  163 => 42,  157 => 39,  140 => 25,  130 => 18,  125 => 16,  121 => 14,  118 => 13,  108 => 12,  94 => 7,  91 => 6,  81 => 5,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    pro6- GRH / Modification d'un compte
{% endblock %}
{% block  breadcrumb %}
\t<li class=\"breadcrumb-item\">
\t\t<a href=\"{{path('compte')}}\">Comptes</a>
\t</li>
    <li class=\"breadcrumb-item active\">Modification compte</li>
{% endblock %}

{% block body_inside %}
    {% include 'cloud_compte/pills/paramComptePills.html.twig' %}
    <br/>
    <div class=\"container\">
        <h3>Modification du sous-compte « <strong>{{ cloudCompte.designationCloudCompte }}</strong> »</h3>
        <hr style=\"margin-top: auto; color: black\">
        {{ form_start(form) }}
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div id=\"typeCompte\" class=\"form-group\">
                    <div class=\"row\">
                        <div class=\"col-md-10\">
                            <div class=\"form-group\">
                                {{ form_row(form.cloudTypeCompte) }}
                            </div>
                        </div>
                        <div class=\"col-md-2\">
                            <div class=\"form-group\">
                                <br/>
                                <button class=\"btn btn-success float-left\" style=\"width: 40px\">
                                    <i class=\"fa fa-plus\"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"form-group\">
                    {{ form_row(form.designationCloudFamilleCompte) }}
                </div>
                <div class=\"form-group\">
                    {{ form_row(form.codeAccesCloudFamilleCompte) }}
                </div>
                {# <div class=\"form-group\">
                    {{ form_row(form.cleAccesCloudFamilleCompte) }}
                </div> #}
                <div class=\"form-group\">
                    {{ form_row(form.sigleCloudFamilleCompte) }}
                </div>
                <div class=\"form-group\">
                    {{ form_row(form.emailCloudFamilleCompte) }}
                </div>
                <div class=\"form-group\">
                    {{ form_row(form.telephoneCloudFamilleCompte) }}
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    {{ form_row(form.logoCloudFamilleCompte) }}
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
                <div class=\"form-group\">
                    {{ form_row(form.adresseCloudFamilleCompte) }}
                </div>
                <div class=\"form-group\">
                    {{ form_row(form.descriptionCloudFamilleCompte) }}
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
{% endblock %}
", "cloud_compte/compte/editCloudFamilleCompte.html.twig", "G:\\TPS\\grh\\templates\\cloud_compte\\compte\\editCloudFamilleCompte.html.twig");
    }
}
