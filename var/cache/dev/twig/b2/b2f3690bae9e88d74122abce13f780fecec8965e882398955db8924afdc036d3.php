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

/* cloud_compte/params/cloudTypeBudget.html.twig */
class __TwigTemplate_b97476f6c158d7b0324e2418199b26db0af64c2a267492c02d3f6553a1f91ece extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cloud_compte/params/cloudTypeBudget.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cloud_compte/params/cloudTypeBudget.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cloud_compte/params/cloudTypeBudget.html.twig", 1);
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
        echo "    pro6- GRH / Type budget
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
        echo "    <li class=\"breadcrumb-item active\"> Type budget</li>
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
        $this->loadTemplate("cloud_compte/pills/paramComptePills.html.twig", "cloud_compte/params/cloudTypeBudget.html.twig", 10)->display($context);
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
                        Les différents types de budget
                    </div>
                    <div class=\"card-body\">
                        <table class=\"table table-bordered\">
                            <thead>
                            <tr>
                                <th style=\"width: 3%\">N°</th>
                                <th style=\"width: 40%\">Libellé</th>
                                <th style=\"width: 30%\">Description</th>
                                <th style=\"width: 7%\">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listCloudTypeBudget"]) || array_key_exists("listCloudTypeBudget", $context) ? $context["listCloudTypeBudget"] : (function () { throw new RuntimeError('Variable "listCloudTypeBudget" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tb"]) {
            // line 45
            echo "                                <tr>
                                    <td>";
            // line 46
            echo twig_escape_filter($this->env, (isset($context["num"]) || array_key_exists("num", $context) ? $context["num"] : (function () { throw new RuntimeError('Variable "num" does not exist.', 46, $this->source); })()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tb"], "libelle", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                                    <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tb"], "description", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                                    <td>
                                        <i id=\"btnEdit\" data-toggle=\"modal\"
                                           data-target=\"#editCloudTypeBudgetModal\"
                                           class=\"btn-default fa fa-edit\"></i>
                                        &#160;&#160;
                                        <i class=\"fas fa-list-alt\"></i>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class=\"modal fade\" id=\"editCloudTypeBudgetModal\" tabindex=\"-1\" role=\"dialog\"
         aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">Modification d'une catégorie service</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <form action=\"\" method=\"get\" role=\"form\">
                        <div class=\"form-group\">
                            <label for=\"libelle\">Libellé</label>
                            <input type=\"text\" class=\"form-control\" id=\"libelle\" placeholder=\"Libellé\">
                        </div>
                        <div class=\"form-group\">
                            <label>Description</label>
                            <label>
                                <textarea class=\"form-control\" rows=\"3\" placeholder=\"Description ...\"></textarea>
                            </label>
                        </div>
                        <div class=\"\">
                            <button type=\"submit\" class=\"btn btn-primary float-right\">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cloud_compte/params/cloudTypeBudget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 58,  174 => 48,  170 => 47,  166 => 46,  163 => 45,  159 => 44,  136 => 24,  131 => 22,  126 => 20,  115 => 11,  112 => 10,  102 => 9,  91 => 6,  81 => 5,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    pro6- GRH / Type budget
{% endblock %}
{% block  breadcrumb %}
    <li class=\"breadcrumb-item active\"> Type budget</li>
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
                        Les différents types de budget
                    </div>
                    <div class=\"card-body\">
                        <table class=\"table table-bordered\">
                            <thead>
                            <tr>
                                <th style=\"width: 3%\">N°</th>
                                <th style=\"width: 40%\">Libellé</th>
                                <th style=\"width: 30%\">Description</th>
                                <th style=\"width: 7%\">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for tb in listCloudTypeBudget %}
                                <tr>
                                    <td>{{num}}</td>
                                    <td>{{ tb.libelle }}</td>
                                    <td>{{ tb.description }}</td>
                                    <td>
                                        <i id=\"btnEdit\" data-toggle=\"modal\"
                                           data-target=\"#editCloudTypeBudgetModal\"
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


    <div class=\"modal fade\" id=\"editCloudTypeBudgetModal\" tabindex=\"-1\" role=\"dialog\"
         aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">Modification d'une catégorie service</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <form action=\"\" method=\"get\" role=\"form\">
                        <div class=\"form-group\">
                            <label for=\"libelle\">Libellé</label>
                            <input type=\"text\" class=\"form-control\" id=\"libelle\" placeholder=\"Libellé\">
                        </div>
                        <div class=\"form-group\">
                            <label>Description</label>
                            <label>
                                <textarea class=\"form-control\" rows=\"3\" placeholder=\"Description ...\"></textarea>
                            </label>
                        </div>
                        <div class=\"\">
                            <button type=\"submit\" class=\"btn btn-primary float-right\">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "cloud_compte/params/cloudTypeBudget.html.twig", "D:\\GOLDMAN\\PROJECTS\\Symfony\\GRH\\templates\\cloud_compte\\params\\cloudTypeBudget.html.twig");
    }
}
