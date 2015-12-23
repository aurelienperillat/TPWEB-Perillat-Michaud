<?php

/* PMTPBundle:Default:edit.html.twig */
class __TwigTemplate_56817adb0d1a8f49135b6d8723fae501059b1bfb64671e49df42c1db6bc65215 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PMTPBundle::base.html.twig", "PMTPBundle:Default:edit.html.twig", 1);
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
        $__internal_f3812309969db7e594a5db7ed58b6e95c4a6021eb9601a94e6f24abafbf3db0c = $this->env->getExtension("native_profiler");
        $__internal_f3812309969db7e594a5db7ed58b6e95c4a6021eb9601a94e6f24abafbf3db0c->enter($__internal_f3812309969db7e594a5db7ed58b6e95c4a6021eb9601a94e6f24abafbf3db0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PMTPBundle:Default:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3812309969db7e594a5db7ed58b6e95c4a6021eb9601a94e6f24abafbf3db0c->leave($__internal_f3812309969db7e594a5db7ed58b6e95c4a6021eb9601a94e6f24abafbf3db0c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_36fc377bb114e077896d815933d4609c5825fe3ee0c8e7a3d6bbd0d869def646 = $this->env->getExtension("native_profiler");
        $__internal_36fc377bb114e077896d815933d4609c5825fe3ee0c8e7a3d6bbd0d869def646->enter($__internal_36fc377bb114e077896d815933d4609c5825fe3ee0c8e7a3d6bbd0d869def646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modifier une article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_36fc377bb114e077896d815933d4609c5825fe3ee0c8e7a3d6bbd0d869def646->leave($__internal_36fc377bb114e077896d815933d4609c5825fe3ee0c8e7a3d6bbd0d869def646_prof);

    }

    // line 7
    public function block_pmtp_body($context, array $blocks = array())
    {
        $__internal_6cab4d14065293c2b91a6cb1fbd0e9e933e4a1a6043c24e864d2f7ebc75f4462 = $this->env->getExtension("native_profiler");
        $__internal_6cab4d14065293c2b91a6cb1fbd0e9e933e4a1a6043c24e864d2f7ebc75f4462->enter($__internal_6cab4d14065293c2b91a6cb1fbd0e9e933e4a1a6043c24e864d2f7ebc75f4462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pmtp_body"));

        // line 8
        echo "
  <h2>Modifier une article</h2>

  ";
        // line 11
        echo twig_include($this->env, $context, "PMTPBundle:Default:form.html.twig");
        echo "

  <p>
    Vous éditez une annonce déjà existante, merci de ne pas changer
    l'esprit générale de l'annonce déjà publiée.
  </p>

  <p>
    <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_tp_view", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'article
    </a>
  </p>

";
        
        $__internal_6cab4d14065293c2b91a6cb1fbd0e9e933e4a1a6043c24e864d2f7ebc75f4462->leave($__internal_6cab4d14065293c2b91a6cb1fbd0e9e933e4a1a6043c24e864d2f7ebc75f4462_prof);

    }

    public function getTemplateName()
    {
        return "PMTPBundle:Default:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 19,  62 => 11,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "PMTPBundle::base.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier une article - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block pmtp_body %}*/
/* */
/*   <h2>Modifier une article</h2>*/
/* */
/*   {{ include("PMTPBundle:Default:form.html.twig") }}*/
/* */
/*   <p>*/
/*     Vous éditez une annonce déjà existante, merci de ne pas changer*/
/*     l'esprit générale de l'annonce déjà publiée.*/
/*   </p>*/
/* */
/*   <p>*/
/*     <a href="{{ path('pm_tp_view', {'id': id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à l'article*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
