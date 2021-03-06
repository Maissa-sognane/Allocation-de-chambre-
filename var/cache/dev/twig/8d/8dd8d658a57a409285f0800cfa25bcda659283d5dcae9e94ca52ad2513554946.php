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

/* chambre/index.html.twig */
class __TwigTemplate_5fe35f7a5d7e8e6484c5efcfe461d7bd6063b00a992913f43b4b69cd44d2e03f extends Template
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
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chambre/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chambre/index.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "chambre/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Etudiants";
        
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
        echo "    <style>
        .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
        .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    </style>
        <div class=\"container-fluid container-fluid p-3 \">
            <div class=\"row\">
                <div class=\"col\">
                    <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chambre_create");
        echo "\">
                        <button type=\"button\" class=\"btn btn-primary btn-lg\"><i class=\"fas fa-plus-square\"></i></button>
                    </a>
                </div>
            </div>
            <br>
            <div class=\"row\">
                <div class=\"col-12\">
                    <table id=\"example\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                        <thead>
                        <tr>
                            <th>Numero Chambre</th>
                            <th>Numero Batiment</th>
                            <th>Type</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody id=\"table_chambre\">
                        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["chambre"]) || array_key_exists("chambre", $context) ? $context["chambre"] : (function () { throw new RuntimeError('Variable "chambre" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["chambres"]) {
            // line 32
            echo "                            ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["chambres"], "numeroChambre", [], "any", false, false, false, 32), "Non logé"))) {
                // line 33
                echo "                            <tr>
                                    <td>";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambres"], "numeroChambre", [], "any", false, false, false, 34), "html", null, true);
                echo "</td>
                                    <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambres"], "numeroBatiment", [], "any", false, false, false, 35), "html", null, true);
                echo "</td>
                                    <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["chambres"], "typechambre", [], "any", false, false, false, 36), "libele", [], "any", false, false, false, 36), "html", null, true);
                echo "</td>
                                    <td>
                                        <a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chambre_update", ["id" => twig_get_attribute($this->env, $this->source, $context["chambres"], "id", [], "any", false, false, false, 38)]), "html", null, true);
                echo "\">
                                            <button class=\"btn btn-primary\">
                                                <i class=\"fas fa-pen-square\" ></i>
                                            </button>
                                        </a>
                                        <button class=\"btn btn-danger chambre_delete\"  id=\"";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambres"], "id", [], "any", false, false, false, 43), "html", null, true);
                echo "\">
                                            <i class=\"fas fa-trash\"></i>
                                        </button>
                                    </td>
                            </tr>
                            ";
            }
            // line 49
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chambres'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                        </tbody>
                    </table>

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
        return "chambre/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 50,  158 => 49,  149 => 43,  141 => 38,  136 => 36,  132 => 35,  128 => 34,  125 => 33,  122 => 32,  118 => 31,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block title %}Etudiants{% endblock %}

{% block body %}
    <style>
        .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
        .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    </style>
        <div class=\"container-fluid container-fluid p-3 \">
            <div class=\"row\">
                <div class=\"col\">
                    <a href=\"{{ path('chambre_create') }}\">
                        <button type=\"button\" class=\"btn btn-primary btn-lg\"><i class=\"fas fa-plus-square\"></i></button>
                    </a>
                </div>
            </div>
            <br>
            <div class=\"row\">
                <div class=\"col-12\">
                    <table id=\"example\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                        <thead>
                        <tr>
                            <th>Numero Chambre</th>
                            <th>Numero Batiment</th>
                            <th>Type</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody id=\"table_chambre\">
                        {% for chambres in chambre %}
                            {% if chambres.numeroChambre != \"Non logé\" %}
                            <tr>
                                    <td>{{ chambres.numeroChambre }}</td>
                                    <td>{{ chambres.numeroBatiment }}</td>
                                    <td>{{ chambres.typechambre.libele }}</td>
                                    <td>
                                        <a href=\"{{ path('chambre_update', {'id':chambres.id})}}\">
                                            <button class=\"btn btn-primary\">
                                                <i class=\"fas fa-pen-square\" ></i>
                                            </button>
                                        </a>
                                        <button class=\"btn btn-danger chambre_delete\"  id=\"{{ chambres.id }}\">
                                            <i class=\"fas fa-trash\"></i>
                                        </button>
                                    </td>
                            </tr>
                            {% endif %}
                        {% endfor %}
                        </tbody>
                    </table>

                    </table>
                </div>
            </div>
        </div>
{% endblock %}





", "chambre/index.html.twig", "/opt/lampp/htdocs/symfony/Sama_Chambre/templates/chambre/index.html.twig");
    }
}
