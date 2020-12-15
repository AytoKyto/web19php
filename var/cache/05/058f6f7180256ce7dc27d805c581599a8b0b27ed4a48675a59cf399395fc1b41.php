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

/* Article/show.html.twig */
class __TwigTemplate_e57b6ad5a0719c42d150d6b538d990bbdcd28b110e0d999505d26931edfa2d75 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "Article/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <h1>Détail de l'article</h1>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "Titre", [], "any", false, false, false, 5), "html", null, true);
        echo "</p>
    <p>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "Description", [], "any", false, false, false, 6), "html", null, true);
        echo "</p>
    <p>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "Auteur", [], "any", false, false, false, 7), "html", null, true);
        echo "</p>
    <p><a href=\"/article/update/";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "Id", [], "any", false, false, false, 8), "html", null, true);
        echo "\"> Modifier ce super Article </a></p>
    <p><a href=\"/article/delete/";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "Id", [], "any", false, false, false, 9), "html", null, true);
        echo "\"> Supprimer ce super Article </a></p>
    <div class=\"row\">
    
    </div>
    ";
        // line 13
        $this->loadTemplate("Comment/add.html.twig", "Article/show.html.twig", 13)->display($context);
        // line 14
        echo "    ";
        if ((0 !== twig_compare(($context["comment"] ?? null), null))) {
            // line 15
            echo "    <p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["comment"] ?? null), "user", [], "any", false, false, false, 15), "html", null, true);
            echo "</p>
    <p>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["comment"] ?? null), "commentaire", [], "any", false, false, false, 16), "html", null, true);
            echo "</p>
    ";
        }
        // line 18
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 19
            echo "        <div class=\"card\">
            <h5 class=\"card-header\">User : ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 20), "html", null, true);
            echo "</h5>
            <div class=\"card-body\">
            <h5 class=\"card-title\">Mail : ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "mail", [], "any", false, false, false, 22), "html", null, true);
            echo " ---- Date : ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "date", [], "any", false, false, false, 22), "d/m/Y"), "html", null, true);
            echo "</h5>
            <p class=\"card-text\">Commentaire : ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "commentaire", [], "any", false, false, false, 23), "html", null, true);
            echo "</p>
            <a href=\"/comment/update/";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "\" class=\"btn btn-primary\"> Modifier le commentaire </a>
            <a href=\"/comment/delete/";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "\" class=\"btn btn-primary\"> Supprimer le commentaire </a>
        </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "Article/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 25,  114 => 24,  110 => 23,  104 => 22,  99 => 20,  96 => 19,  91 => 18,  86 => 16,  81 => 15,  78 => 14,  76 => 13,  69 => 9,  65 => 8,  61 => 7,  57 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}
    <h1>Détail de l'article</h1>
    <p>{{ article.Titre }}</p>
    <p>{{ article.Description }}</p>
    <p>{{ article.Auteur }}</p>
    <p><a href=\"/article/update/{{ article.Id }}\"> Modifier ce super Article </a></p>
    <p><a href=\"/article/delete/{{ article.Id }}\"> Supprimer ce super Article </a></p>
    <div class=\"row\">
    
    </div>
    {% include 'Comment/add.html.twig' %}
    {% if comment != null %}
    <p>{{comment.user}}</p>
    <p>{{comment.commentaire}}</p>
    {% endif %}
    {% for comment in comments %}
        <div class=\"card\">
            <h5 class=\"card-header\">User : {{comment.user}}</h5>
            <div class=\"card-body\">
            <h5 class=\"card-title\">Mail : {{comment.mail}} ---- Date : {{comment.date|date('d/m/Y')}}</h5>
            <p class=\"card-text\">Commentaire : {{comment.commentaire}}</p>
            <a href=\"/comment/update/{{ comment.id }}\" class=\"btn btn-primary\"> Modifier le commentaire </a>
            <a href=\"/comment/delete/{{ comment.id }}\" class=\"btn btn-primary\"> Supprimer le commentaire </a>
        </div>
        </div>
    {% endfor %}
{% endblock %}", "Article/show.html.twig", "C:\\dev\\www\\cesi\\templates\\Article\\show.html.twig");
    }
}
