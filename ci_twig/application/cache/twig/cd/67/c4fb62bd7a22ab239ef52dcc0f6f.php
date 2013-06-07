<?php

/* test.html */
class __TwigTemplate_cd67c4fb62bd7a22ab239ef52dcc0f6f extends Twig_Template
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
        $this->env->loadTemplate("includes/header.html")->display($context);
        // line 2
        echo "
 <body>

    <div class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"navbar-inner\">
        <div class=\"container\">
          <button type=\"button\" class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"brand\" href=\"#\">";
        // line 13
        if (isset($context["project_title"])) { $_project_title_ = $context["project_title"]; } else { $_project_title_ = null; }
        echo twig_escape_filter($this->env, $_project_title_, "html", null, true);
        echo "</a>
         
        </div>
      </div>
    </div>

    <div class=\"container\">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class=\"hero-unit\">
        <h1>";
        // line 23
        if (isset($context["infomation"])) { $_infomation_ = $context["infomation"]; } else { $_infomation_ = null; }
        echo twig_escape_filter($this->env, $_infomation_, "html", null, true);
        echo "</h1><br/><br/> 
        <ul class=\"breadcrumb\">";
        // line 24
        if (isset($context["main_content"])) { $_main_content_ = $context["main_content"]; } else { $_main_content_ = null; }
        echo twig_escape_filter($this->env, $_main_content_, "html", null, true);
        echo "</ul>
       </div>

      

      <footer>
<div class=\"alert\" align=\"center\">
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  ";
        // line 33
        echo "<!-- we define our footer content  -->
";
        // line 34
        if (isset($context["footerContent"])) { $_footerContent_ = $context["footerContent"]; } else { $_footerContent_ = null; }
        echo nl2br(twig_escape_filter($this->env, $_footerContent_, "html", null, true));
        echo "

Page rendered in <strong>";
        // line 36
        if (isset($context["elapsed_time"])) { $_elapsed_time_ = $context["elapsed_time"]; } else { $_elapsed_time_ = null; }
        echo twig_escape_filter($this->env, $_elapsed_time_, "html", null, true);
        echo "</strong> seconds ";
        if (isset($context["memory_usage"])) { $_memory_usage_ = $context["memory_usage"]; } else { $_memory_usage_ = null; }
        echo twig_escape_filter($this->env, $_memory_usage_, "html", null, true);
        // line 37
        echo "
      
</div>

     

      </footer>

    </div> <!-- /container -->
  ";
        // line 46
        $this->env->loadTemplate("includes/footer.html")->display($context);
    }

    public function getTemplateName()
    {
        return "test.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 46,  80 => 37,  74 => 36,  68 => 34,  65 => 33,  53 => 24,  48 => 23,  34 => 13,  21 => 2,  19 => 1,);
    }
}
