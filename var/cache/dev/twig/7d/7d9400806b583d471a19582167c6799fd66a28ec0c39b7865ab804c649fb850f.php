<?php

/* PMTPBundle:Default:index.html.twig */
class __TwigTemplate_106dfa6f1d91e5c3897c7777e2b3677a2f72cba81e7faa09bf28138607c8523b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PMTPBundle::base.html.twig", "PMTPBundle:Default:index.html.twig", 1);
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
        $__internal_7978b6c973a1f70f0ab1d9f325c9481e874881b5406e175ccedfaed49c57384f = $this->env->getExtension("native_profiler");
        $__internal_7978b6c973a1f70f0ab1d9f325c9481e874881b5406e175ccedfaed49c57384f->enter($__internal_7978b6c973a1f70f0ab1d9f325c9481e874881b5406e175ccedfaed49c57384f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PMTPBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7978b6c973a1f70f0ab1d9f325c9481e874881b5406e175ccedfaed49c57384f->leave($__internal_7978b6c973a1f70f0ab1d9f325c9481e874881b5406e175ccedfaed49c57384f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_46826b63c58dc34843952343c73ba551658270dcb08903fc8a4c6440fed8d49d = $this->env->getExtension("native_profiler");
        $__internal_46826b63c58dc34843952343c73ba551658270dcb08903fc8a4c6440fed8d49d->enter($__internal_46826b63c58dc34843952343c73ba551658270dcb08903fc8a4c6440fed8d49d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_46826b63c58dc34843952343c73ba551658270dcb08903fc8a4c6440fed8d49d->leave($__internal_46826b63c58dc34843952343c73ba551658270dcb08903fc8a4c6440fed8d49d_prof);

    }

    // line 7
    public function block_pmtp_body($context, array $blocks = array())
    {
        $__internal_0ebefd8433b304d92cb65fa82b2357853069e73c2cc1f6d00c7d3d83614bdcef = $this->env->getExtension("native_profiler");
        $__internal_0ebefd8433b304d92cb65fa82b2357853069e73c2cc1f6d00c7d3d83614bdcef->enter($__internal_0ebefd8433b304d92cb65fa82b2357853069e73c2cc1f6d00c7d3d83614bdcef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pmtp_body"));

        // line 8
        echo "
  <h2>Liste des articles</h2>
 \t
  <ul class=\"list-group\">
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listArticles"]) ? $context["listArticles"] : $this->getContext($context, "listArticles")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 13
            echo "      <li class=\"list-group-item\" style=\"background-color: #eee\">
        <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_tp_view", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">
          ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "
        </a>
        par ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "author", array()), "html", null, true);
            echo ",
        le ";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
      </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 21
            echo "      <li class=\"list-group-item\" style=\"background-color: #eee\">Pas (encore !) d'annonces</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "  </ul>
";
        
        $__internal_0ebefd8433b304d92cb65fa82b2357853069e73c2cc1f6d00c7d3d83614bdcef->leave($__internal_0ebefd8433b304d92cb65fa82b2357853069e73c2cc1f6d00c7d3d83614bdcef_prof);

    }

    public function getTemplateName()
    {
        return "PMTPBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 23,  92 => 21,  84 => 18,  80 => 17,  75 => 15,  71 => 14,  68 => 13,  63 => 12,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "PMTPBundle::base.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Accueil - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block pmtp_body %}*/
/* */
/*   <h2>Liste des articles</h2>*/
/*  	*/
/*   <ul class="list-group">*/
/*     {% for article in listArticles %}*/
/*       <li class="list-group-item" style="background-color: #eee">*/
/*         <a href="{{ path('pm_tp_view', {'id': article.id}) }}">*/
/*           {{ article.title }}*/
/*         </a>*/
/*         par {{ article.author }},*/
/*         le {{ article.date|date('d/m/Y') }}*/
/*       </li>*/
/*     {% else %}*/
/*       <li class="list-group-item" style="background-color: #eee">Pas (encore !) d'annonces</li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* {% endblock %}*/
/* */
