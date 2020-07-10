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

/* etudiant/create.html.twig */
class __TwigTemplate_1e2ba8cfde8bf64b8cd3f92c4aacf1d7b282156995da88bcc9bd1975100eb8da extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/create.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/create.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "etudiant/create.html.twig", 1);
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

        echo "Creation Etudiant";
        
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
";
        // line 31
        echo "    <h1 style=\"font-family: 'Roboto Slab'\" class=\"text-center\">Enrégistrement d'un étudiant</h1>
    ";
        // line 32
        if ((isset($context["msg"]) || array_key_exists("msg", $context) ? $context["msg"] : (function () { throw new RuntimeError('Variable "msg" does not exist.', 32, $this->source); })())) {
            // line 33
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, (isset($context["msg"]) || array_key_exists("msg", $context) ? $context["msg"] : (function () { throw new RuntimeError('Variable "msg" does not exist.', 33, $this->source); })()), "html", null, true);
            echo "</div>
    ";
        }
        // line 35
        echo "    ";
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 36
        echo "            ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_start');
        echo "
        <div class=\"form-row\">
            <div class=\"my-custom-class-for-errors\">
                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'errors');
        echo "
            </div>
            <div class=\"form-group col-md-6\">
                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "Prenom", [], "any", false, false, false, 42), 'label');
        echo "
                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "Prenom", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Prenom"]]);
        echo "
            </div>
            <div class=\"form-group col-md-6\">
                ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "Nom", [], "any", false, false, false, 46), 'label');
        echo "
                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "Nom", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom"]]);
        echo "
            </div>
            <div class=\"form-group col-md-6\">
                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "Email", [], "any", false, false, false, 50), 'label');
        echo "
                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "Email", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Email"]]);
        echo "
            </div>
            <div class=\"form-group col-md-6\">
                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "dateNaissance", [], "any", false, false, false, 54), 'label');
        echo "
                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "dateNaissance", [], "any", false, false, false, 55), 'widget');
        echo "
            </div>
            <div class=\"form-group col-md-6\">
                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "telephone", [], "any", false, false, false, 58), 'label');
        echo "
                ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "telephone", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "770000000"]]);
        echo "
            </div>
            <div class=\"form-group col-md-6\">
                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "Adresse", [], "any", false, false, false, 62), 'label');
        echo "
                ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "Adresse", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Adresse"]]);
        echo "
            </div>
            <div class=\"form-group col-md-6\">
                ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "Chambre", [], "any", false, false, false, 66), 'label');
        echo "
                ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "Chambre", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
            <div class=\"form-group col-md-6\">
                ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "Bourse", [], "any", false, false, false, 70), 'label');
        echo "
                ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "Bourse", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
            <div id=\"choix\">
            </div>
            <input type=\"hidden\" value=\"\" name=\"dateJour\">
            <div class=\"form-group col-md-6\">
                <button type=\"submit\" class=\"btn btn-info btn-lg\" id=\"create_etudiant\">Sauvegarder</button>
            </div>
        </div>
            ";
        // line 80
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "etudiant/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 80,  195 => 71,  191 => 70,  185 => 67,  181 => 66,  175 => 63,  171 => 62,  165 => 59,  161 => 58,  155 => 55,  151 => 54,  145 => 51,  141 => 50,  135 => 47,  131 => 46,  125 => 43,  121 => 42,  115 => 39,  108 => 36,  105 => 35,  99 => 33,  97 => 32,  94 => 31,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block title %}Creation Etudiant{% endblock %}

{% block body %}
    <style>
        .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
        .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    </style>
{#
<div class=\"example-wrapper\">
        <h1>Enrégistrement d'un étudiant</h1>
            {% if msg %}
                <div class=\"alert alert-danger\">{{ msg }}</div>
            {% endif %}
        {% form_theme form 'bootstrap_4_layout.html.twig' %}
        <div class=\"form-group\">
            {{ form_start(form) }}
            <div class=\"my-custom-class-for-errors\">
                {{ form_errors(form) }}
            </div>
            {{ form_widget(form) }}
            <div id=\"choix\">
            </div>
            <input type=\"hidden\" value=\"\" name=\"dateJour\">
            <button type=\"submit\" class=\"btn btn-primary btn-lg\" id=\"create_etudiant\">Sauvegarder</button>
            {{ form_end(form) }}
        </div>
    </div>
#}
    <h1 style=\"font-family: 'Roboto Slab'\" class=\"text-center\">Enrégistrement d'un étudiant</h1>
    {% if msg %}
        <div class=\"alert alert-danger\">{{ msg }}</div>
    {% endif %}
    {% form_theme form 'bootstrap_4_layout.html.twig' %}
            {{ form_start(form) }}
        <div class=\"form-row\">
            <div class=\"my-custom-class-for-errors\">
                {{ form_errors(form) }}
            </div>
            <div class=\"form-group col-md-6\">
                {{ form_label(form.Prenom) }}
                {{ form_widget(form.Prenom, {'attr': {'class': 'form-control', 'placeholder': 'Prenom'}}) }}
            </div>
            <div class=\"form-group col-md-6\">
                {{ form_label(form.Nom) }}
                {{ form_widget(form.Nom, {'attr': {'class': 'form-control', 'placeholder': 'Nom'}}) }}
            </div>
            <div class=\"form-group col-md-6\">
                {{ form_label(form.Email) }}
                {{ form_widget(form.Email, {'attr': {'class': 'form-control', 'placeholder': 'Email'}}) }}
            </div>
            <div class=\"form-group col-md-6\">
                {{ form_label(form.dateNaissance) }}
                {{ form_widget(form.dateNaissance) }}
            </div>
            <div class=\"form-group col-md-6\">
                {{ form_label(form.telephone) }}
                {{ form_widget(form.telephone, {'attr': {'class': 'form-control', 'placeholder': '770000000'}}) }}
            </div>
            <div class=\"form-group col-md-6\">
                {{ form_label(form.Adresse) }}
                {{ form_widget(form.Adresse, {'attr': {'class': 'form-control', 'placeholder': 'Adresse'}}) }}
            </div>
            <div class=\"form-group col-md-6\">
                {{ form_label(form.Chambre) }}
                {{ form_widget(form.Chambre, {'attr': {'class': 'form-control'}}) }}
            </div>
            <div class=\"form-group col-md-6\">
                {{ form_label(form.Bourse) }}
                {{ form_widget(form.Bourse, {'attr': {'class': 'form-control'}}) }}
            </div>
            <div id=\"choix\">
            </div>
            <input type=\"hidden\" value=\"\" name=\"dateJour\">
            <div class=\"form-group col-md-6\">
                <button type=\"submit\" class=\"btn btn-info btn-lg\" id=\"create_etudiant\">Sauvegarder</button>
            </div>
        </div>
            {{ form_end(form) }}

{% endblock %}
", "etudiant/create.html.twig", "/opt/lampp/htdocs/symfony/Sama_Chambre/templates/etudiant/create.html.twig");
    }
}
