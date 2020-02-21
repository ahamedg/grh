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

/* cloud_compte/params/cloudTypeCompte.html.twig */
class __TwigTemplate_c738bd13c439ed26e2b592809cb10a4dbce923b7c82c2593eebc7c33696a49b7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cloud_compte/params/cloudTypeCompte.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cloud_compte/params/cloudTypeCompte.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cloud_compte/params/cloudTypeCompte.html.twig", 1);
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
        echo "    pro6- GRH / Type compte
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
        echo "    <li class=\"breadcrumb-item active\"> Type compte</li>
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
        $this->loadTemplate("cloud_compte/pills/paramComptePills.html.twig", "cloud_compte/params/cloudTypeCompte.html.twig", 10)->display($context);
        // line 11
        echo "    <br/>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"card card-success\">
                    <div class=\"card-header\">
                        Nouveau
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_start');
        echo "

                        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'widget');
        echo "
                        <button type=\"submit\" class=\"btn btn-success float-right\">Enregistrer</button>
                        ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'form_end');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"col-md-8\">
                <div class=\"card card-secondary\">
                    <div class=\"card-header\">
                        Les différents types de compte
                    </div>
                    <div class=\"card-body\">
                        <table class=\"table table-bordered\">
                            <thead>
                            <tr>
                                <th style=\"width: 12%\">N°</th>
                                <th style=\"width: 40%\">Libellé</th>
                                <th style=\"width: 30%\">Description</th>
                                <th style=\"width: 7%\">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listCloudTypeCompte"]) || array_key_exists("listCloudTypeCompte", $context) ? $context["listCloudTypeCompte"] : (function () { throw new RuntimeError('Variable "listCloudTypeCompte" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tc"]) {
            // line 45
            echo "                                <tr>
                                    <td>1</td>
                                    <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tc"], "libelle", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                                    <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tc"], "description", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                                    <td>
                                        <i data-toggle=\"modal\" data-target=\"#editCloudTypeCompteModal\"
                                           class=\"btn-default fa fa-edit\"></i>
                                        &#160;&#160;
                                        <i class=\"fas fa-list-alt\"></i>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"editCloudTypeCompteModal\" tabindex=\"-1\" role=\"dialog\"
         aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">Modification d'un type compte</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 76
        $this->loadTemplate("cloud_compte/params/cloudTypeCompteEdit.html.twig", "cloud_compte/params/cloudTypeCompte.html.twig", 76)->display($context);
        // line 77
        echo "                </div>

            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cloud_compte/params/cloudTypeCompte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 77,  207 => 76,  186 => 57,  171 => 48,  167 => 47,  163 => 45,  159 => 44,  136 => 24,  131 => 22,  126 => 20,  115 => 11,  112 => 10,  102 => 9,  91 => 6,  81 => 5,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    pro6- GRH / Type compte
{% endblock %}
{% block  breadcrumb %}
    <li class=\"breadcrumb-item active\"> Type compte</li>
{% endblock %}

{% block body_inside %}
    {% include 'cloud_compte/pills/paramComptePills.html.twig' %}
    <br/>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"card card-success\">
                    <div class=\"card-header\">
                        Nouveau
                    </div>
                    <div class=\"card-body\">
                        {{ form_start(form) }}

                        {{ form_widget(form) }}
                        <button type=\"submit\" class=\"btn btn-success float-right\">Enregistrer</button>
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
            <div class=\"col-md-8\">
                <div class=\"card card-secondary\">
                    <div class=\"card-header\">
                        Les différents types de compte
                    </div>
                    <div class=\"card-body\">
                        <table class=\"table table-bordered\">
                            <thead>
                            <tr>
                                <th style=\"width: 12%\">N°</th>
                                <th style=\"width: 40%\">Libellé</th>
                                <th style=\"width: 30%\">Description</th>
                                <th style=\"width: 7%\">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for tc in listCloudTypeCompte %}
                                <tr>
                                    <td>1</td>
                                    <td>{{ tc.libelle }}</td>
                                    <td>{{ tc.description }}</td>
                                    <td>
                                        <i data-toggle=\"modal\" data-target=\"#editCloudTypeCompteModal\"
                                           class=\"btn-default fa fa-edit\"></i>
                                        &#160;&#160;
                                        <i class=\"fas fa-list-alt\"></i>
                                    </td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"editCloudTypeCompteModal\" tabindex=\"-1\" role=\"dialog\"
         aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">Modification d'un type compte</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    {% include 'cloud_compte/params/cloudTypeCompteEdit.html.twig' %}
                </div>

            </div>
        </div>
    </div>
{% endblock %}
", "cloud_compte/params/cloudTypeCompte.html.twig", "G:\\TPS\\grh\\templates\\cloud_compte\\params\\cloudTypeCompte.html.twig");
    }
}
