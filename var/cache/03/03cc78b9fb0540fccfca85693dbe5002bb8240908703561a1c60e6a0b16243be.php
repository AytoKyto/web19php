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

/* Categorie/all.html.twig */
class __TwigTemplate_5ad64a529d4f399caeb4f550a291872540d3afd8b320c99505a73db3ab64e921 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "Categorie/all.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    Liste categorie >> ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    <h1>Voici la liste des catégories</h1>
    <div class=\"row\">
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categorieList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 10
            echo "        <div class=\"col-sm-3\">
            <div class=\"card\" style=\"width: 18rem;\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "libelle", [], "any", false, false, false, 13), "html", null, true);
            echo "</h5>
                    ";
            // line 15
            echo "                    <p class=\"card-text\">
                        ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "icon", [], "any", false, false, false, 16), "html", null, true);
            echo "
                    </p>
                    <a href=\"/Categorie/Show/";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "Id", [], "any", false, false, false, 18), "html", null, true);
            echo "\" class=\"btn btn-primary\">
                        Consulter
                    </a>
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "Categorie/all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 25,  87 => 18,  82 => 16,  79 => 15,  75 => 13,  70 => 10,  66 => 9,  62 => 7,  58 => 6,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}
    Liste categorie >> {{ parent() }}
{% endblock %}

{% block body %}
    <h1>Voici la liste des catégories</h1>
    <div class=\"row\">
    {% for categorie in categorieList %}
        <div class=\"col-sm-3\">
            <div class=\"card\" style=\"width: 18rem;\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">{{ categorie.libelle }}</h5>
                    {# Ceci est un commentaire qui ne sera pas visible sur le code HTML #}
                    <p class=\"card-text\">
                        {{ categorie.icon }}
                    </p>
                    <a href=\"/Categorie/Show/{{ categorie.Id }}\" class=\"btn btn-primary\">
                        Consulter
                    </a>
                </div>
            </div>
        </div>
    {% endfor %}
    </div>
{% endblock %}", "Categorie/all.html.twig", "C:\\dev\\www\\cesi\\templates\\Categorie\\all.html.twig");
    }
}
