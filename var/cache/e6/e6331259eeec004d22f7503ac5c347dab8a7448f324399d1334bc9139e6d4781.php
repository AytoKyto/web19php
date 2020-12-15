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

/* Categorie/show.html.twig */
class __TwigTemplate_325a57d8ced9b2faf043ee6d002d231f2ac9198cf79e894039a172c9f63270ae extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("base.html.twig", "Categorie/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <h1>Détail de la catégorie</h1>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["categorie"] ?? null), "libelle", [], "any", false, false, false, 5), "html", null, true);
        echo "</p>
    <p>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["categorie"] ?? null), "icon", [], "any", false, false, false, 6), "html", null, true);
        echo "</p>
    <p><a href=\"/categorie/delete/";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["categorie"] ?? null), "Id", [], "any", false, false, false, 7), "html", null, true);
        echo "\"> Supprimer la catégorie</a></p>
    <p><a href=\"/categorie/update/";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["categorie"] ?? null), "Id", [], "any", false, false, false, 8), "html", null, true);
        echo "\"> Modifier la catégorie </a></p>
";
    }

    public function getTemplateName()
    {
        return "Categorie/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 8,  61 => 7,  57 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}
    <h1>Détail de la catégorie</h1>
    <p>{{ categorie.libelle }}</p>
    <p>{{ categorie.icon }}</p>
    <p><a href=\"/categorie/delete/{{ categorie.Id }}\"> Supprimer la catégorie</a></p>
    <p><a href=\"/categorie/update/{{ categorie.Id }}\"> Modifier la catégorie </a></p>
{% endblock %}", "Categorie/show.html.twig", "C:\\dev\\www\\cesi\\templates\\Categorie\\show.html.twig");
    }
}
