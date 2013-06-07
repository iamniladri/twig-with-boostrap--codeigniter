<?php

/* test.php */
class __TwigTemplate_a7a67241497a165395c31077db5a62c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<?php echo base_url(); ?>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\" xml:lang=\"en\">
<head>
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 15
        echo "</head>
<body>
<div id=\"maincontainer\">
<!-- top section -->

<div id=\"topsection\">
<div class=\"innertube\">
";
        // line 23
        echo "<h1>Your Logo Here</h1>
</div>
</div>
<!-- end of top section -->
<!-- this is main content column -->
<div id=\"contentwrapper\">
<div id=\"contentcolumn\">
<div class=\"innertube\">
";
        // line 32
        echo "<!-- we define our main column content -->
";
        // line 33
        if (isset($context["mainContent"])) { $_mainContent_ = $context["mainContent"]; } else { $_mainContent_ = null; }
        echo twig_escape_filter($this->env, $_mainContent_, "html", null, true);
        echo "
</div>
</div>
</div>
<!-- end of main content column -->
<!-- this is right column content -->
<div id=\"rightcolumn\">
<div class=\"innertube\">
";
        // line 42
        echo "<!-- we define our right column content  -->
";
        // line 43
        if (isset($context["rightContent"])) { $_rightContent_ = $context["rightContent"]; } else { $_rightContent_ = null; }
        echo twig_escape_filter($this->env, $_rightContent_, "html", null, true);
        echo "
</div>
</div>
<!-- end of right column content -->
<!-- footer section -->
<div id=\"footer\">
";
        // line 50
        echo "<!-- we define our footer content  -->
";
        // line 51
        if (isset($context["footerContent"])) { $_footerContent_ = $context["footerContent"]; } else { $_footerContent_ = null; }
        echo twig_escape_filter($this->env, $_footerContent_, "html", null, true);
        echo "
</div>
<!-- end of footer section -->

</div>
</body>
</html>";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\" />
<!-- we define the meta description block -->
<meta name=\"description\"  content=\"";
        // line 8
        if (isset($context["metaDesc"])) { $_metaDesc_ = $context["metaDesc"]; } else { $_metaDesc_ = null; }
        echo twig_escape_filter($this->env, $_metaDesc_, "html", null, true);
        echo "\">
<!-- we define the meta keywords block -->
<meta name=\"keywords\"  content=\"";
        // line 10
        if (isset($context["metaKeywords"])) { $_metaKeywords_ = $context["metaKeywords"]; } else { $_metaKeywords_ = null; }
        echo twig_escape_filter($this->env, $_metaKeywords_, "html", null, true);
        echo "\">
<!-- we define our title block -->
<title>";
        // line 12
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        echo twig_escape_filter($this->env, $_title_, "html", null, true);
        echo "</title>
<link media=\"screen\" type=\"text/css\" rel=\"stylesheet\" href=\"css/index.css\" />
";
    }

    public function getTemplateName()
    {
        return "test.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 12,  103 => 10,  97 => 8,  93 => 6,  90 => 5,  78 => 51,  75 => 50,  65 => 43,  62 => 42,  50 => 33,  47 => 32,  37 => 23,  28 => 15,  26 => 5,  20 => 1,);
    }
}
