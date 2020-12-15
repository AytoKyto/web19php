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

/* Article/all.html.twig */
class __TwigTemplate_8cdf5d693153652ec496fd199df9e8650422f4a1b21e4ec73f836bfc2f982d16 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "Article/all.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    Liste article >> ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    <h1>Voici la liste des articles</h1>
    <div class=\"row\">
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articleList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 10
            echo "        <div class=\"col-sm-3\">
            <div class=\"card\" style=\"width: 18rem;\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "Titre", [], "any", false, false, false, 13), "html", null, true);
            echo "</h5>
                    ";
            // line 15
            echo "                    <p class=\"card-text\">
                        ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getShortDesc", [0 => 3], "method", false, false, false, 16), "html", null, true);
            echo "
                        <br/>
                        <i class=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["categorie"] ?? null), "icon", [], "any", false, false, false, 18), "html", null, true);
            echo "\"></i>
                        Ecrit le ";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "DateAjout", [], "any", false, false, false, 19), "d/m/Y"), "html", null, true);
            echo "
                    </p>
                    <a href=\"/Article/Show/";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "Id", [], "any", false, false, false, 21), "html", null, true);
            echo "\" class=\"btn btn-primary\">
                        Consulter
                    </a>
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "Article/all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 28,  96 => 21,  91 => 19,  87 => 18,  82 => 16,  79 => 15,  75 => 13,  70 => 10,  66 => 9,  62 => 7,  58 => 6,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}
    Liste article >> {{ parent() }}
{% endblock %}

{% block body %}
    <h1>Voici la liste des articles</h1>
    <div class=\"row\">
    {% for article in articleList %}
        <div class=\"col-sm-3\">
            <div class=\"card\" style=\"width: 18rem;\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">{{ article.Titre }}</h5>
                    {# Ceci est un commentaire qui ne sera pas visible sur le code HTML #}
                    <p class=\"card-text\">
                        {{ article.getShortDesc(3) }}
                        <br/>
                        <i class=\"{{ categorie.icon }}\"></i>
                        Ecrit le {{ article.DateAjout|date(\"d/m/Y\") }}
                    </p>
                    <a href=\"/Article/Show/{{ article.Id }}\" class=\"btn btn-primary\">
                        Consulter
                    </a>
                </div>
            </div>
        </div>
    {% endfor %}
    </div>
{% endblock %}", "Article/all.html.twig", "C:\\dev\\www\\cesi\\templates\\Article\\all.html.twig");
    }
}
