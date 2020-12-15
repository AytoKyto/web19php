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

/* Comment/add.html.twig */
class __TwigTemplate_ff7a9113d8e87ea31ac1a2f707590549ee5a9485147dda6718d82990be39db70 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
    <h3>Ajout du commentaire :</h3>
    <form method=\"post\">
        <input type=\"text\" name=\"commentaire\" placeholder=\"Commentaire\">
        <input type=\"email\" name=\"mail\" placeholder=\"Email\">
        <input type=\"text\" name=\"user\" placeholder=\"Auteur\">
        <input type=\"submit\" value=\"Poster votre commentaire\">
    </form>";
    }

    public function getTemplateName()
    {
        return "Comment/add.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
    <h3>Ajout du commentaire :</h3>
    <form method=\"post\">
        <input type=\"text\" name=\"commentaire\" placeholder=\"Commentaire\">
        <input type=\"email\" name=\"mail\" placeholder=\"Email\">
        <input type=\"text\" name=\"user\" placeholder=\"Auteur\">
        <input type=\"submit\" value=\"Poster votre commentaire\">
    </form>", "Comment/add.html.twig", "C:\\dev\\www\\cesi\\templates\\Comment\\add.html.twig");
    }
}
