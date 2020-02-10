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

/* utilisateur/listUtilisateur.html.twig */
class __TwigTemplate_ddf2cb61c7470cff42607fd1a1772364467f786a23e57d1db7011f614f2b5f42 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/listUtilisateur.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/listUtilisateur.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/listUtilisateur.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 3
        echo "    <li class=\"breadcrumb-item active\"> Liste des utilisateurs</li>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body_inside($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_inside"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_inside"));

        // line 6
        echo "    <div class=\"container\">
        <div class=\"form-group\">
            <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_new");
        echo "\" class=\"\">
                <button type=\"button\" class=\"btn btn-info\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_new");
        echo "\">Créer un utilisateur</button>
            </a>
        </div>
        <div class=\"card card-secondary\">
            <div class=\"card-header\">
                Les différents utilisateurs
            </div>
            <div class=\"card-body\">
                <table class=\"table table-bordered\">
                    <thead>
                    <tr>
                        <th style=\"width: 3%\"></th>
                        <th style=\"width: 10%\" class=\"text-center\">Profil</th>
                        <th style=\"width: 15%\" class=\"text-center\">Nom d'utilisateur</th>
                        <th style=\"width: 40%\" class=\"text-center\">Contacts</th>
                        <th style=\"width: 5%\" class=\"text-center\">Etat</th>
                        <th style=\"width: 20%\" class=\"text-center\">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listUtilisateur"]) || array_key_exists("listUtilisateur", $context) ? $context["listUtilisateur"] : (function () { throw new RuntimeError('Variable "listUtilisateur" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 30
            echo "                        <tr>
                            <td>
                                <label>
                                    <input type=\"checkbox\" class=\"form-check-input\" value=\"\">
                                </label>
                            </td>
                            <td>
                                <img src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/dist/img/manager.png"), "html", null, true);
            echo "\" alt=\"Photo de profil\"
                                     width=\"100%\" class=\"center-block\">
                            </td>
                            <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "username", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                            <td>Adresse : <br> Tel : ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "telephone1Utilisateur", [], "any", false, false, false, 41), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "telephone2Utilisateur", [], "any", false, false, false, 41), "html", null, true);
            echo " <br>
                                email : ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "emailCompte", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                            <td>Etat</td>
                            <td>
                                <i class=\"fas fa-edit\"></i>
                                &#160;&#160;
                                <i class=\"fas fa-list-alt\"></i>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/listUtilisateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 51,  150 => 42,  144 => 41,  140 => 40,  134 => 37,  125 => 30,  121 => 29,  98 => 9,  94 => 8,  90 => 6,  80 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block  breadcrumb %}
    <li class=\"breadcrumb-item active\"> Liste des utilisateurs</li>
{% endblock %}
{% block body_inside %}
    <div class=\"container\">
        <div class=\"form-group\">
            <a href=\"{{ path('utilisateur_new') }}\" class=\"\">
                <button type=\"button\" class=\"btn btn-info\" href=\"{{ path('utilisateur_new') }}\">Créer un utilisateur</button>
            </a>
        </div>
        <div class=\"card card-secondary\">
            <div class=\"card-header\">
                Les différents utilisateurs
            </div>
            <div class=\"card-body\">
                <table class=\"table table-bordered\">
                    <thead>
                    <tr>
                        <th style=\"width: 3%\"></th>
                        <th style=\"width: 10%\" class=\"text-center\">Profil</th>
                        <th style=\"width: 15%\" class=\"text-center\">Nom d'utilisateur</th>
                        <th style=\"width: 40%\" class=\"text-center\">Contacts</th>
                        <th style=\"width: 5%\" class=\"text-center\">Etat</th>
                        <th style=\"width: 20%\" class=\"text-center\">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for u in listUtilisateur %}
                        <tr>
                            <td>
                                <label>
                                    <input type=\"checkbox\" class=\"form-check-input\" value=\"\">
                                </label>
                            </td>
                            <td>
                                <img src=\"{{ asset('admin-lte/dist/img/manager.png') }}\" alt=\"Photo de profil\"
                                     width=\"100%\" class=\"center-block\">
                            </td>
                            <td>{{ u.username }}</td>
                            <td>Adresse : <br> Tel : {{ u.telephone1Utilisateur }} / {{ u.telephone2Utilisateur }} <br>
                                email : {{ u.emailCompte }}</td>
                            <td>Etat</td>
                            <td>
                                <i class=\"fas fa-edit\"></i>
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
{% endblock %}", "utilisateur/listUtilisateur.html.twig", "D:\\GOLDMAN\\PROJECTS\\Symfony\\GRH\\templates\\utilisateur\\listUtilisateur.html.twig");
    }
}
