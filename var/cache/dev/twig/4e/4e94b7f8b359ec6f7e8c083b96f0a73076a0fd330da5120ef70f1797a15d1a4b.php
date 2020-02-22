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

/* cloud_compte/localisation/prefecture.html.twig */
class __TwigTemplate_b7a3cfb68a14af662f0637423fa78aa4de12d721c5d770441191ede9e6340443 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cloud_compte/localisation/prefecture.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cloud_compte/localisation/prefecture.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cloud_compte/localisation/prefecture.html.twig", 1);
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
        echo "    pro6- GRH / Préfecture
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
        echo "    <li class=\"breadcrumb-item active\">Préfecture</li>
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
        echo "    ";
        $this->loadTemplate("cloud_compte/pills/localisationPills.html.twig", "cloud_compte/localisation/prefecture.html.twig", 9)->display($context);
        // line 10
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
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_start');
        echo "
                        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'widget');
        echo "
                        <button type=\"submit\" class=\"btn btn-success float-right\">Enregistrer</button>
                        ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'form_end');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"col-md-8\">
                <div class=\"card card-secondary\">
                    <div class=\"card-header\">
                        Les différentes préfectures
                    </div>
                    <div class=\"card-body\">
                        <table class=\"table table-bordered table-hover\">
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
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listMapPrefecture"]) || array_key_exists("listMapPrefecture", $context) ? $context["listMapPrefecture"] : (function () { throw new RuntimeError('Variable "listMapPrefecture" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 43
            echo "                                <tr>
                                    <td>1</td>
                                    <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "libelle", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                                    <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "description", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                                    <td>
                                        <i id=\"btnEdit\" data-toggle=\"modal\" data-target=\"#editPrefectureModal\"
                                           class=\"btn-default fa fa-edit\"></i>
                                        &#160;&#160;
                                        <i class=\"fas fa-list-alt\"></i>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"editPrefectureModal\" tabindex=\"-1\" role=\"dialog\"
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
                            <textarea class=\"form-control\" rows=\"3\" placeholder=\"Description ...\"></textarea>
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
        return "cloud_compte/localisation/prefecture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 55,  170 => 46,  166 => 45,  162 => 43,  158 => 42,  135 => 22,  130 => 20,  126 => 19,  115 => 10,  112 => 9,  102 => 8,  91 => 6,  81 => 5,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    pro6- GRH / Préfecture
{% endblock %}
{% block  breadcrumb %}
    <li class=\"breadcrumb-item active\">Préfecture</li>
{% endblock %}
{% block body_inside %}
    {% include 'cloud_compte/pills/localisationPills.html.twig' %}
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
                        Les différentes préfectures
                    </div>
                    <div class=\"card-body\">
                        <table class=\"table table-bordered table-hover\">
                            <thead>
                            <tr>
                                <th style=\"width: 3%\">N°</th>
                                <th style=\"width: 40%\">Libellé</th>
                                <th style=\"width: 30%\">Description</th>
                                <th style=\"width: 7%\">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for p in listMapPrefecture %}
                                <tr>
                                    <td>1</td>
                                    <td>{{ p.libelle }}</td>
                                    <td>{{ p.description }}</td>
                                    <td>
                                        <i id=\"btnEdit\" data-toggle=\"modal\" data-target=\"#editPrefectureModal\"
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

    <div class=\"modal fade\" id=\"editPrefectureModal\" tabindex=\"-1\" role=\"dialog\"
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
                            <textarea class=\"form-control\" rows=\"3\" placeholder=\"Description ...\"></textarea>
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
", "cloud_compte/localisation/prefecture.html.twig", "G:\\TPS\\grh\\templates\\cloud_compte\\localisation\\prefecture.html.twig");
    }
}
