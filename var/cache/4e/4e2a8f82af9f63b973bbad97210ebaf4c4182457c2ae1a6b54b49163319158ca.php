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

/* Categorie/update.html.twig */
class __TwigTemplate_9d0d828ad8c8c31862eb65b895a3e9dde21689f3f642cfcd74388eb4b0f4fcfb extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "Categorie/update.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <h1>Modification de la catégorie \"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["categorie"] ?? null), "libelle", [], "any", false, false, false, 4), "html", null, true);
        echo "\"</h1>
    <form method=\"post\">
        <input type=\"text\" name=\"libelle\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["categorie"] ?? null), "libelle", [], "any", false, false, false, 6), "html", null, true);
        echo "\">
        <input type=\"text\" name=\"icon\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["categorie"] ?? null), "icon", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
        <input type=\"submit\" value=\"Enregistrer les modifications\">
    </form>

";
    }

    public function getTemplateName()
    {
        return "Categorie/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 7,  56 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}
    <h1>Modification de la catégorie \"{{ categorie.libelle }}\"</h1>
    <form method=\"post\">
        <input type=\"text\" name=\"libelle\" value=\"{{ categorie.libelle }}\">
        <input type=\"text\" name=\"icon\" value=\"{{ categorie.icon }}\">
        <input type=\"submit\" value=\"Enregistrer les modifications\">
    </form>

{% endblock %}", "Categorie/update.html.twig", "C:\\dev\\www\\cesi\\templates\\Categorie\\update.html.twig");
    }
}
