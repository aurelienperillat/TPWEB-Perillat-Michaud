<?php

/* PMTPBundle:Default:add.html.twig */
class __TwigTemplate_2645d7cca938728670892c55b012d689b2d3c9a96e271dd95f117ebcf4737c30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PMTPBundle::base.html.twig", "PMTPBundle:Default:add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'pmtp_body' => array($this, 'block_pmtp_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PMTPBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_94f57147d36ecd982d9283fb41c4cb44b4811184f00afec8301de8dbbf593486 = $this->env->getExtension("native_profiler");
        $__internal_94f57147d36ecd982d9283fb41c4cb44b4811184f00afec8301de8dbbf593486->enter($__internal_94f57147d36ecd982d9283fb41c4cb44b4811184f00afec8301de8dbbf593486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PMTPBundle:Default:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94f57147d36ecd982d9283fb41c4cb44b4811184f00afec8301de8dbbf593486->leave($__internal_94f57147d36ecd982d9283fb41c4cb44b4811184f00afec8301de8dbbf593486_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a1881be89298a7eb3ff933ffa0d30b9fbd1d84e6c6c0da3b73f6fdf7450c1cf9 = $this->env->getExtension("native_profiler");
        $__internal_a1881be89298a7eb3ff933ffa0d30b9fbd1d84e6c6c0da3b73f6fdf7450c1cf9->enter($__internal_a1881be89298a7eb3ff933ffa0d30b9fbd1d84e6c6c0da3b73f6fdf7450c1cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajouter une article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a1881be89298a7eb3ff933ffa0d30b9fbd1d84e6c6c0da3b73f6fdf7450c1cf9->leave($__internal_a1881be89298a7eb3ff933ffa0d30b9fbd1d84e6c6c0da3b73f6fdf7450c1cf9_prof);

    }

    // line 7
    public function block_pmtp_body($context, array $blocks = array())
    {
        $__internal_ac5144bd3db13abd5751d208aa97c1df56cfde393b564b38fc2a211b6951fd13 = $this->env->getExtension("native_profiler");
        $__internal_ac5144bd3db13abd5751d208aa97c1df56cfde393b564b38fc2a211b6951fd13->enter($__internal_ac5144bd3db13abd5751d208aa97c1df56cfde393b564b38fc2a211b6951fd13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pmtp_body"));

        // line 8
        echo "
  <h2>Ajouter un article</h2>

  ";
        // line 11
        echo twig_include($this->env, $context, "PMTPBundle:Default:form.html.twig");
        echo "

  <p>
    Vous éditez une nouvelle annonce.
  </p>

  <p>
    <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("pm_tp_home");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'accueil
    </a>
  </p>

";
        
        $__internal_ac5144bd3db13abd5751d208aa97c1df56cfde393b564b38fc2a211b6951fd13->leave($__internal_ac5144bd3db13abd5751d208aa97c1df56cfde393b564b38fc2a211b6951fd13_prof);

    }

    public function getTemplateName()
    {
        return "PMTPBundle:Default:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 18,  62 => 11,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "PMTPBundle::base.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Ajouter une article - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block pmtp_body %}*/
/* */
/*   <h2>Ajouter un article</h2>*/
/* */
/*   {{ include("PMTPBundle:Default:form.html.twig") }}*/
/* */
/*   <p>*/
/*     Vous éditez une nouvelle annonce.*/
/*   </p>*/
/* */
/*   <p>*/
/*     <a href="{{ path('pm_tp_home') }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à l'accueil*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
