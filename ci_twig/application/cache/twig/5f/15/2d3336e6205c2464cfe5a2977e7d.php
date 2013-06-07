<?php

/* includes/header.html */
class __TwigTemplate_5f152d3336e6205c2464cfe5a2977e7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
   <meta http-equiv=\"Content-Type\" content=\"text/html\" charset=\"utf-8\">
   <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
   <meta name=\"description\" content=\"\">
   <meta name=\"keywords\" content=\"\">
   <meta name=\"author\" content=\"\">

   <title>";
        // line 10
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        echo twig_escape_filter($this->env, $_title_, "html", null, true);
        echo "</title>

</head>
";
    }

    public function getTemplateName()
    {
        return "includes/header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 10,  19 => 1,);
    }
}
