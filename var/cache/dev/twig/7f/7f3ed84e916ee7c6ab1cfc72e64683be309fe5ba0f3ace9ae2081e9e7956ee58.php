<?php

/* PMTPBundle:Default:view.html.twig */
class __TwigTemplate_2c75904eae7294c13e743df2f09b9df0c53d86abe711e4b572e538695edb5c99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PMTPBundle::base.html.twig", "PMTPBundle:Default:view.html.twig", 1);
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
        $__internal_bf9deead3013e094dbc605f26f86f87a8ab1b41eead64eff2a161ab55972a707 = $this->env->getExtension("native_profiler");
        $__internal_bf9deead3013e094dbc605f26f86f87a8ab1b41eead64eff2a161ab55972a707->enter($__internal_bf9deead3013e094dbc605f26f86f87a8ab1b41eead64eff2a161ab55972a707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PMTPBundle:Default:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf9deead3013e094dbc605f26f86f87a8ab1b41eead64eff2a161ab55972a707->leave($__internal_bf9deead3013e094dbc605f26f86f87a8ab1b41eead64eff2a161ab55972a707_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d79df5fff95c6cd3ccdb137ee952f3fa84fb98af21eb5f3979ce4ee937b8e4eb = $this->env->getExtension("native_profiler");
        $__internal_d79df5fff95c6cd3ccdb137ee952f3fa84fb98af21eb5f3979ce4ee937b8e4eb->enter($__internal_d79df5fff95c6cd3ccdb137ee952f3fa84fb98af21eb5f3979ce4ee937b8e4eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Lecture d'une article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d79df5fff95c6cd3ccdb137ee952f3fa84fb98af21eb5f3979ce4ee937b8e4eb->leave($__internal_d79df5fff95c6cd3ccdb137ee952f3fa84fb98af21eb5f3979ce4ee937b8e4eb_prof);

    }

    // line 7
    public function block_pmtp_body($context, array $blocks = array())
    {
        $__internal_a019bc4f8c0f6e3479be37b51289fd60ae62a1e6b7a0ca20974b363c327b8d5c = $this->env->getExtension("native_profiler");
        $__internal_a019bc4f8c0f6e3479be37b51289fd60ae62a1e6b7a0ca20974b363c327b8d5c->enter($__internal_a019bc4f8c0f6e3479be37b51289fd60ae62a1e6b7a0ca20974b363c327b8d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pmtp_body"));

        // line 8
        echo "
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      <h2 class=\"panel-title\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "</h2>
    </div>
   
   <div class=\"panel-body\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content", array()), "html", null, true);
        echo "</div>

   <div class=\"panel-footer\">Par ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</div>
  </div>
  
  <p>
    <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("pm_tp_home");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'accueil
    </a>
    <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_tp_edit", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier l'article
    </a>
    <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_tp_delete", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer l'article
    </a>
  </p>

";
        
        $__internal_a019bc4f8c0f6e3479be37b51289fd60ae62a1e6b7a0ca20974b363c327b8d5c->leave($__internal_a019bc4f8c0f6e3479be37b51289fd60ae62a1e6b7a0ca20974b363c327b8d5c_prof);

    }

    public function getTemplateName()
    {
        return "PMTPBundle:Default:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 28,  89 => 24,  82 => 20,  73 => 16,  68 => 14,  62 => 11,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "PMTPBundle::base.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Lecture d'une article - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block pmtp_body %}*/
/* */
/*   <div class="panel panel-default">*/
/*     <div class="panel-heading">*/
/*       <h2 class="panel-title">{{ article.title }}</h2>*/
/*     </div>*/
/*    */
/*    <div class="panel-body">{{ article.content }}</div>*/
/* */
/*    <div class="panel-footer">Par {{ article.author }}, le {{ article.date|date('d/m/Y') }}</div>*/
/*   </div>*/
/*   */
/*   <p>*/
/*     <a href="{{ path('pm_tp_home') }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à l'accueil*/
/*     </a>*/
/*     <a href="{{ path('pm_tp_edit', {'id': article.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-edit"></i>*/
/*       Modifier l'article*/
/*     </a>*/
/*     <a href="{{ path('pm_tp_delete', {'id': article.id}) }}" class="btn btn-danger">*/
/*       <i class="glyphicon glyphicon-trash"></i>*/
/*       Supprimer l'article*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/