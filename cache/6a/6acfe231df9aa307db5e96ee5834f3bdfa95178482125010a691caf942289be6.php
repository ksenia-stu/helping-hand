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

/* index.html.twig */
class __TwigTemplate_4ad0082fd0e9affa197ad374bd53ffea799889a64c1afeee209716407e1affd3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'banner' => [$this, 'block_banner'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("master.html.twig", "index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Home Page";
    }

    // line 12
    public function block_banner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        $this->loadTemplate("banner.html.twig", "index.html.twig", 13)->display($context);
    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "<!--start of showcase-->

 

<div id=\"mainCont\">
<!--About us -->
<div id=\"aboutUs\">
<hr class=\"featurette-divider\">

    <div class=\"row featurette\">
      <div class=\"col-md-7\">
        <h1 class=\"featurette-heading\">About us</h1>
        <p class=\"lead\">At Helping Hand we welcome and celebrate all people, and deliver personalised and professional services to meet the needs of older 
        people from all backgrounds. Our core values of compassion, respect, excellence and community show in everything we do.</p>
      </div>
      <div class=\"col-md-5\">
        <img src=\"images/about.jpg\" class=\"d-block w-100 myImg\" alt=\"...\">
      </div>
    </div>
  </div>

    <hr class=\"featurette-divider\">

\t<!-- Caregivers -->
    <h1 class=\"top-page-title text-center\">Featured caregivers</h1>


  <div class=\"container\">
  <div class=\"row\">
    <div class=\"col-sm\">
      <img class=\"img-fluid img-thumbnail rounded\" src=\"images/caregiver1.jpg\" alt=\"caregiver\">
      <p class=\"card-text\">Lucy Thompson</p>
      <p><a class=\"btn btn-secondary custom-button\" href=\"#\" role=\"button\">View</a></p>
    </div>
    <div class=\"col-sm\">
      <img class=\"img-fluid img-thumbnail rounded\" src=\"images/caregiver2.jpg\" alt=\"caregiver\">
      <p class=\"card-text\">John Arry</p>
      <p><a class=\"btn btn-secondary custom-button\" href=\"#\" role=\"button\">View</a></p>
    </div>
    <div class=\"col-sm\">
      <img class=\"img-fluid img-thumbnail rounded\" src=\"images/caregiver3.jpg\" alt=\"caregiver\">
      <p class=\"card-text\">Alberto Derrec</p>
      <p><a class=\"btn btn-secondary custom-button\" href=\"#\" role=\"button\">View</a></p>
    </div>
  </div>
</div>
</div>
          
";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 17,  63 => 16,  59 => 13,  55 => 12,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"master.html.twig\" %}

{% block title %}Home Page{% endblock %}

{#{% block head %}
<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" integrity=\"sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z\" crossorigin=\"anonymous\">
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\" integrity=\"sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV\" crossorigin=\"anonymous\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script> 
\t
{% endblock %} #}

{% block banner %}
{% include ('banner.html.twig') %}
{% endblock %}

{% block content %}
<!--start of showcase-->

 

<div id=\"mainCont\">
<!--About us -->
<div id=\"aboutUs\">
<hr class=\"featurette-divider\">

    <div class=\"row featurette\">
      <div class=\"col-md-7\">
        <h1 class=\"featurette-heading\">About us</h1>
        <p class=\"lead\">At Helping Hand we welcome and celebrate all people, and deliver personalised and professional services to meet the needs of older 
        people from all backgrounds. Our core values of compassion, respect, excellence and community show in everything we do.</p>
      </div>
      <div class=\"col-md-5\">
        <img src=\"images/about.jpg\" class=\"d-block w-100 myImg\" alt=\"...\">
      </div>
    </div>
  </div>

    <hr class=\"featurette-divider\">

\t<!-- Caregivers -->
    <h1 class=\"top-page-title text-center\">Featured caregivers</h1>


  <div class=\"container\">
  <div class=\"row\">
    <div class=\"col-sm\">
      <img class=\"img-fluid img-thumbnail rounded\" src=\"images/caregiver1.jpg\" alt=\"caregiver\">
      <p class=\"card-text\">Lucy Thompson</p>
      <p><a class=\"btn btn-secondary custom-button\" href=\"#\" role=\"button\">View</a></p>
    </div>
    <div class=\"col-sm\">
      <img class=\"img-fluid img-thumbnail rounded\" src=\"images/caregiver2.jpg\" alt=\"caregiver\">
      <p class=\"card-text\">John Arry</p>
      <p><a class=\"btn btn-secondary custom-button\" href=\"#\" role=\"button\">View</a></p>
    </div>
    <div class=\"col-sm\">
      <img class=\"img-fluid img-thumbnail rounded\" src=\"images/caregiver3.jpg\" alt=\"caregiver\">
      <p class=\"card-text\">Alberto Derrec</p>
      <p><a class=\"btn btn-secondary custom-button\" href=\"#\" role=\"button\">View</a></p>
    </div>
  </div>
</div>
</div>
          
{% endblock %}

", "index.html.twig", "C:\\xampp\\htdocs\\helpinghand\\templates\\index.html.twig");
    }
}
