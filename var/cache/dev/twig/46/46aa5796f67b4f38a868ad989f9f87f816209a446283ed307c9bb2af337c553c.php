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

/* base.html.twig */
class __TwigTemplate_f996c15baf2612489432f966d0fbf149456c4c417fb152780415427d4f26d845 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'body_inside' => [$this, 'block_body_inside'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>
        ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 11
        echo "    </title>


    ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 63
        echo "</head>
<body class=\"hold-transition sidebar-mini layout-fixed\">
";
        // line 65
        $this->displayBlock('body', $context, $blocks);
        // line 152
        $this->displayBlock('javascripts', $context, $blocks);
        // line 379
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 9
        echo "            pro6- GRH
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\"
              href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/jqvmap/jqvmap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/dist/css/adminlte.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/ion-rangeslider/css/ion.rangeSlider.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/jqvmap/jqvmap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/select2/css/select2.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\"
              href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/summernote/summernote.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\"
              href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/summernote/summernote-bs4.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/sweetalert2/sweetalert2.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\"
              href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/bootstrap-slider/css/bootstrap-slider.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\"
              href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/chart.js/Chart.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\"
              href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\"
              href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\"
              href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/datatables-scroller/css/scroller.bootstrap4.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/datatables-select/css/select.bootstrap4.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/ekko-lightbox/ekko-lightbox.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/flag-icon-css/css/flag-icon.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/fullcalendar/main.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/fullcalendar-bootstrap/main.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/fullcalendar-daygrid/main.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/fullcalendar-timegrid/main.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/toastr/toastr.min.js"), "html", null, true);
        echo "\">

        <link rel=\"stylesheet\" href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        ";
        // line 58
        echo "        <!-- Nos css intégrés -->
        <link rel=\"stylesheet\"
              href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("customs/css/style.css"), "html", null, true);
        echo "\"> ";
        // line 61
        echo "        ";
        // line 62
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 65
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 66
        echo "    <div class=\"wrapper\">
        ";
        // line 67
        $this->loadTemplate("partials/header.html.twig", "base.html.twig", 67)->display($context);
        // line 68
        echo "        ";
        $this->loadTemplate("partials/sidebar.html.twig", "base.html.twig", 68)->display($context);
        // line 69
        echo "        <!-- Content Wrapper. Contains page content -->
        <div
                class=\"content-wrapper\">
            <!-- Content Header (Page header) -->
            <div class=\"content-header\">
                <div class=\"container-fluid\">
                    <div class=\"row mb-2\">
                        <div class=\"col-sm-6\"></div>
                        <!-- /.col -->
                        <div class=\"col-sm-6\">
                            <ol class=\"breadcrumb float-sm-right\">
                                <li class=\"breadcrumb-item\">
                                    <a href=\"/accueil\">Home</a>
                                </li>
                                ";
        // line 83
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 84
        echo "                            </ol>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <!-- Main content -->
            <section class=\"content\">
          ";
        // line 124
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 124, $this->source); })()), "flashes", [], "any", false, false, false, 124));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 125
            echo "                    <div class=\"container\">
                        <div class=\"alert alert-";
            // line 126
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "\">
                            ";
            // line 127
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 128
                echo "
                                <p>";
                // line 129
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</p>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            echo "                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "                <div class=\"container-fluid\" style=\"background-color: white\">
                    ";
        // line 135
        $this->displayBlock('body_inside', $context, $blocks);
        // line 136
        echo "                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        ";
        // line 141
        $this->loadTemplate("partials/footer.html.twig", "base.html.twig", 141)->display($context);
        // line 142
        echo "        <!-- Control Sidebar -->
        <aside
                class=\"control-sidebar control-sidebar-dark\"><!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 83
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

    // line 135
    public function block_body_inside($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_inside"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_inside"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 152
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 153
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/popper/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/sparklines/sparkline.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/jqvmap/jquery.vmap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/jqvmap/maps/jquery.vmap.usa.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/jquery-knob/jquery.knob.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/summernote/summernote-bs4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/build/js/AdminLTE.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/build/js/CardRefresh.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/build/js/CardWidget.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/build/js/ControlSidebar.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/build/js/DirectChat.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/build/js/Dropdown.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/build/js/Layout.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/build/js/PushMenu.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/build/js/SiteSearch.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/build/js/Toasts.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/build/js/TodoList.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/build/js/Treeview.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/sweetalert2/sweetalert2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/bootstrap-slider/bootstrap-slider.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/bs-custom-file-input/bs-custom-file-input.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/datatables-scroller/js/scroller.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/datatables-select/js/select.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/ekko-lightbox/ekko-lightbox.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/fastclick/fastclick.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/filterizr/filterizr.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/filterizr/jquery.filterizr.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/fullcalendar/main.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/fullcalendar/locales-all.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/fullcalendar-bootstrap/main.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/fullcalendar-daygrid/main.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/fullcalendar-interaction/main.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/fullcalendar-timegrid/main.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/inputmask/inputmask/jquery.inputmask.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/jqvmap/jquery.vmap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/jszip/jszip.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/overlayScrollbars/js/OverlayScrollbars.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/pace-progress/pace.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/pdfmake/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/select2/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/sparklines/sparkline.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/summernote/summernote.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/toastr/toastr.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/dist/js/adminlte.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/dist/js/pages/dashboard.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-lte/dist/js/demo.js"), "html", null, true);
        echo "\"></script>
    <!-- Intégration jQuery de admin-lte-->
    ";
        // line 219
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/admin-lte/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 221
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("customs/js/app.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 223
        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  710 => 223,  705 => 221,  700 => 219,  695 => 216,  691 => 215,  687 => 214,  683 => 213,  679 => 212,  675 => 211,  671 => 210,  667 => 209,  663 => 208,  659 => 207,  655 => 206,  651 => 205,  647 => 204,  643 => 203,  639 => 202,  635 => 201,  631 => 200,  627 => 199,  623 => 198,  619 => 197,  615 => 196,  611 => 195,  607 => 194,  603 => 193,  599 => 192,  595 => 191,  591 => 190,  587 => 189,  583 => 188,  579 => 187,  575 => 186,  571 => 185,  567 => 184,  563 => 183,  559 => 182,  555 => 181,  551 => 180,  547 => 179,  543 => 178,  539 => 177,  535 => 176,  531 => 175,  527 => 174,  523 => 173,  519 => 172,  515 => 171,  511 => 170,  507 => 169,  503 => 168,  499 => 167,  495 => 166,  491 => 165,  487 => 164,  483 => 163,  479 => 162,  475 => 161,  471 => 160,  467 => 159,  463 => 158,  459 => 157,  455 => 156,  451 => 155,  447 => 154,  442 => 153,  432 => 152,  414 => 135,  396 => 83,  377 => 142,  375 => 141,  368 => 136,  366 => 135,  363 => 134,  355 => 131,  347 => 129,  344 => 128,  340 => 127,  336 => 126,  333 => 125,  328 => 124,  315 => 84,  313 => 83,  297 => 69,  294 => 68,  292 => 67,  289 => 66,  279 => 65,  269 => 62,  267 => 61,  264 => 60,  260 => 58,  256 => 56,  251 => 54,  247 => 53,  243 => 52,  239 => 51,  235 => 50,  231 => 49,  227 => 48,  223 => 47,  219 => 46,  215 => 45,  210 => 43,  205 => 41,  200 => 39,  196 => 38,  191 => 36,  187 => 35,  182 => 33,  178 => 32,  174 => 31,  170 => 30,  166 => 29,  161 => 27,  157 => 26,  152 => 24,  148 => 23,  144 => 22,  140 => 21,  136 => 20,  132 => 19,  128 => 18,  124 => 17,  118 => 15,  108 => 14,  97 => 9,  87 => 8,  75 => 379,  73 => 152,  71 => 65,  67 => 63,  65 => 14,  60 => 11,  58 => 8,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>
        {% block title %}
            pro6- GRH
        {% endblock %}
    </title>


    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('admin-lte/plugins/fontawesome-free/css/all.min.css') }}\">
        <link rel=\"stylesheet\"
              href=\"{{ asset('admin-lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('admin-lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('admin-lte/plugins/jqvmap/jqvmap.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('admin-lte/dist/css/adminlte.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('admin-lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('admin-lte/plugins/ion-rangeslider/css/ion.rangeSlider.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('admin-lte/plugins/jqvmap/jqvmap.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('admin-lte/plugins/select2/css/select2.min.css') }}\">
        <link rel=\"stylesheet\"
              href=\"{{ asset('admin-lte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('admin-lte/plugins/summernote/summernote.css') }}\">
        <link rel=\"stylesheet\"
              href=\"{{ asset('admin-lte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('admin-lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('admin-lte/plugins/daterangepicker/daterangepicker.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('admin-lte/plugins/summernote/summernote-bs4.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('admin-lte/plugins/sweetalert2/sweetalert2.min.css') }}\">
        <link rel=\"stylesheet\"
              href=\"{{ asset('admin-lte/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('admin-lte/plugins/bootstrap-slider/css/bootstrap-slider.min.css') }}\">
        <link rel=\"stylesheet\"
              href=\"{{ asset('admin-lte/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('admin-lte/plugins/chart.js/Chart.min.css') }}\">
        <link rel=\"stylesheet\"
              href=\"{{ asset('admin-lte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}\">
        <link rel=\"stylesheet\"
              href=\"{{ asset('admin-lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}\">
        <link rel=\"stylesheet\"
              href=\"{{ asset('admin-lte/plugins/datatables-scroller/css/scroller.bootstrap4.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('admin-lte/plugins/datatables-select/css/select.bootstrap4.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('admin-lte/plugins/daterangepicker/daterangepicker.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('admin-lte/plugins/ekko-lightbox/ekko-lightbox.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('admin-lte/plugins/flag-icon-css/css/flag-icon.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('admin-lte/plugins/fullcalendar/main.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('admin-lte/plugins/fullcalendar-bootstrap/main.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('admin-lte/plugins/fullcalendar-daygrid/main.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('admin-lte/plugins/fullcalendar-timegrid/main.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('admin-lte/plugins/toastr/toastr.min.js') }}\">

        <link rel=\"stylesheet\" href=\"{{ asset('admin-lte/plugins/bootstrap/css/bootstrap.min.css') }}\">
        {# <link rel=\"stylesheet\" href=\"{{ asset('../node_modules/bootstrap/dist/css/bootstrap.min.css')}}\"> #}
        <!-- Nos css intégrés -->
        <link rel=\"stylesheet\"
              href=\"{{ asset('customs/css/style.css') }}\"> {# <link rel=\"stylesheet\" href=\"{{ asset('customs/css/ionicons.min.css') }}\"> #}
        {# <link rel=\"stylesheet\" href=\"{{ asset('customs/css/font-awesome.min.css') }}\"> #}
    {% endblock %}
</head>
<body class=\"hold-transition sidebar-mini layout-fixed\">
{% block body %}
    <div class=\"wrapper\">
        {% include 'partials/header.html.twig' %}
        {% include 'partials/sidebar.html.twig' %}
        <!-- Content Wrapper. Contains page content -->
        <div
                class=\"content-wrapper\">
            <!-- Content Header (Page header) -->
            <div class=\"content-header\">
                <div class=\"container-fluid\">
                    <div class=\"row mb-2\">
                        <div class=\"col-sm-6\"></div>
                        <!-- /.col -->
                        <div class=\"col-sm-6\">
                            <ol class=\"breadcrumb float-sm-right\">
                                <li class=\"breadcrumb-item\">
                                    <a href=\"/accueil\">Home</a>
                                </li>
                                {% block  breadcrumb %}{% endblock %}
                            </ol>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <!-- Main content -->
            <section class=\"content\">
          {#      <div class=\"card card-success card-outline\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">
                            <i class=\"fas fa-edit\"></i>
                            SweetAlert2 Examples
                        </h3>
                    </div>
                    <div class=\"card-body\">
                        <button type=\"button\" class=\"btn btn-success swalDefaultSuccess\">
                            Launch Success Toast
                        </button>
                        <button type=\"button\" class=\"btn btn-info swalDefaultInfo\">
                            Launch Info Toast
                        </button>
                        <button type=\"button\" class=\"btn btn-danger swalDefaultError\">
                            Launch Error Toast
                        </button>
                        <button type=\"button\" class=\"btn btn-warning swalDefaultWarning\">
                            Launch Warning Toast
                        </button>
                        <button type=\"button\" class=\"btn btn-default swalDefaultQuestion\">
                            Launch Question Toast
                        </button>
                        <div class=\"text-muted mt-3\">
                            For more examples look at <a href=\"https://sweetalert2.github.io/\">https://sweetalert2.github.io/</a>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>#}
                {% for label, messages in app.flashes %}
                    <div class=\"container\">
                        <div class=\"alert alert-{{ label }}\">
                            {% for message in messages %}

                                <p>{{ message }}</p>
                            {% endfor %}
                        </div>
                    </div>
                {% endfor %}
                <div class=\"container-fluid\" style=\"background-color: white\">
                    {% block body_inside %}{% endblock %}
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        {% include 'partials/footer.html.twig' %}
        <!-- Control Sidebar -->
        <aside
                class=\"control-sidebar control-sidebar-dark\"><!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->


{% endblock %}
{% block javascripts %}
    <script src=\"{{ asset('admin-lte/plugins/jquery/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/plugins/jquery-ui/jquery-ui.min.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/plugins/popper/popper.min.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/plugins/chart.js/Chart.min.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/plugins/sparklines/sparkline.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/plugins/jqvmap/jquery.vmap.min.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/plugins/jqvmap/maps/jquery.vmap.usa.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/plugins/jquery-knob/jquery.knob.min.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/plugins/moment/moment.min.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/plugins/daterangepicker/daterangepicker.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/plugins/summernote/summernote-bs4.min.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/build/js/AdminLTE.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/build/js/CardRefresh.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/build/js/CardWidget.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/build/js/ControlSidebar.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/build/js/DirectChat.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/build/js/Dropdown.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/build/js/Layout.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/build/js/PushMenu.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/build/js/SiteSearch.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/build/js/Toasts.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/build/js/TodoList.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/build/js/Treeview.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/plugins/sweetalert2/sweetalert2.min.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/plugins/bootstrap-slider/bootstrap-slider.min.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/plugins/chart.js/Chart.min.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/plugins/datatables/jquery.dataTables.min.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/plugins/datatables-scroller/js/scroller.bootstrap4.min.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/plugins/datatables-select/js/select.bootstrap4.min.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/plugins/ekko-lightbox/ekko-lightbox.min.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/plugins/fastclick/fastclick.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/plugins/filterizr/filterizr.min.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/plugins/filterizr/jquery.filterizr.min.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/plugins/flot/jquery.flot.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/plugins/fullcalendar/main.min.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/plugins/fullcalendar/locales-all.min.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/plugins/fullcalendar-bootstrap/main.min.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/plugins/fullcalendar-daygrid/main.min.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/plugins/fullcalendar-interaction/main.min.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/plugins/fullcalendar-timegrid/main.min.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/plugins/inputmask/inputmask/jquery.inputmask.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/plugins/ion-rangeslider/js/ion.rangeSlider.min.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/plugins/jqvmap/jquery.vmap.min.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/plugins/jszip/jszip.min.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/plugins/overlayScrollbars/js/OverlayScrollbars.min.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/plugins/pace-progress/pace.min.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/plugins/pdfmake/pdfmake.min.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/plugins/raphael/raphael.min.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/plugins/select2/js/select2.full.min.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/plugins/sparklines/sparkline.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/plugins/summernote/summernote.min.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/plugins/toastr/toastr.min.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/dist/js/adminlte.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/dist/js/pages/dashboard.js') }}\"></script>
    <script src=\"{{ asset('admin-lte/dist/js/demo.js') }}\"></script>
    <!-- Intégration jQuery de admin-lte-->
    {#<script src=\"{{ asset('admin-lte/plugins/jquery/jquery.min.js') }}\"></script>#}
    <script src=\"{{ asset('/admin-lte/plugins/bootstrap/js/bootstrap.min.js') }}\"></script>
    {# <link rel=\"stylesheet\" href=\"{{ asset('../node_modules/bootstrap/dist/js/bootstrap.min.css')}}\"> <!-- Nos css intégrés --> #}
    <script src=\"{{ asset('customs/js/app.js') }}\"></script>
    {# // <script src=\"{{ asset('customs/js/popper.min.js') }}\"></script> #}
  {#  <script type=\"text/javascript\">
        \$(function () {
            const Toast = Swal.mixin({
                toast: true,
                position: 'bottom-end',
                showConfirmButton: false,
                timer: 3000
            });

            \$('.swalDefaultSuccess').click(function () {
                Toast.fire({
                    type: 'success',
                    title: 'Du texte...'
                })
            });
            \$('.swalDefaultInfo').click(function () {
                Toast.fire({
                    type: 'info',
                    title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            \$('.swalDefaultError').click(function () {
                Toast.fire({
                    type: 'error',
                    title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            \$('.swalDefaultWarning').click(function () {
                Toast.fire({
                    type: 'warning',
                    title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            \$('.swalDefaultQuestion').click(function () {
                Toast.fire({
                    type: 'question',
                    title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });

            \$('.toastrDefaultSuccess').click(function () {
                toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
            });
            \$('.toastrDefaultInfo').click(function () {
                toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
            });
            \$('.toastrDefaultError').click(function () {
                toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
            });
            \$('.toastrDefaultWarning').click(function () {
                toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
            });

            \$('.toastsDefaultDefault').click(function () {
                \$(document).Toasts('create', {
                    title: 'Toast Title',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            \$('.toastsDefaultTopLeft').click(function () {
                \$(document).Toasts('create', {
                    title: 'Toast Title',
                    position: 'topLeft',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            \$('.toastsDefaultBottomRight').click(function () {
                \$(document).Toasts('create', {
                    title: 'Toast Title',
                    position: 'bottomRight',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            \$('.toastsDefaultBottomLeft').click(function () {
                \$(document).Toasts('create', {
                    title: 'Toast Title',
                    position: 'bottomLeft',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            \$('.toastsDefaultAutohide').click(function () {
                \$(document).Toasts('create', {
                    title: 'Toast Title',
                    autohide: true,
                    delay: 750,
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            \$('.toastsDefaultNotFixed').click(function () {
                \$(document).Toasts('create', {
                    title: 'Toast Title',
                    fixed: false,
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            \$('.toastsDefaultFull').click(function () {
                \$(document).Toasts('create', {
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
                    title: 'Toast Title',
                    subtitle: 'Subtitle',
                    icon: 'fas fa-envelope fa-lg',
                })
            });
            \$('.toastsDefaultFullImage').click(function () {
                \$(document).Toasts('create', {
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
                    title: 'Toast Title',
                    subtitle: 'Subtitle',
                    image: '../../dist/img/user3-128x128.jpg',
                    imageAlt: 'User Picture',
                })
            });
            \$('.toastsDefaultSuccess').click(function () {
                \$(document).Toasts('create', {
                    class: 'bg-success',
                    title: 'Toast Title',
                    subtitle: 'Subtitle',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            \$('.toastsDefaultInfo').click(function () {
                \$(document).Toasts('create', {
                    class: 'bg-info',
                    title: 'Toast Title',
                    subtitle: 'Subtitle',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            \$('.toastsDefaultWarning').click(function () {
                \$(document).Toasts('create', {
                    class: 'bg-warning',
                    title: 'Toast Title',
                    subtitle: 'Subtitle',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            \$('.toastsDefaultDanger').click(function () {
                \$(document).Toasts('create', {
                    class: 'bg-danger',
                    title: 'Toast Title',
                    subtitle: 'Subtitle',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            \$('.toastsDefaultMaroon').click(function () {
                \$(document).Toasts('create', {
                    class: 'bg-maroon',
                    title: 'Toast Title',
                    subtitle: 'Subtitle',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
        });

    </script>#}
{% endblock %}
</body>
</html>
", "base.html.twig", "G:\\TPS\\grh\\templates\\base.html.twig");
    }
}
