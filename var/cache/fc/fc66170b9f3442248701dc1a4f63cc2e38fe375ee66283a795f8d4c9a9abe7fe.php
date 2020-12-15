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

/* Comment/update.html.twig */
class __TwigTemplate_d07c5704cb744dd86f6503e9649c1ec04b191b3fe56aec8b156842690c1fcc6a extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "Comment/update.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <h1>Modification du commentaire \"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["comment"] ?? null), "texte", [], "any", false, false, false, 4), "html", null, true);
        echo "\"</h1>
    <form method=\"post\">
        <input type=\"text\" name=\"commentaire\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["comment"] ?? null), "commentaire", [], "any", false, false, false, 6), "html", null, true);
        echo "\">
        <input type=\"text\" name=\"user\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["comment"] ?? null), "user", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
        <input type=\"email\" name=\"mail\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["comment"] ?? null), "mail", [], "any", false, false, false, 8), "html", null, true);
        echo "\">
        
    
        <input type=\"submit\" value=\"Enregistrer les modifications\">
    </form>

";
    }

    public function getTemplateName()
    {
        return "Comment/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 8,  60 => 7,  56 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}
    <h1>Modification du commentaire \"{{ comment.texte }}\"</h1>
    <form method=\"post\">
        <input type=\"text\" name=\"commentaire\" value=\"{{ comment.commentaire }}\">
        <input type=\"text\" name=\"user\" value=\"{{ comment.user }}\">
        <input type=\"email\" name=\"mail\" value=\"{{ comment.mail }}\">
        
    
        <input type=\"submit\" value=\"Enregistrer les modifications\">
    </form>

{% endblock %}", "Comment/update.html.twig", "C:\\dev\\www\\cesi\\templates\\Comment\\update.html.twig");
    }
}
