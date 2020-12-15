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

/* Categorie/add.html.twig */
class __TwigTemplate_5d1c1a15b86db8216ec80fdb02ef00fd5522bcdbe5d2fb373e2e94f5e69b6155 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "Categorie/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <h1>Ajout une Catégorie :</h1>
    <form method=\"post\">
        <input type=\"text\" name=\"libelle\">
        <input type=\"text\" name=\"icon\">
        <input type=\"submit\" value=\"Enregistrer les modifications\">
    </form>

";
    }

    public function getTemplateName()
    {
        return "Categorie/add.html.twig";
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
    <h1>Ajout une Catégorie :</h1>
    <form method=\"post\">
        <input type=\"text\" name=\"libelle\">
        <input type=\"text\" name=\"icon\">
        <input type=\"submit\" value=\"Enregistrer les modifications\">
    </form>

{% endblock %}", "Categorie/add.html.twig", "C:\\dev\\www\\cesi\\templates\\Categorie\\add.html.twig");
    }
}
