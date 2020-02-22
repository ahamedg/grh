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

/* cloud_compte/params/cloudTypeCompteEdit.html.twig */
class __TwigTemplate_113b41d8c00a4aa278fb36ea2a8eb3044ec79a47fe285953f1fe6ce5b8b94d32 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cloud_compte/params/cloudTypeCompteEdit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cloud_compte/params/cloudTypeCompteEdit.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("type_compte_edit");
        echo "\" method=\"get\" role=\"form\">

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

<script>
    \$(document).ready(function() {
        \$('#editCloudTypeCompteModal').on('show.bs.modal', function(e) {
            var failureid = \$(e.relatedTarget).data('failure-id');
            //\talert(failureid);
            if(failureid){
                \$.ajax({
                    method: \"POST\",
                    url: 'modal_ajax.php',
                    data: { failureid: failureid },
                    dataType: \"html\"
                })
                    .done(function(html) {
                        //\t\t\talert(html);
                        \$('#editCloudTypeCompteModal #edit-content64').html(html);
                    })
                    .fail(function() {
                        alert('erreur !');
                    });
            }
        });
    });
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "cloud_compte/params/cloudTypeCompteEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form action=\"{{ path('type_compte_edit') }}\" method=\"get\" role=\"form\">

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

<script>
    \$(document).ready(function() {
        \$('#editCloudTypeCompteModal').on('show.bs.modal', function(e) {
            var failureid = \$(e.relatedTarget).data('failure-id');
            //\talert(failureid);
            if(failureid){
                \$.ajax({
                    method: \"POST\",
                    url: 'modal_ajax.php',
                    data: { failureid: failureid },
                    dataType: \"html\"
                })
                    .done(function(html) {
                        //\t\t\talert(html);
                        \$('#editCloudTypeCompteModal #edit-content64').html(html);
                    })
                    .fail(function() {
                        alert('erreur !');
                    });
            }
        });
    });
</script>", "cloud_compte/params/cloudTypeCompteEdit.html.twig", "D:\\GOLDMAN\\PROJECTS\\Symfony\\GRH\\templates\\cloud_compte\\params\\cloudTypeCompteEdit.html.twig");
    }
}
