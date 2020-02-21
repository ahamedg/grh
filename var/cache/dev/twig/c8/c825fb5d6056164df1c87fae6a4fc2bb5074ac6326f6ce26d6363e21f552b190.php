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

/* utilisateur/nouveauUtilisateur.html.twig */
class __TwigTemplate_9399af1a684a6ac9aae0be907df3fde61c762d9d0c253c7c9f288d839cdfdfbe extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/nouveauUtilisateur.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/nouveauUtilisateur.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/nouveauUtilisateur.html.twig", 1);
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
        echo "    <li class=\"breadcrumb-item\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur");
        echo "\"> Liste des utilisateurs</a></li>
    <li class=\"breadcrumb-item active\"> Nouvel utilisateur</li>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body_inside($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_inside"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_inside"));

        // line 7
        echo "    <div class=\"container\">
        <div class=\"card card-success\">
            <div class=\"card-header\">
                Création d'un nouvel utilisateur
            </div>
            <div class=\"card-body\">
                ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start');
        echo "
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "username", [], "any", false, false, false, 16), 'row');
        echo "</div>
                        <div class=\"form-group\">";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "emailCompte", [], "any", false, false, false, 17), 'row');
        echo "</div>
                        <div class=\"form-group\">";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "password", [], "any", false, false, false, 18), 'row');
        echo "</div>
                        <div class=\"form-group\">";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "passwordConfirm", [], "any", false, false, false, 19), 'row');
        echo "</div>
                        <div class=\"form-group\"></div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "telephone1Utilisateur", [], "any", false, false, false, 23), 'row');
        echo "</div>
                        <div class=\"form-group\">";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "telephone2Utilisateur", [], "any", false, false, false, 24), 'row');
        echo "</div>
                        <div class=\"form-group\">";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "nomPhotoProfil", [], "any", false, false, false, 25), 'row');
        echo "</div>
                        <div class=\"form-group\">";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "adresseUtilisateur", [], "any", false, false, false, 26), 'row');
        echo "</div>
                        <br>
                        <div class=\"form-group\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        <button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>
                                        <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur");
        echo "\" class=\"\">
                                            <button type=\"reset\" href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur");
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
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/nouveauUtilisateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 45,  152 => 34,  148 => 33,  138 => 26,  134 => 25,  130 => 24,  126 => 23,  119 => 19,  115 => 18,  111 => 17,  107 => 16,  101 => 13,  93 => 7,  83 => 6,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block  breadcrumb %}
    <li class=\"breadcrumb-item\"><a href=\"{{ path('utilisateur') }}\"> Liste des utilisateurs</a></li>
    <li class=\"breadcrumb-item active\"> Nouvel utilisateur</li>
{% endblock %}
{% block body_inside %}
    <div class=\"container\">
        <div class=\"card card-success\">
            <div class=\"card-header\">
                Création d'un nouvel utilisateur
            </div>
            <div class=\"card-body\">
                {{ form_start(form) }}
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">{{ form_row(form.username) }}</div>
                        <div class=\"form-group\">{{ form_row(form.emailCompte) }}</div>
                        <div class=\"form-group\">{{ form_row(form.password) }}</div>
                        <div class=\"form-group\">{{ form_row(form.passwordConfirm) }}</div>
                        <div class=\"form-group\"></div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">{{ form_row(form.telephone1Utilisateur) }}</div>
                        <div class=\"form-group\">{{ form_row(form.telephone2Utilisateur) }}</div>
                        <div class=\"form-group\">{{ form_row(form.nomPhotoProfil) }}</div>
                        <div class=\"form-group\">{{ form_row(form.adresseUtilisateur) }}</div>
                        <br>
                        <div class=\"form-group\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        <button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>
                                        <a href=\"{{ path('utilisateur') }}\" class=\"\">
                                            <button type=\"reset\" href=\"{{ path('utilisateur') }}\"
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
        </div>
    </div>
{% endblock %}", "utilisateur/nouveauUtilisateur.html.twig", "G:\\TPS\\grh\\templates\\utilisateur\\nouveauUtilisateur.html.twig");
    }
}
