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

/* home/home.html.twig */
class __TwigTemplate_2a6b5953251c2d7cd8ce19a4bf91f43275a98d4835bdaaad8d00cf9dfaa75852 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/home.html.twig", 1);
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
        echo "\tpro6- GRH / Bienvenue
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
        echo "\t<div class=\"row\">
\t\t<div
\t\t\tclass=\"col-lg-3 col-6\">
\t\t\t<!-- small box -->
\t\t\t<div class=\"small-box bg-info\">
\t\t\t\t<div class=\"inner\">
\t\t\t\t\t<h3>150</h3>

\t\t\t\t\t<p>New Orders</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"icon\">
\t\t\t\t\t<i class=\"ion ion-bag\"></i>
\t\t\t\t</div>
\t\t\t\t<a href=\"#\" class=\"small-box-footer\">More info
\t\t\t\t\t<i class=\"fas fa-arrow-circle-right\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t<!-- ./col -->
\t\t<div
\t\t\tclass=\"col-lg-3 col-6\">
\t\t\t<!-- small box -->
\t\t\t<div class=\"small-box bg-success\">
\t\t\t\t<div class=\"inner\">
\t\t\t\t\t<h3>53<sup style=\"font-size: 20px\">%</sup>
\t\t\t\t\t</h3>

\t\t\t\t\t<p>Bounce Rate</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"icon\">
\t\t\t\t\t<i class=\"ion ion-stats-bars\"></i>
\t\t\t\t</div>
\t\t\t\t<a href=\"#\" class=\"small-box-footer\">More info
\t\t\t\t\t<i class=\"fas fa-arrow-circle-right\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t<!-- ./col -->
\t\t<div
\t\t\tclass=\"col-lg-3 col-6\">
\t\t\t<!-- small box -->
\t\t\t<div class=\"small-box bg-warning\">
\t\t\t\t<div class=\"inner\">
\t\t\t\t\t<h3>44</h3>

\t\t\t\t\t<p>User Registrations</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"icon\">
\t\t\t\t\t<i class=\"ion ion-person-add\"></i>
\t\t\t\t</div>
\t\t\t\t<a href=\"#\" class=\"small-box-footer\">More info
\t\t\t\t\t<i class=\"fas fa-arrow-circle-right\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t<!-- ./col -->
\t\t<div
\t\t\tclass=\"col-lg-3 col-6\">
\t\t\t<!-- small box -->
\t\t\t<div class=\"small-box bg-danger\">
\t\t\t\t<div class=\"inner\">
\t\t\t\t\t<h3>65</h3>

\t\t\t\t\t<p>Unique Visitors</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"icon\">
\t\t\t\t\t<i class=\"ion ion-pie-graph\"></i>
\t\t\t\t</div>
\t\t\t\t<a href=\"#\" class=\"small-box-footer\">More info
\t\t\t\t\t<i class=\"fas fa-arrow-circle-right\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t<!-- ./col -->
\t</div>
\t<!-- /.row -->
\t<!-- Main row -->
\t<div
\t\tclass=\"row\">
\t\t<!-- Left col -->
\t\t<section
\t\t\tclass=\"col-lg-7 connectedSortable\">
\t\t\t<!-- Custom tabs (Charts with tabs)-->
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t<h3 class=\"card-title\">
\t\t\t\t\t\t<i class=\"fas fa-chart-pie mr-1\"></i>
\t\t\t\t\t\tSales
\t\t\t\t\t</h3>
\t\t\t\t\t<div class=\"card-tools\">
\t\t\t\t\t\t<ul class=\"nav nav-pills ml-auto\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link active\" href=\"#revenue-chart\" data-toggle=\"tab\">Area</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#sales-chart\" data-toggle=\"tab\">Donut</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.card-header -->
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"tab-content p-0\">
\t\t\t\t\t\t<!-- Morris chart - Sales -->
\t\t\t\t\t\t<div class=\"chart tab-pane active\" id=\"revenue-chart\" style=\"position: relative; height: 300px;\">
\t\t\t\t\t\t\t<canvas id=\"revenue-chart-canvas\" height=\"300\" style=\"height: 300px;\"></canvas>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"chart tab-pane\" id=\"sales-chart\" style=\"position: relative; height: 300px;\">
\t\t\t\t\t\t\t<canvas id=\"sales-chart-canvas\" height=\"300\" style=\"height: 300px;\"></canvas>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.card-body -->
\t\t\t</div>
\t\t\t<!-- /.card -->

\t\t\t<!-- DIRECT CHAT -->
\t\t\t<div class=\"card direct-chat direct-chat-primary\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t<h3 class=\"card-title\">Direct Chat</h3>

\t\t\t\t\t<div class=\"card-tools\">
\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"3 New Messages\" class=\"badge badge-primary\">3</span>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
\t\t\t\t\t\t\t<i class=\"fas fa-minus\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-tool\" data-toggle=\"tooltip\" title=\"Contacts\" data-widget=\"chat-pane-toggle\">
\t\t\t\t\t\t\t<i class=\"fas fa-comments\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.card-header -->
\t\t\t\t<div
\t\t\t\t\tclass=\"card-body\">
\t\t\t\t\t<!-- Conversations are loaded here -->
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"direct-chat-messages\">
\t\t\t\t\t\t<!-- Message. Default to the left -->
\t\t\t\t\t\t<div class=\"direct-chat-msg\">
\t\t\t\t\t\t\t<div class=\"direct-chat-infos clearfix\">
\t\t\t\t\t\t\t\t<span class=\"direct-chat-name float-left\">Alexander Pierce</span>
\t\t\t\t\t\t\t\t<span class=\"direct-chat-timestamp float-right\">23 Jan 2:00 pm</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.direct-chat-infos -->
\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\tclass=\"direct-chat-img\" src=\"dist/img/user1-128x128.jpg\" alt=\"message user image\">
\t\t\t\t\t\t\t<!-- /.direct-chat-img -->
\t\t\t\t\t\t\t<div class=\"direct-chat-text\">
\t\t\t\t\t\t\t\tIs this template really for free? That's unbelievable!
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.direct-chat-text -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.direct-chat-msg -->

\t\t\t\t\t\t<!-- Message to the right -->
\t\t\t\t\t\t<div class=\"direct-chat-msg right\">
\t\t\t\t\t\t\t<div class=\"direct-chat-infos clearfix\">
\t\t\t\t\t\t\t\t<span class=\"direct-chat-name float-right\">Sarah Bullock</span>
\t\t\t\t\t\t\t\t<span class=\"direct-chat-timestamp float-left\">23 Jan 2:05 pm</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.direct-chat-infos -->
\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\tclass=\"direct-chat-img\" src=\"dist/img/user3-128x128.jpg\" alt=\"message user image\">
\t\t\t\t\t\t\t<!-- /.direct-chat-img -->
\t\t\t\t\t\t\t<div class=\"direct-chat-text\">
\t\t\t\t\t\t\t\tYou better believe it!
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.direct-chat-text -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.direct-chat-msg -->

\t\t\t\t\t\t<!-- Message. Default to the left -->
\t\t\t\t\t\t<div class=\"direct-chat-msg\">
\t\t\t\t\t\t\t<div class=\"direct-chat-infos clearfix\">
\t\t\t\t\t\t\t\t<span class=\"direct-chat-name float-left\">Alexander Pierce</span>
\t\t\t\t\t\t\t\t<span class=\"direct-chat-timestamp float-right\">23 Jan 5:37 pm</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.direct-chat-infos -->
\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\tclass=\"direct-chat-img\" src=\"dist/img/user1-128x128.jpg\" alt=\"message user image\">
\t\t\t\t\t\t\t<!-- /.direct-chat-img -->
\t\t\t\t\t\t\t<div class=\"direct-chat-text\">
\t\t\t\t\t\t\t\tWorking with AdminLTE on a great new app! Wanna join?
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.direct-chat-text -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.direct-chat-msg -->

\t\t\t\t\t\t<!-- Message to the right -->
\t\t\t\t\t\t<div class=\"direct-chat-msg right\">
\t\t\t\t\t\t\t<div class=\"direct-chat-infos clearfix\">
\t\t\t\t\t\t\t\t<span class=\"direct-chat-name float-right\">Sarah Bullock</span>
\t\t\t\t\t\t\t\t<span class=\"direct-chat-timestamp float-left\">23 Jan 6:10 pm</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.direct-chat-infos -->
\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\tclass=\"direct-chat-img\" src=\"dist/img/user3-128x128.jpg\" alt=\"message user image\">
\t\t\t\t\t\t\t<!-- /.direct-chat-img -->
\t\t\t\t\t\t\t<div class=\"direct-chat-text\">
\t\t\t\t\t\t\t\tI would love to.
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.direct-chat-text -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.direct-chat-msg -->

\t\t\t\t\t</div>
\t\t\t\t\t<!--/.direct-chat-messages-->

\t\t\t\t\t<!-- Contacts are loaded here -->
\t\t\t\t\t<div class=\"direct-chat-contacts\">
\t\t\t\t\t\t<ul class=\"contacts-list\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<img class=\"contacts-list-img\" src=\"dist/img/user1-128x128.jpg\">

\t\t\t\t\t\t\t\t\t<div class=\"contacts-list-info\">
\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-name\">
\t\t\t\t\t\t\t\t\t\t\tCount Dracula
\t\t\t\t\t\t\t\t\t\t\t<small class=\"contacts-list-date float-right\">2/28/2015</small>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-msg\">How have you been? I was...</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.contacts-list-info -->
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<!-- End Contact Item -->
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<img class=\"contacts-list-img\" src=\"dist/img/user7-128x128.jpg\">

\t\t\t\t\t\t\t\t\t<div class=\"contacts-list-info\">
\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-name\">
\t\t\t\t\t\t\t\t\t\t\tSarah Doe
\t\t\t\t\t\t\t\t\t\t\t<small class=\"contacts-list-date float-right\">2/23/2015</small>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-msg\">I will be waiting for...</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.contacts-list-info -->
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<!-- End Contact Item -->
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<img class=\"contacts-list-img\" src=\"dist/img/user3-128x128.jpg\">

\t\t\t\t\t\t\t\t\t<div class=\"contacts-list-info\">
\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-name\">
\t\t\t\t\t\t\t\t\t\t\tNadia Jolie
\t\t\t\t\t\t\t\t\t\t\t<small class=\"contacts-list-date float-right\">2/20/2015</small>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-msg\">I'll call you back at...</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.contacts-list-info -->
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<!-- End Contact Item -->
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<img class=\"contacts-list-img\" src=\"dist/img/user5-128x128.jpg\">

\t\t\t\t\t\t\t\t\t<div class=\"contacts-list-info\">
\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-name\">
\t\t\t\t\t\t\t\t\t\t\tNora S. Vans
\t\t\t\t\t\t\t\t\t\t\t<small class=\"contacts-list-date float-right\">2/10/2015</small>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-msg\">Where is your new...</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.contacts-list-info -->
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<!-- End Contact Item -->
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<img class=\"contacts-list-img\" src=\"dist/img/user6-128x128.jpg\">

\t\t\t\t\t\t\t\t\t<div class=\"contacts-list-info\">
\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-name\">
\t\t\t\t\t\t\t\t\t\t\tJohn K.
\t\t\t\t\t\t\t\t\t\t\t<small class=\"contacts-list-date float-right\">1/27/2015</small>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-msg\">Can I take a look at...</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.contacts-list-info -->
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<!-- End Contact Item -->
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<img class=\"contacts-list-img\" src=\"dist/img/user8-128x128.jpg\">

\t\t\t\t\t\t\t\t\t<div class=\"contacts-list-info\">
\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-name\">
\t\t\t\t\t\t\t\t\t\t\tKenneth M.
\t\t\t\t\t\t\t\t\t\t\t<small class=\"contacts-list-date float-right\">1/4/2015</small>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-msg\">Never mind I found...</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.contacts-list-info -->
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<!-- End Contact Item -->
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<!-- /.contacts-list -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.direct-chat-pane -->
\t\t\t\t</div>
\t\t\t\t<!-- /.card-body -->
\t\t\t\t<div class=\"card-footer\">
\t\t\t\t\t<form action=\"#\" method=\"post\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"message\" placeholder=\"Type Message ...\" class=\"form-control\">
\t\t\t\t\t\t\t<span class=\"input-group-append\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">Send</button>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<!-- /.card-footer-->
\t\t\t</div>
\t\t\t<!--/.direct-chat -->

\t\t\t<!-- TO DO List -->
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t<h3 class=\"card-title\">
\t\t\t\t\t\t<i class=\"ion ion-clipboard mr-1\"></i>
\t\t\t\t\t\tTo Do List
\t\t\t\t\t</h3>

\t\t\t\t\t<div class=\"card-tools\">
\t\t\t\t\t\t<ul class=\"pagination pagination-sm\">
\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"page-link\">&laquo;</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"page-link\">1</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"page-link\">2</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"page-link\">3</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"page-link\">&raquo;</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.card-header -->
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<ul class=\"todo-list\" data-widget=\"todo-list\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<!-- drag handle -->
\t\t\t\t\t\t\t<span class=\"handle\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<!-- checkbox -->
\t\t\t\t\t\t\t<div class=\"icheck-primary d-inline ml-2\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"\" name=\"todo1\" id=\"todoCheck1\">
\t\t\t\t\t\t\t\t<label for=\"todoCheck1\"></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- todo text -->
\t\t\t\t\t\t\t<span class=\"text\">Design a nice theme</span>
\t\t\t\t\t\t\t<!-- Emphasis label -->
\t\t\t\t\t\t\t<small class=\"badge badge-danger\">
\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t2 mins</small>
\t\t\t\t\t\t\t<!-- General tools such as edit or delete-->
\t\t\t\t\t\t\t<div class=\"tools\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t\t\t<i class=\"fas fa-trash-o\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<span class=\"handle\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<div class=\"icheck-primary d-inline ml-2\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"\" name=\"todo2\" id=\"todoCheck2\" checked>
\t\t\t\t\t\t\t\t<label for=\"todoCheck2\"></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"text\">Make the theme responsive</span>
\t\t\t\t\t\t\t<small class=\"badge badge-info\">
\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t4 hours</small>
\t\t\t\t\t\t\t<div class=\"tools\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t\t\t<i class=\"fas fa-trash-o\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<span class=\"handle\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<div class=\"icheck-primary d-inline ml-2\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"\" name=\"todo3\" id=\"todoCheck3\">
\t\t\t\t\t\t\t\t<label for=\"todoCheck3\"></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"text\">Let theme shine like a star</span>
\t\t\t\t\t\t\t<small class=\"badge badge-warning\">
\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t1 day</small>
\t\t\t\t\t\t\t<div class=\"tools\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t\t\t<i class=\"fas fa-trash-o\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<span class=\"handle\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<div class=\"icheck-primary d-inline ml-2\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"\" name=\"todo4\" id=\"todoCheck4\">
\t\t\t\t\t\t\t\t<label for=\"todoCheck4\"></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"text\">Let theme shine like a star</span>
\t\t\t\t\t\t\t<small class=\"badge badge-success\">
\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t3 days</small>
\t\t\t\t\t\t\t<div class=\"tools\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t\t\t<i class=\"fas fa-trash-o\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<span class=\"handle\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<div class=\"icheck-primary d-inline ml-2\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"\" name=\"todo5\" id=\"todoCheck5\">
\t\t\t\t\t\t\t\t<label for=\"todoCheck5\"></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"text\">Check your messages and notifications</span>
\t\t\t\t\t\t\t<small class=\"badge badge-primary\">
\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t1 week</small>
\t\t\t\t\t\t\t<div class=\"tools\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t\t\t<i class=\"fas fa-trash-o\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<span class=\"handle\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<div class=\"icheck-primary d-inline ml-2\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"\" name=\"todo6\" id=\"todoCheck6\">
\t\t\t\t\t\t\t\t<label for=\"todoCheck6\"></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"text\">Let theme shine like a star</span>
\t\t\t\t\t\t\t<small class=\"badge badge-secondary\">
\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t1 month</small>
\t\t\t\t\t\t\t<div class=\"tools\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t\t\t<i class=\"fas fa-trash-o\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<!-- /.card-body -->
\t\t\t\t<div class=\"card-footer clearfix\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-info float-right\">
\t\t\t\t\t\t<i class=\"fas fa-plus\"></i>
\t\t\t\t\t\tAdd item</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /.card -->
\t\t</section>
\t\t<!-- /.Left col -->
\t\t<!-- right col (We are only adding the ID to make the widgets sortable)-->
\t\t<section
\t\t\tclass=\"col-lg-5 connectedSortable\">

\t\t\t<!-- Map card -->
\t\t\t<div class=\"card bg-gradient-primary\">
\t\t\t\t<div class=\"card-header border-0\">
\t\t\t\t\t<h3 class=\"card-title\">
\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt mr-1\"></i>
\t\t\t\t\t\tVisitors
\t\t\t\t\t</h3>
\t\t\t\t\t<!-- card tools -->
\t\t\t\t\t<div class=\"card-tools\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-sm daterange\" data-toggle=\"tooltip\" title=\"Date range\">
\t\t\t\t\t\t\t<i class=\"far fa-calendar-alt\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-sm\" data-card-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\">
\t\t\t\t\t\t\t<i class=\"fas fa-minus\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.card-tools -->
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<div id=\"world-map\" style=\"height: 250px; width: 100%;\"></div>
\t\t\t\t</div>
\t\t\t\t<!-- /.card-body-->
\t\t\t\t<div class=\"card-footer bg-transparent\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-4 text-center\">
\t\t\t\t\t\t\t<div id=\"sparkline-1\"></div>
\t\t\t\t\t\t\t<div class=\"text-white\">Visitors</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t<div class=\"col-4 text-center\">
\t\t\t\t\t\t\t<div id=\"sparkline-2\"></div>
\t\t\t\t\t\t\t<div class=\"text-white\">Online</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t<div class=\"col-4 text-center\">
\t\t\t\t\t\t\t<div id=\"sparkline-3\"></div>
\t\t\t\t\t\t\t<div class=\"text-white\">Sales</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.row -->
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /.card -->

\t\t\t<!-- solid sales graph -->
\t\t\t<div class=\"card bg-gradient-info\">
\t\t\t\t<div class=\"card-header border-0\">
\t\t\t\t\t<h3 class=\"card-title\">
\t\t\t\t\t\t<i class=\"fas fa-th mr-1\"></i>
\t\t\t\t\t\tSales Graph
\t\t\t\t\t</h3>

\t\t\t\t\t<div class=\"card-tools\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn bg-info btn-sm\" data-card-widget=\"collapse\">
\t\t\t\t\t\t\t<i class=\"fas fa-minus\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn bg-info btn-sm\" data-card-widget=\"remove\">
\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<canvas class=\"chart\" id=\"line-chart\" style=\"min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;\"></canvas>
\t\t\t\t</div>
\t\t\t\t<!-- /.card-body -->
\t\t\t\t<div class=\"card-footer bg-transparent\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-4 text-center\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"20\" data-width=\"60\" data-height=\"60\" data-fgcolor=\"#39CCCC\">

\t\t\t\t\t\t\t<div class=\"text-white\">Mail-Orders</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t<div class=\"col-4 text-center\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"50\" data-width=\"60\" data-height=\"60\" data-fgcolor=\"#39CCCC\">

\t\t\t\t\t\t\t<div class=\"text-white\">Online</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t<div class=\"col-4 text-center\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"30\" data-width=\"60\" data-height=\"60\" data-fgcolor=\"#39CCCC\">

\t\t\t\t\t\t\t<div class=\"text-white\">In-Store</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.row -->
\t\t\t\t</div>
\t\t\t\t<!-- /.card-footer -->
\t\t\t</div>
\t\t\t<!-- /.card -->

\t\t\t<!-- Calendar -->
\t\t\t<div class=\"card bg-gradient-success\">
\t\t\t\t<div class=\"card-header border-0\">

\t\t\t\t\t<h3 class=\"card-title\">
\t\t\t\t\t\t<i class=\"far fa-calendar-alt\"></i>
\t\t\t\t\t\tCalendar
\t\t\t\t\t</h3>
\t\t\t\t\t<!-- tools card -->
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"card-tools\">
\t\t\t\t\t\t<!-- button with a dropdown -->
\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-bars\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<div class=\"dropdown-menu float-right\" role=\"menu\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">Add new event</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">Clear events</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">View calendar</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success btn-sm\" data-card-widget=\"collapse\">
\t\t\t\t\t\t\t<i class=\"fas fa-minus\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success btn-sm\" data-card-widget=\"remove\">
\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /. tools -->
\t\t\t\t</div>
\t\t\t\t<!-- /.card-header -->
\t\t\t\t<div
\t\t\t\t\tclass=\"card-body pt-0\">
\t\t\t\t\t<!--The calendar -->
\t\t\t\t\t<div id=\"calendar\" style=\"width: 100%\"></div>
\t\t\t\t</div>
\t\t\t\t<!-- /.card-body -->
\t\t\t</div>
\t\t\t<!-- /.card -->
\t\t</section>
\t\t<!-- right col -->
\t</div>
\t<!-- /.row (main row) -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 7,  99 => 6,  81 => 5,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
\tpro6- GRH / Bienvenue
{% endblock %}
{% block  breadcrumb %}{% endblock %}
{% block body_inside %}
\t<div class=\"row\">
\t\t<div
\t\t\tclass=\"col-lg-3 col-6\">
\t\t\t<!-- small box -->
\t\t\t<div class=\"small-box bg-info\">
\t\t\t\t<div class=\"inner\">
\t\t\t\t\t<h3>150</h3>

\t\t\t\t\t<p>New Orders</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"icon\">
\t\t\t\t\t<i class=\"ion ion-bag\"></i>
\t\t\t\t</div>
\t\t\t\t<a href=\"#\" class=\"small-box-footer\">More info
\t\t\t\t\t<i class=\"fas fa-arrow-circle-right\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t<!-- ./col -->
\t\t<div
\t\t\tclass=\"col-lg-3 col-6\">
\t\t\t<!-- small box -->
\t\t\t<div class=\"small-box bg-success\">
\t\t\t\t<div class=\"inner\">
\t\t\t\t\t<h3>53<sup style=\"font-size: 20px\">%</sup>
\t\t\t\t\t</h3>

\t\t\t\t\t<p>Bounce Rate</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"icon\">
\t\t\t\t\t<i class=\"ion ion-stats-bars\"></i>
\t\t\t\t</div>
\t\t\t\t<a href=\"#\" class=\"small-box-footer\">More info
\t\t\t\t\t<i class=\"fas fa-arrow-circle-right\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t<!-- ./col -->
\t\t<div
\t\t\tclass=\"col-lg-3 col-6\">
\t\t\t<!-- small box -->
\t\t\t<div class=\"small-box bg-warning\">
\t\t\t\t<div class=\"inner\">
\t\t\t\t\t<h3>44</h3>

\t\t\t\t\t<p>User Registrations</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"icon\">
\t\t\t\t\t<i class=\"ion ion-person-add\"></i>
\t\t\t\t</div>
\t\t\t\t<a href=\"#\" class=\"small-box-footer\">More info
\t\t\t\t\t<i class=\"fas fa-arrow-circle-right\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t<!-- ./col -->
\t\t<div
\t\t\tclass=\"col-lg-3 col-6\">
\t\t\t<!-- small box -->
\t\t\t<div class=\"small-box bg-danger\">
\t\t\t\t<div class=\"inner\">
\t\t\t\t\t<h3>65</h3>

\t\t\t\t\t<p>Unique Visitors</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"icon\">
\t\t\t\t\t<i class=\"ion ion-pie-graph\"></i>
\t\t\t\t</div>
\t\t\t\t<a href=\"#\" class=\"small-box-footer\">More info
\t\t\t\t\t<i class=\"fas fa-arrow-circle-right\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t<!-- ./col -->
\t</div>
\t<!-- /.row -->
\t<!-- Main row -->
\t<div
\t\tclass=\"row\">
\t\t<!-- Left col -->
\t\t<section
\t\t\tclass=\"col-lg-7 connectedSortable\">
\t\t\t<!-- Custom tabs (Charts with tabs)-->
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t<h3 class=\"card-title\">
\t\t\t\t\t\t<i class=\"fas fa-chart-pie mr-1\"></i>
\t\t\t\t\t\tSales
\t\t\t\t\t</h3>
\t\t\t\t\t<div class=\"card-tools\">
\t\t\t\t\t\t<ul class=\"nav nav-pills ml-auto\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link active\" href=\"#revenue-chart\" data-toggle=\"tab\">Area</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#sales-chart\" data-toggle=\"tab\">Donut</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.card-header -->
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"tab-content p-0\">
\t\t\t\t\t\t<!-- Morris chart - Sales -->
\t\t\t\t\t\t<div class=\"chart tab-pane active\" id=\"revenue-chart\" style=\"position: relative; height: 300px;\">
\t\t\t\t\t\t\t<canvas id=\"revenue-chart-canvas\" height=\"300\" style=\"height: 300px;\"></canvas>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"chart tab-pane\" id=\"sales-chart\" style=\"position: relative; height: 300px;\">
\t\t\t\t\t\t\t<canvas id=\"sales-chart-canvas\" height=\"300\" style=\"height: 300px;\"></canvas>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.card-body -->
\t\t\t</div>
\t\t\t<!-- /.card -->

\t\t\t<!-- DIRECT CHAT -->
\t\t\t<div class=\"card direct-chat direct-chat-primary\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t<h3 class=\"card-title\">Direct Chat</h3>

\t\t\t\t\t<div class=\"card-tools\">
\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"3 New Messages\" class=\"badge badge-primary\">3</span>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
\t\t\t\t\t\t\t<i class=\"fas fa-minus\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-tool\" data-toggle=\"tooltip\" title=\"Contacts\" data-widget=\"chat-pane-toggle\">
\t\t\t\t\t\t\t<i class=\"fas fa-comments\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.card-header -->
\t\t\t\t<div
\t\t\t\t\tclass=\"card-body\">
\t\t\t\t\t<!-- Conversations are loaded here -->
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"direct-chat-messages\">
\t\t\t\t\t\t<!-- Message. Default to the left -->
\t\t\t\t\t\t<div class=\"direct-chat-msg\">
\t\t\t\t\t\t\t<div class=\"direct-chat-infos clearfix\">
\t\t\t\t\t\t\t\t<span class=\"direct-chat-name float-left\">Alexander Pierce</span>
\t\t\t\t\t\t\t\t<span class=\"direct-chat-timestamp float-right\">23 Jan 2:00 pm</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.direct-chat-infos -->
\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\tclass=\"direct-chat-img\" src=\"dist/img/user1-128x128.jpg\" alt=\"message user image\">
\t\t\t\t\t\t\t<!-- /.direct-chat-img -->
\t\t\t\t\t\t\t<div class=\"direct-chat-text\">
\t\t\t\t\t\t\t\tIs this template really for free? That's unbelievable!
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.direct-chat-text -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.direct-chat-msg -->

\t\t\t\t\t\t<!-- Message to the right -->
\t\t\t\t\t\t<div class=\"direct-chat-msg right\">
\t\t\t\t\t\t\t<div class=\"direct-chat-infos clearfix\">
\t\t\t\t\t\t\t\t<span class=\"direct-chat-name float-right\">Sarah Bullock</span>
\t\t\t\t\t\t\t\t<span class=\"direct-chat-timestamp float-left\">23 Jan 2:05 pm</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.direct-chat-infos -->
\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\tclass=\"direct-chat-img\" src=\"dist/img/user3-128x128.jpg\" alt=\"message user image\">
\t\t\t\t\t\t\t<!-- /.direct-chat-img -->
\t\t\t\t\t\t\t<div class=\"direct-chat-text\">
\t\t\t\t\t\t\t\tYou better believe it!
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.direct-chat-text -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.direct-chat-msg -->

\t\t\t\t\t\t<!-- Message. Default to the left -->
\t\t\t\t\t\t<div class=\"direct-chat-msg\">
\t\t\t\t\t\t\t<div class=\"direct-chat-infos clearfix\">
\t\t\t\t\t\t\t\t<span class=\"direct-chat-name float-left\">Alexander Pierce</span>
\t\t\t\t\t\t\t\t<span class=\"direct-chat-timestamp float-right\">23 Jan 5:37 pm</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.direct-chat-infos -->
\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\tclass=\"direct-chat-img\" src=\"dist/img/user1-128x128.jpg\" alt=\"message user image\">
\t\t\t\t\t\t\t<!-- /.direct-chat-img -->
\t\t\t\t\t\t\t<div class=\"direct-chat-text\">
\t\t\t\t\t\t\t\tWorking with AdminLTE on a great new app! Wanna join?
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.direct-chat-text -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.direct-chat-msg -->

\t\t\t\t\t\t<!-- Message to the right -->
\t\t\t\t\t\t<div class=\"direct-chat-msg right\">
\t\t\t\t\t\t\t<div class=\"direct-chat-infos clearfix\">
\t\t\t\t\t\t\t\t<span class=\"direct-chat-name float-right\">Sarah Bullock</span>
\t\t\t\t\t\t\t\t<span class=\"direct-chat-timestamp float-left\">23 Jan 6:10 pm</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.direct-chat-infos -->
\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\tclass=\"direct-chat-img\" src=\"dist/img/user3-128x128.jpg\" alt=\"message user image\">
\t\t\t\t\t\t\t<!-- /.direct-chat-img -->
\t\t\t\t\t\t\t<div class=\"direct-chat-text\">
\t\t\t\t\t\t\t\tI would love to.
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.direct-chat-text -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.direct-chat-msg -->

\t\t\t\t\t</div>
\t\t\t\t\t<!--/.direct-chat-messages-->

\t\t\t\t\t<!-- Contacts are loaded here -->
\t\t\t\t\t<div class=\"direct-chat-contacts\">
\t\t\t\t\t\t<ul class=\"contacts-list\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<img class=\"contacts-list-img\" src=\"dist/img/user1-128x128.jpg\">

\t\t\t\t\t\t\t\t\t<div class=\"contacts-list-info\">
\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-name\">
\t\t\t\t\t\t\t\t\t\t\tCount Dracula
\t\t\t\t\t\t\t\t\t\t\t<small class=\"contacts-list-date float-right\">2/28/2015</small>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-msg\">How have you been? I was...</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.contacts-list-info -->
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<!-- End Contact Item -->
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<img class=\"contacts-list-img\" src=\"dist/img/user7-128x128.jpg\">

\t\t\t\t\t\t\t\t\t<div class=\"contacts-list-info\">
\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-name\">
\t\t\t\t\t\t\t\t\t\t\tSarah Doe
\t\t\t\t\t\t\t\t\t\t\t<small class=\"contacts-list-date float-right\">2/23/2015</small>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-msg\">I will be waiting for...</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.contacts-list-info -->
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<!-- End Contact Item -->
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<img class=\"contacts-list-img\" src=\"dist/img/user3-128x128.jpg\">

\t\t\t\t\t\t\t\t\t<div class=\"contacts-list-info\">
\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-name\">
\t\t\t\t\t\t\t\t\t\t\tNadia Jolie
\t\t\t\t\t\t\t\t\t\t\t<small class=\"contacts-list-date float-right\">2/20/2015</small>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-msg\">I'll call you back at...</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.contacts-list-info -->
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<!-- End Contact Item -->
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<img class=\"contacts-list-img\" src=\"dist/img/user5-128x128.jpg\">

\t\t\t\t\t\t\t\t\t<div class=\"contacts-list-info\">
\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-name\">
\t\t\t\t\t\t\t\t\t\t\tNora S. Vans
\t\t\t\t\t\t\t\t\t\t\t<small class=\"contacts-list-date float-right\">2/10/2015</small>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-msg\">Where is your new...</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.contacts-list-info -->
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<!-- End Contact Item -->
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<img class=\"contacts-list-img\" src=\"dist/img/user6-128x128.jpg\">

\t\t\t\t\t\t\t\t\t<div class=\"contacts-list-info\">
\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-name\">
\t\t\t\t\t\t\t\t\t\t\tJohn K.
\t\t\t\t\t\t\t\t\t\t\t<small class=\"contacts-list-date float-right\">1/27/2015</small>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-msg\">Can I take a look at...</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.contacts-list-info -->
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<!-- End Contact Item -->
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<img class=\"contacts-list-img\" src=\"dist/img/user8-128x128.jpg\">

\t\t\t\t\t\t\t\t\t<div class=\"contacts-list-info\">
\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-name\">
\t\t\t\t\t\t\t\t\t\t\tKenneth M.
\t\t\t\t\t\t\t\t\t\t\t<small class=\"contacts-list-date float-right\">1/4/2015</small>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-msg\">Never mind I found...</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.contacts-list-info -->
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<!-- End Contact Item -->
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<!-- /.contacts-list -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.direct-chat-pane -->
\t\t\t\t</div>
\t\t\t\t<!-- /.card-body -->
\t\t\t\t<div class=\"card-footer\">
\t\t\t\t\t<form action=\"#\" method=\"post\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"message\" placeholder=\"Type Message ...\" class=\"form-control\">
\t\t\t\t\t\t\t<span class=\"input-group-append\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">Send</button>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<!-- /.card-footer-->
\t\t\t</div>
\t\t\t<!--/.direct-chat -->

\t\t\t<!-- TO DO List -->
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t<h3 class=\"card-title\">
\t\t\t\t\t\t<i class=\"ion ion-clipboard mr-1\"></i>
\t\t\t\t\t\tTo Do List
\t\t\t\t\t</h3>

\t\t\t\t\t<div class=\"card-tools\">
\t\t\t\t\t\t<ul class=\"pagination pagination-sm\">
\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"page-link\">&laquo;</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"page-link\">1</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"page-link\">2</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"page-link\">3</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"page-link\">&raquo;</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.card-header -->
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<ul class=\"todo-list\" data-widget=\"todo-list\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<!-- drag handle -->
\t\t\t\t\t\t\t<span class=\"handle\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<!-- checkbox -->
\t\t\t\t\t\t\t<div class=\"icheck-primary d-inline ml-2\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"\" name=\"todo1\" id=\"todoCheck1\">
\t\t\t\t\t\t\t\t<label for=\"todoCheck1\"></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- todo text -->
\t\t\t\t\t\t\t<span class=\"text\">Design a nice theme</span>
\t\t\t\t\t\t\t<!-- Emphasis label -->
\t\t\t\t\t\t\t<small class=\"badge badge-danger\">
\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t2 mins</small>
\t\t\t\t\t\t\t<!-- General tools such as edit or delete-->
\t\t\t\t\t\t\t<div class=\"tools\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t\t\t<i class=\"fas fa-trash-o\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<span class=\"handle\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<div class=\"icheck-primary d-inline ml-2\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"\" name=\"todo2\" id=\"todoCheck2\" checked>
\t\t\t\t\t\t\t\t<label for=\"todoCheck2\"></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"text\">Make the theme responsive</span>
\t\t\t\t\t\t\t<small class=\"badge badge-info\">
\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t4 hours</small>
\t\t\t\t\t\t\t<div class=\"tools\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t\t\t<i class=\"fas fa-trash-o\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<span class=\"handle\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<div class=\"icheck-primary d-inline ml-2\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"\" name=\"todo3\" id=\"todoCheck3\">
\t\t\t\t\t\t\t\t<label for=\"todoCheck3\"></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"text\">Let theme shine like a star</span>
\t\t\t\t\t\t\t<small class=\"badge badge-warning\">
\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t1 day</small>
\t\t\t\t\t\t\t<div class=\"tools\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t\t\t<i class=\"fas fa-trash-o\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<span class=\"handle\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<div class=\"icheck-primary d-inline ml-2\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"\" name=\"todo4\" id=\"todoCheck4\">
\t\t\t\t\t\t\t\t<label for=\"todoCheck4\"></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"text\">Let theme shine like a star</span>
\t\t\t\t\t\t\t<small class=\"badge badge-success\">
\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t3 days</small>
\t\t\t\t\t\t\t<div class=\"tools\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t\t\t<i class=\"fas fa-trash-o\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<span class=\"handle\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<div class=\"icheck-primary d-inline ml-2\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"\" name=\"todo5\" id=\"todoCheck5\">
\t\t\t\t\t\t\t\t<label for=\"todoCheck5\"></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"text\">Check your messages and notifications</span>
\t\t\t\t\t\t\t<small class=\"badge badge-primary\">
\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t1 week</small>
\t\t\t\t\t\t\t<div class=\"tools\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t\t\t<i class=\"fas fa-trash-o\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<span class=\"handle\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<div class=\"icheck-primary d-inline ml-2\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"\" name=\"todo6\" id=\"todoCheck6\">
\t\t\t\t\t\t\t\t<label for=\"todoCheck6\"></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"text\">Let theme shine like a star</span>
\t\t\t\t\t\t\t<small class=\"badge badge-secondary\">
\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t1 month</small>
\t\t\t\t\t\t\t<div class=\"tools\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t\t\t<i class=\"fas fa-trash-o\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<!-- /.card-body -->
\t\t\t\t<div class=\"card-footer clearfix\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-info float-right\">
\t\t\t\t\t\t<i class=\"fas fa-plus\"></i>
\t\t\t\t\t\tAdd item</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /.card -->
\t\t</section>
\t\t<!-- /.Left col -->
\t\t<!-- right col (We are only adding the ID to make the widgets sortable)-->
\t\t<section
\t\t\tclass=\"col-lg-5 connectedSortable\">

\t\t\t<!-- Map card -->
\t\t\t<div class=\"card bg-gradient-primary\">
\t\t\t\t<div class=\"card-header border-0\">
\t\t\t\t\t<h3 class=\"card-title\">
\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt mr-1\"></i>
\t\t\t\t\t\tVisitors
\t\t\t\t\t</h3>
\t\t\t\t\t<!-- card tools -->
\t\t\t\t\t<div class=\"card-tools\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-sm daterange\" data-toggle=\"tooltip\" title=\"Date range\">
\t\t\t\t\t\t\t<i class=\"far fa-calendar-alt\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-sm\" data-card-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\">
\t\t\t\t\t\t\t<i class=\"fas fa-minus\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.card-tools -->
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<div id=\"world-map\" style=\"height: 250px; width: 100%;\"></div>
\t\t\t\t</div>
\t\t\t\t<!-- /.card-body-->
\t\t\t\t<div class=\"card-footer bg-transparent\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-4 text-center\">
\t\t\t\t\t\t\t<div id=\"sparkline-1\"></div>
\t\t\t\t\t\t\t<div class=\"text-white\">Visitors</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t<div class=\"col-4 text-center\">
\t\t\t\t\t\t\t<div id=\"sparkline-2\"></div>
\t\t\t\t\t\t\t<div class=\"text-white\">Online</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t<div class=\"col-4 text-center\">
\t\t\t\t\t\t\t<div id=\"sparkline-3\"></div>
\t\t\t\t\t\t\t<div class=\"text-white\">Sales</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.row -->
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /.card -->

\t\t\t<!-- solid sales graph -->
\t\t\t<div class=\"card bg-gradient-info\">
\t\t\t\t<div class=\"card-header border-0\">
\t\t\t\t\t<h3 class=\"card-title\">
\t\t\t\t\t\t<i class=\"fas fa-th mr-1\"></i>
\t\t\t\t\t\tSales Graph
\t\t\t\t\t</h3>

\t\t\t\t\t<div class=\"card-tools\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn bg-info btn-sm\" data-card-widget=\"collapse\">
\t\t\t\t\t\t\t<i class=\"fas fa-minus\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn bg-info btn-sm\" data-card-widget=\"remove\">
\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<canvas class=\"chart\" id=\"line-chart\" style=\"min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;\"></canvas>
\t\t\t\t</div>
\t\t\t\t<!-- /.card-body -->
\t\t\t\t<div class=\"card-footer bg-transparent\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-4 text-center\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"20\" data-width=\"60\" data-height=\"60\" data-fgcolor=\"#39CCCC\">

\t\t\t\t\t\t\t<div class=\"text-white\">Mail-Orders</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t<div class=\"col-4 text-center\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"50\" data-width=\"60\" data-height=\"60\" data-fgcolor=\"#39CCCC\">

\t\t\t\t\t\t\t<div class=\"text-white\">Online</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t<div class=\"col-4 text-center\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"30\" data-width=\"60\" data-height=\"60\" data-fgcolor=\"#39CCCC\">

\t\t\t\t\t\t\t<div class=\"text-white\">In-Store</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.row -->
\t\t\t\t</div>
\t\t\t\t<!-- /.card-footer -->
\t\t\t</div>
\t\t\t<!-- /.card -->

\t\t\t<!-- Calendar -->
\t\t\t<div class=\"card bg-gradient-success\">
\t\t\t\t<div class=\"card-header border-0\">

\t\t\t\t\t<h3 class=\"card-title\">
\t\t\t\t\t\t<i class=\"far fa-calendar-alt\"></i>
\t\t\t\t\t\tCalendar
\t\t\t\t\t</h3>
\t\t\t\t\t<!-- tools card -->
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"card-tools\">
\t\t\t\t\t\t<!-- button with a dropdown -->
\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-bars\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<div class=\"dropdown-menu float-right\" role=\"menu\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">Add new event</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">Clear events</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">View calendar</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success btn-sm\" data-card-widget=\"collapse\">
\t\t\t\t\t\t\t<i class=\"fas fa-minus\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success btn-sm\" data-card-widget=\"remove\">
\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /. tools -->
\t\t\t\t</div>
\t\t\t\t<!-- /.card-header -->
\t\t\t\t<div
\t\t\t\t\tclass=\"card-body pt-0\">
\t\t\t\t\t<!--The calendar -->
\t\t\t\t\t<div id=\"calendar\" style=\"width: 100%\"></div>
\t\t\t\t</div>
\t\t\t\t<!-- /.card-body -->
\t\t\t</div>
\t\t\t<!-- /.card -->
\t\t</section>
\t\t<!-- right col -->
\t</div>
\t<!-- /.row (main row) -->

{% endblock %}
", "home/home.html.twig", "D:\\GOLDMAN\\PROJECTS\\Symfony\\GRH\\templates\\home\\home.html.twig");
    }
}
