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

/* Article/add.html.twig */
class __TwigTemplate_2c97d59959bbe44a1e323c2ca488cb68d216c38fcff011d3c179deea37c10e0d extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "Article/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <h1>Ajout de l'article :</h1>
    <form method=\"post\">
        <input type=\"text\" name=\"Titre\">
        <textarea name=\"Description\">
        </textarea>
        <input type=\"date\" name=\"DateAjout\" >
        <select name=\"Auteur\">
            <option >Rebecca</option>
            <option >Alexandre</option>
            <option >Emilie</option>
            <option>Léo</option>
            <option >Aegir</option>
        </select>
        <select name=\"Catégorie\">
            <option ><span class=\"fa f54f\"></span>DIY</option>
            <option ><span class=\"fa f555\"></span>Finance</option>
            <option ><span class=\"fa f6de\"></span>Politics</option>
            <option ><span class=\"fa f553\"></span>Fashion</option>
            <option ><span class=\"fa f2e7\"></span>Food</option>
            <option ><span class=\"fa f4d7\"></span>Travel</option>
            <option ><span class=\"fa f001\"></span>Music</option>
        </select>
        <input type=\"submit\" value=\"Enregistrer les modifications\">
    </form>

";
    }

    public function getTemplateName()
    {
        return "Article/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}
    <h1>Ajout de l'article :</h1>
    <form method=\"post\">
        <input type=\"text\" name=\"Titre\">
        <textarea name=\"Description\">
        </textarea>
        <input type=\"date\" name=\"DateAjout\" >
        <select name=\"Auteur\">
            <option >Rebecca</option>
            <option >Alexandre</option>
            <option >Emilie</option>
            <option>Léo</option>
            <option >Aegir</option>
        </select>
        <select name=\"Catégorie\">
            <option ><span class=\"fa f54f\"></span>DIY</option>
            <option ><span class=\"fa f555\"></span>Finance</option>
            <option ><span class=\"fa f6de\"></span>Politics</option>
            <option ><span class=\"fa f553\"></span>Fashion</option>
            <option ><span class=\"fa f2e7\"></span>Food</option>
            <option ><span class=\"fa f4d7\"></span>Travel</option>
            <option ><span class=\"fa f001\"></span>Music</option>
        </select>
        <input type=\"submit\" value=\"Enregistrer les modifications\">
    </form>

{% endblock %}", "Article/add.html.twig", "C:\\dev\\www\\cesi\\templates\\Article\\add.html.twig");
    }
}
