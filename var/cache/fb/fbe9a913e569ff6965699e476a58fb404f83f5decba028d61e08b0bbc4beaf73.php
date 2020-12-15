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

/* Comment/show.html.twig */
class __TwigTemplate_9372f00feb64331553ebe0d2a73c7c307e7d90c2101661298a59be74e794297b extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "Comment/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"card\">
            <h5 class=\"card-header\">User : ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["comment"] ?? null), "user", [], "any", false, false, false, 5), "html", null, true);
        echo "</h5>
            <div class=\"card-body\">
            <h5 class=\"card-title\">Mail : ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["comment"] ?? null), "mail", [], "any", false, false, false, 7), "html", null, true);
        echo " ---- Date : ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["comment"] ?? null), "date", [], "any", false, false, false, 7), "d/m/Y"), "html", null, true);
        echo "</h5>
            <p class=\"card-text\">Commentaire : ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["comment"] ?? null), "commentaire", [], "any", false, false, false, 8), "html", null, true);
        echo "</p>
            <a href=\"/comment/update/";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["comment"] ?? null), "id", [], "any", false, false, false, 9), "html", null, true);
        echo "\" class=\"btn btn-primary\"> Modifier le commentaire </a>
            <a href=\"/comment/delete/";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["comment"] ?? null), "id", [], "any", false, false, false, 10), "html", null, true);
        echo "\" class=\"btn btn-primary\"> Supprimer le commentaire </a>
            <a href=\"/article/all/\" class=\"btn btn-primary\">Voir les articles</a>
        </div>
        </div>
";
    }

    public function getTemplateName()
    {
        return "Comment/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 10,  68 => 9,  64 => 8,  58 => 7,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}
    <div class=\"card\">
            <h5 class=\"card-header\">User : {{comment.user}}</h5>
            <div class=\"card-body\">
            <h5 class=\"card-title\">Mail : {{comment.mail}} ---- Date : {{comment.date|date('d/m/Y')}}</h5>
            <p class=\"card-text\">Commentaire : {{comment.commentaire}}</p>
            <a href=\"/comment/update/{{ comment.id }}\" class=\"btn btn-primary\"> Modifier le commentaire </a>
            <a href=\"/comment/delete/{{ comment.id }}\" class=\"btn btn-primary\"> Supprimer le commentaire </a>
            <a href=\"/article/all/\" class=\"btn btn-primary\">Voir les articles</a>
        </div>
        </div>
{% endblock %}", "Comment/show.html.twig", "C:\\dev\\www\\cesi\\templates\\Comment\\show.html.twig");
    }
}
