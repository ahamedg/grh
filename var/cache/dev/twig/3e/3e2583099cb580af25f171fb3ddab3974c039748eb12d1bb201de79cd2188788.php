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

/* connexion/login.html.twig */
class __TwigTemplate_d4e96dddd49290daed51f73c77820ba88b81c2c200fe98c026def84d41de8338 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "connexion/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "connexion/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "connexion/login.html.twig", 1);
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
        echo "    pro6- GRH / Page de connexion
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <br/>
    <div class=\"contain bg-light\">
        <div class=\"row\">
            <div class=\"col-md-4\"></div>
            <div class=\"col-md-4\">
                <div class=\"card card-info text-center\">
                    <div class=\"card-header\">
                        pro6- GRH <br/>
                        <h4>Page de connexion</h4>
                    </div>

                        ";
        // line 17
        if ((isset($context["hasError"]) || array_key_exists("hasError", $context) ? $context["hasError"] : (function () { throw new RuntimeError('Variable "hasError" does not exist.', 17, $this->source); })())) {
            // line 18
            echo "                            <div class=\"alert alert-danger\">
                                Erreur survenue. Email ou mot de passe incorrect
                            </div>
                        ";
        }
        // line 22
        echo "
                    <div class=\"card-body\">
                        <form action=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"post\">
                            <div class=\"form-group\">
                                <label for=\"username\" class=\"float-left\">Adresse email</label>
                                <input type=\"text\" name=\"_username\" id=\"username\" class=\"form-control\"
                                       placeholder=\"Adresse email...\" required value=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"password\" class=\"float-left\">Mot de passe</label>
                                <input type=\"password\" name=\"_password\" id=\"password\" class=\"form-control\"
                                       placeholder=\"Mot de passe...\" required>
                            </div>
                            <div class=\"form-group\">
                                <button type=\"submit\" class=\"btn btn-info float-right\">Se connecter</button>
                            </div>
                        </form>
                    </div>
                    <div class=\"card-footer text-center\">
                        <strong>
                            Copyright &copy; <a href=\"http://tgprosystems.com\"> TOGO PROSYSTEMS SARL 2019</a>
                        </strong>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\"></div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "connexion/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 28,  115 => 24,  111 => 22,  105 => 18,  103 => 17,  90 => 6,  80 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    pro6- GRH / Page de connexion
{% endblock %}
{% block body %}
    <br/>
    <div class=\"contain bg-light\">
        <div class=\"row\">
            <div class=\"col-md-4\"></div>
            <div class=\"col-md-4\">
                <div class=\"card card-info text-center\">
                    <div class=\"card-header\">
                        pro6- GRH <br/>
                        <h4>Page de connexion</h4>
                    </div>

                        {% if hasError %}
                            <div class=\"alert alert-danger\">
                                Erreur survenue. Email ou mot de passe incorrect
                            </div>
                        {% endif %}

                    <div class=\"card-body\">
                        <form action=\"{{ path('login') }}\" method=\"post\">
                            <div class=\"form-group\">
                                <label for=\"username\" class=\"float-left\">Adresse email</label>
                                <input type=\"text\" name=\"_username\" id=\"username\" class=\"form-control\"
                                       placeholder=\"Adresse email...\" required value=\"{{ username }}\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"password\" class=\"float-left\">Mot de passe</label>
                                <input type=\"password\" name=\"_password\" id=\"password\" class=\"form-control\"
                                       placeholder=\"Mot de passe...\" required>
                            </div>
                            <div class=\"form-group\">
                                <button type=\"submit\" class=\"btn btn-info float-right\">Se connecter</button>
                            </div>
                        </form>
                    </div>
                    <div class=\"card-footer text-center\">
                        <strong>
                            Copyright &copy; <a href=\"http://tgprosystems.com\"> TOGO PROSYSTEMS SARL 2019</a>
                        </strong>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\"></div>
        </div>
    </div>
{% endblock %}
", "connexion/login.html.twig", "G:\\TPS\\grh\\templates\\connexion\\login.html.twig");
    }
}
