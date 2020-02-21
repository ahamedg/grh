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

/* cloud_params/index.html.twig */
class __TwigTemplate_16c9eb95c68f5e117d28e9c0d61a0dce8e2b2b112c8b9077dc55d6252e411aa1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cloud_params/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cloud_params/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cloud_params/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body_inside($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_inside"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_inside"));

        // line 4
        echo "
    <nav class=\"nav nav-pills nav-justified\">
        <a class=\"nav-link active\" href=\"#\">Categorie service old</a>
        <a class=\"nav-link\" href=\"#\">Type service</a>
        <a class=\"nav-link\" href=\"#\">Link</a>
        <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
    </nav>

    <br/>



    <br/>

    <div class=\"tab bodre-0\">
        <button class=\"tablinks\" onclick=\"openCity(event, 'CloudCategorieService')\" id=\"defaultOpen\">Categorie service old
        </button>
        <button class=\"tablinks\" onclick=\"openCity(event, 'CloudTypeService')\">Type service</button>
        <button class=\"tablinks\" onclick=\"openCity(event, 'CloudTypeCompte')\">Type compte</button>
        <button class=\"tablinks\" onclick=\"openCity(event, 'CloudFamilleCompte')\">Famille des comptes</button>
    </div>
    <br/>
    <div id=\"CloudCategorieService\" class=\"tabcontent\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <!-- general form elements -->
                <div class=\"card card-primary\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">Nouveau</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role=\"form\">
                        <div class=\"card-body\">
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
                <!-- /.card -->
            </div>
        </div>
        <div class=\"col-md-8\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">Les différentes catégories</h3>
                </div>
                <!-- /.card-header -->
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
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listCloudCategorieService"]) || array_key_exists("listCloudCategorieService", $context) ? $context["listCloudCategorieService"] : (function () { throw new RuntimeError('Variable "listCloudCategorieService" does not exist.', 71, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 72
            echo "                            <tr>
                                <td>";
            // line 73
            echo twig_escape_filter($this->env, (isset($context["numeroLigne"]) || array_key_exists("numeroLigne", $context) ? $context["numeroLigne"] : (function () { throw new RuntimeError('Variable "numeroLigne" does not exist.', 73, $this->source); })()), "html", null, true);
            echo "</td>
                                <td>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "libelle", [], "any", false, false, false, 74), "html", null, true);
            echo "</td>
                                <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "description", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>
                                <td>
                                    <i class=\"fas fa-edit\"></i>
                                    &#160;&#160;
                                    <i class=\"fas fa-trash-alt\"></i></td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "
                        ";
        // line 97
        echo "                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class=\"card-footer clearfix\">
                    <ul class=\"pagination pagination-sm m-0 float-right\">
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"#\">&laquo;</a>
                        </li>
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"#\">1</a>
                        </li>
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"#\">2</a>
                        </li>
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"#\">3</a>
                        </li>
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"#\">&raquo;</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>
    </div>

    <div id=\"CloudTypeService\" class=\"tabcontent\">
        <h3>Type service</h3>
        <p>Type service cloud.</p>
    </div>

    <div id=\"CloudTypeCompte\" class=\"tabcontent\">
        <h3>Type compte</h3>
        <p>Type compte cloud.</p>
    </div>

    <div id=\"CloudFamilleCompte\" class=\"tabcontent\">
        <h3>Famille des comptes</h3>
        <p>Famille des comptes cloud.</p>
    </div>


    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cloud_params/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 97,  165 => 82,  152 => 75,  148 => 74,  144 => 73,  141 => 72,  137 => 71,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body_inside %}

    <nav class=\"nav nav-pills nav-justified\">
        <a class=\"nav-link active\" href=\"#\">Categorie service old</a>
        <a class=\"nav-link\" href=\"#\">Type service</a>
        <a class=\"nav-link\" href=\"#\">Link</a>
        <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
    </nav>

    <br/>



    <br/>

    <div class=\"tab bodre-0\">
        <button class=\"tablinks\" onclick=\"openCity(event, 'CloudCategorieService')\" id=\"defaultOpen\">Categorie service old
        </button>
        <button class=\"tablinks\" onclick=\"openCity(event, 'CloudTypeService')\">Type service</button>
        <button class=\"tablinks\" onclick=\"openCity(event, 'CloudTypeCompte')\">Type compte</button>
        <button class=\"tablinks\" onclick=\"openCity(event, 'CloudFamilleCompte')\">Famille des comptes</button>
    </div>
    <br/>
    <div id=\"CloudCategorieService\" class=\"tabcontent\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <!-- general form elements -->
                <div class=\"card card-primary\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">Nouveau</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role=\"form\">
                        <div class=\"card-body\">
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
                <!-- /.card -->
            </div>
        </div>
        <div class=\"col-md-8\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">Les différentes catégories</h3>
                </div>
                <!-- /.card-header -->
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
                        {% for cat in listCloudCategorieService %}
                            <tr>
                                <td>{{ numeroLigne }}</td>
                                <td>{{ cat.libelle }}</td>
                                <td>{{ cat.description }}</td>
                                <td>
                                    <i class=\"fas fa-edit\"></i>
                                    &#160;&#160;
                                    <i class=\"fas fa-trash-alt\"></i></td>
                            </tr>
                        {% endfor %}

                        {#  <tr>
                              <td>1.</td>
                              <td>Update software</td>
                              <td>
                                  <div class=\"progress progress-xs\">
                                      <div class=\"progress-bar progress-bar-danger\" style=\"width: 55%\"></div>
                                  </div>
                              </td>
                              <td>
                                  <i class=\"fas fa-edit\"></i>
                                  &#160;&#160;
                                  <i class=\"fas fa-trash-alt\"></i>
                              </td>
                          </tr>#}
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class=\"card-footer clearfix\">
                    <ul class=\"pagination pagination-sm m-0 float-right\">
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"#\">&laquo;</a>
                        </li>
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"#\">1</a>
                        </li>
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"#\">2</a>
                        </li>
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"#\">3</a>
                        </li>
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"#\">&raquo;</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>
    </div>

    <div id=\"CloudTypeService\" class=\"tabcontent\">
        <h3>Type service</h3>
        <p>Type service cloud.</p>
    </div>

    <div id=\"CloudTypeCompte\" class=\"tabcontent\">
        <h3>Type compte</h3>
        <p>Type compte cloud.</p>
    </div>

    <div id=\"CloudFamilleCompte\" class=\"tabcontent\">
        <h3>Famille des comptes</h3>
        <p>Famille des comptes cloud.</p>
    </div>


    {#<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js\"></script>#}
{% endblock %}
", "cloud_params/index.html.twig", "G:\\TPS\\grh\\templates\\cloud_params\\index.html.twig");
    }
}
