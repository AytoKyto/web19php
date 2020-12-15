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

/* Comment/all.html.twig */
class __TwigTemplate_fda3aeaffdd9821c6bc46a659b6217fbfcba3a24bc12aadd2d3afc475f6885cb extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "Comment/all.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    Liste comment >> ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    <h1>Liste des commentaires</h1>
    <div class=\"row\">
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["commentList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 10
            echo "        <div class=\"col-sm-3\">
            <div class=\"card\" style=\"width: 18rem;\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 13), "html", null, true);
            echo "</h5>               
                    <p>";
            // line 14
            echo twig_get_attribute($this->env, $this->source, $context["comment"], "commentaire", [], "any", false, false, false, 14);
            echo "</p>     
                    <p>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "mail", [], "any", false, false, false, 15), "html", null, true);
            echo "</p>     
                    <p>";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "date", [], "any", false, false, false, 16), "d/m/Y"), "html", null, true);
            echo "</p>     
                    <a href=\"/Comment/Show/";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 17), "html", null, true);
            echo "\" class=\"btn btn-primary\">
                        Consulter
                    </a>
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "Comment/all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 24,  91 => 17,  87 => 16,  83 => 15,  79 => 14,  75 => 13,  70 => 10,  66 => 9,  62 => 7,  58 => 6,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}
    Liste comment >> {{ parent() }}
{% endblock %}

{% block body %}
    <h1>Liste des commentaires</h1>
    <div class=\"row\">
    {% for comment in commentList %}
        <div class=\"col-sm-3\">
            <div class=\"card\" style=\"width: 18rem;\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">{{ comment.user }}</h5>               
                    <p>{{comment.commentaire|raw }}</p>     
                    <p>{{comment.mail}}</p>     
                    <p>{{comment.date|date('d/m/Y') }}</p>     
                    <a href=\"/Comment/Show/{{ comment.id }}\" class=\"btn btn-primary\">
                        Consulter
                    </a>
                </div>
            </div>
        </div>
    {% endfor %}
    </div>
{% endblock %}", "Comment/all.html.twig", "C:\\dev\\www\\cesi\\templates\\Comment\\all.html.twig");
    }
}
