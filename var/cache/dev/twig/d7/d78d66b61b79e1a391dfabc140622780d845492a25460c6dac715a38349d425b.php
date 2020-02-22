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

/* cloud_compte/compte/listCloudComptecopy2.html.twig */
class __TwigTemplate_c723c4e6be46b62c31e1df10a0ac1d6066092c27513fecee9b58b4a093f3b67c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cloud_compte/compte/listCloudComptecopy2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cloud_compte/compte/listCloudComptecopy2.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cloud_compte/compte/listCloudComptecopy2.html.twig", 1);
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
        echo "    pro6- GRH / Comptes
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
        echo "    <li class=\"breadcrumb-item active\">Sous-comptes</li>
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
        $this->loadTemplate("cloud_compte/pills/paramComptePills.html.twig", "cloud_compte/compte/listCloudComptecopy2.html.twig", 10)->display($context);
        // line 11
        echo "    <br/>
    <div class=\"container\">
        <table class=\"table table-bordered\">
            <thead class=\"bg-gradient-secondary\">
            <tr>
                <th style=\"width: 3%\"></th>
                <th style=\"width: 20%\" class=\"text-center\">Nom du sous-compte</th>
                <th style=\"width: 8%\" class=\"text-center\">Sigle</th>
                <th style=\"width: 25%\" class=\"text-center\">Ville</th>
                <th style=\"width: 40%\" class=\"text-center\">Contacts et Adresse</th>
                <th style=\"width: 5%\" class=\"text-center\">Etat</th>
                <th style=\"width: 10%\" class=\"text-center\">Action</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listCloudCompte"]) || array_key_exists("listCloudCompte", $context) ? $context["listCloudCompte"] : (function () { throw new RuntimeError('Variable "listCloudCompte" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 27
            echo "                <tr>
                    <td>
                        <label>
                            <input type=\"checkbox\" class=\"form-check-input\" value=\"\">
                        </label>
                    </td>
                    <td class=\"text-center\">
                        <p><img src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/dist/img/globe.jpg"), "html", null, true);
            echo "\" alt=\"Logo de la société\" width=\"60%\"
                                class=\"center-block\"></p>
                        <label style=\"text-transform: uppercase;\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "designationCloudCompte", [], "any", false, false, false, 36), "html", null, true);
            echo "</label>
                    </td>
                    <td style=\"text-transform: uppercase;\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "sigleCloudCompte", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                    <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "ville", [], "any", false, false, false, 39), "nomVille", [], "any", false, false, false, 39), "html", null, true);
            echo "
                        &#160;(";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "pays", [], "any", false, false, false, 40), "nomPays", [], "any", false, false, false, 40), "html", null, true);
            echo ")
                    </td>
                    <td>
                        <p>
\t\t\t\t\t\t\t\t<span style=\"text-decoration: underline;\">
\t\t\t\t\t\t\t\t\t<strong>Contacts:</strong>
\t\t\t\t\t\t\t\t</span><br>
                            ";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "telephone1CloudCompte", [], "any", false, false, false, 47), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "telephone2CloudCompte", [], "any", false, false, false, 47), "html", null, true);
            echo "<br>
                            ";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "emailCloudCompte", [], "any", false, false, false, 48), "html", null, true);
            echo "
                        </p>
                        <p>
\t\t\t\t\t\t\t\t<span style=\"text-decoration: underline;\">
\t\t\t\t\t\t\t\t\t<strong>Adresse:</strong><br>
\t\t\t\t\t\t\t\t\t";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "adresseCloudCompte", [], "any", false, false, false, 53), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</span>
                        </p>
                    </td>
                    <td class=\"text-center\">
                        ";
            // line 58
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["c"], "actif", [], "any", false, false, false, 58), true)) {
                // line 59
                echo "                            <i id=\"etatActif\" class=\"far fa-check-circle\" style=\"font-size:20px;color:green\"
                               title=\"Sous-compte actif\"></i>
                        ";
            } else {
                // line 62
                echo "                            ";
                // line 63
                echo "                            <i id=\"etatInactif\" class=\"far fa-times-circle\" style=\"font-size:20px;color:red\"
                               title=\"Sous-compte inactif\"></i>
                        ";
            }
            // line 66
            echo "                    </td>
                    <td class=\"text-center\">
                        <a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sous_compte_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 68)]), "html", null, true);
            echo "\">
                            <i id=\"btnEdit\" title=\"Modifier\" class=\"far fa-edit\" style=\"font-size:16px;\"></i>
                        </a>
                        <a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sous_compte_new_by_sous_compte", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 71)]), "html", null, true);
            echo "\">
                            <i id=\"btnAdd\" title=\"Ajouter un sous-compte\" class=\"far fa-plus-square\"
                               style=\"font-size:17px;color:green\"></i>
                        </a>
                        <br>
                        <i class=\"fas fa-list-alt\"></i>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "            </tbody>
        </table>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cloud_compte/compte/listCloudComptecopy2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 80,  219 => 71,  213 => 68,  209 => 66,  204 => 63,  202 => 62,  197 => 59,  195 => 58,  187 => 53,  179 => 48,  173 => 47,  163 => 40,  159 => 39,  155 => 38,  150 => 36,  145 => 34,  136 => 27,  132 => 26,  115 => 11,  112 => 10,  102 => 9,  91 => 6,  81 => 5,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    pro6- GRH / Comptes
{% endblock %}
{% block  breadcrumb %}
    <li class=\"breadcrumb-item active\">Sous-comptes</li>
{% endblock %}

{% block body_inside %}
    {% include 'cloud_compte/pills/paramComptePills.html.twig' %}
    <br/>
    <div class=\"container\">
        <table class=\"table table-bordered\">
            <thead class=\"bg-gradient-secondary\">
            <tr>
                <th style=\"width: 3%\"></th>
                <th style=\"width: 20%\" class=\"text-center\">Nom du sous-compte</th>
                <th style=\"width: 8%\" class=\"text-center\">Sigle</th>
                <th style=\"width: 25%\" class=\"text-center\">Ville</th>
                <th style=\"width: 40%\" class=\"text-center\">Contacts et Adresse</th>
                <th style=\"width: 5%\" class=\"text-center\">Etat</th>
                <th style=\"width: 10%\" class=\"text-center\">Action</th>
            </tr>
            </thead>
            <tbody>
            {% for c in listCloudCompte %}
                <tr>
                    <td>
                        <label>
                            <input type=\"checkbox\" class=\"form-check-input\" value=\"\">
                        </label>
                    </td>
                    <td class=\"text-center\">
                        <p><img src=\"{{ asset('admin-lte/dist/img/globe.jpg') }}\" alt=\"Logo de la société\" width=\"60%\"
                                class=\"center-block\"></p>
                        <label style=\"text-transform: uppercase;\">{{ c.designationCloudCompte }}</label>
                    </td>
                    <td style=\"text-transform: uppercase;\">{{ c.sigleCloudCompte }}</td>
                    <td>{{ c.ville.nomVille }}
                        &#160;({{ c.pays.nomPays }})
                    </td>
                    <td>
                        <p>
\t\t\t\t\t\t\t\t<span style=\"text-decoration: underline;\">
\t\t\t\t\t\t\t\t\t<strong>Contacts:</strong>
\t\t\t\t\t\t\t\t</span><br>
                            {{ c.telephone1CloudCompte }}/{{ c.telephone2CloudCompte }}<br>
                            {{ c.emailCloudCompte }}
                        </p>
                        <p>
\t\t\t\t\t\t\t\t<span style=\"text-decoration: underline;\">
\t\t\t\t\t\t\t\t\t<strong>Adresse:</strong><br>
\t\t\t\t\t\t\t\t\t{{ c.adresseCloudCompte }}
\t\t\t\t\t\t\t\t</span>
                        </p>
                    </td>
                    <td class=\"text-center\">
                        {% if c.actif==true %}
                            <i id=\"etatActif\" class=\"far fa-check-circle\" style=\"font-size:20px;color:green\"
                               title=\"Sous-compte actif\"></i>
                        {% else %}
                            {# <i id=\"etatInactif\" class=\"btn-success fas fa-check-circle\" style=\"width: 50%\"></i> #}
                            <i id=\"etatInactif\" class=\"far fa-times-circle\" style=\"font-size:20px;color:red\"
                               title=\"Sous-compte inactif\"></i>
                        {% endif %}
                    </td>
                    <td class=\"text-center\">
                        <a href=\"{{ path('sous_compte_edit', {'id': c.id}) }}\">
                            <i id=\"btnEdit\" title=\"Modifier\" class=\"far fa-edit\" style=\"font-size:16px;\"></i>
                        </a>
                        <a href=\"{{ path('sous_compte_new_by_sous_compte', {'id': c.id}) }}\">
                            <i id=\"btnAdd\" title=\"Ajouter un sous-compte\" class=\"far fa-plus-square\"
                               style=\"font-size:17px;color:green\"></i>
                        </a>
                        <br>
                        <i class=\"fas fa-list-alt\"></i>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>

{% endblock %}
", "cloud_compte/compte/listCloudComptecopy2.html.twig", "D:\\GOLDMAN\\PROJECTS\\Symfony\\GRH\\templates\\cloud_compte\\compte\\listCloudComptecopy2.html.twig");
    }
}
