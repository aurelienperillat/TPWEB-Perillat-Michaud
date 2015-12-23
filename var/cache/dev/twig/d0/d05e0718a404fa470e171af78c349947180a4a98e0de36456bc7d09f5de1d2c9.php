<?php

/* PMTPBundle::base.html.twig */
class __TwigTemplate_91a8e10f53405ab0fee8be96414364a8adc1f1f78cbe5529187ed9f5bde12a00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PMTPBundle::base.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'pmtp_body' => array($this, 'block_pmtp_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d6b132d1ebaab60ed8eb38d1edf08c634997fde62c7e07c9780d17195cd634fa = $this->env->getExtension("native_profiler");
        $__internal_d6b132d1ebaab60ed8eb38d1edf08c634997fde62c7e07c9780d17195cd634fa->enter($__internal_d6b132d1ebaab60ed8eb38d1edf08c634997fde62c7e07c9780d17195cd634fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PMTPBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6b132d1ebaab60ed8eb38d1edf08c634997fde62c7e07c9780d17195cd634fa->leave($__internal_d6b132d1ebaab60ed8eb38d1edf08c634997fde62c7e07c9780d17195cd634fa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_891485f27d3b35dfd0a12cd21871d3335a5aeb0e5cb6925ca0ff567e6230b35a = $this->env->getExtension("native_profiler");
        $__internal_891485f27d3b35dfd0a12cd21871d3335a5aeb0e5cb6925ca0ff567e6230b35a->enter($__internal_891485f27d3b35dfd0a12cd21871d3335a5aeb0e5cb6925ca0ff567e6230b35a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Blog - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_891485f27d3b35dfd0a12cd21871d3335a5aeb0e5cb6925ca0ff567e6230b35a->leave($__internal_891485f27d3b35dfd0a12cd21871d3335a5aeb0e5cb6925ca0ff567e6230b35a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_1708694b27353acae4283f3f742b03e0eb9d823433f6447f497930495de00d51 = $this->env->getExtension("native_profiler");
        $__internal_1708694b27353acae4283f3f742b03e0eb9d823433f6447f497930495de00d51->enter($__internal_1708694b27353acae4283f3f742b03e0eb9d823433f6447f497930495de00d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  ";
        // line 9
        $this->displayBlock('pmtp_body', $context, $blocks);
        // line 11
        echo "
";
        
        $__internal_1708694b27353acae4283f3f742b03e0eb9d823433f6447f497930495de00d51->leave($__internal_1708694b27353acae4283f3f742b03e0eb9d823433f6447f497930495de00d51_prof);

    }

    // line 9
    public function block_pmtp_body($context, array $blocks = array())
    {
        $__internal_0bd5a68ae3b6287f0ef0f08a71f0423de5a1403552188992be4b5e108d1a7e73 = $this->env->getExtension("native_profiler");
        $__internal_0bd5a68ae3b6287f0ef0f08a71f0423de5a1403552188992be4b5e108d1a7e73->enter($__internal_0bd5a68ae3b6287f0ef0f08a71f0423de5a1403552188992be4b5e108d1a7e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pmtp_body"));

        // line 10
        echo "  ";
        
        $__internal_0bd5a68ae3b6287f0ef0f08a71f0423de5a1403552188992be4b5e108d1a7e73->leave($__internal_0bd5a68ae3b6287f0ef0f08a71f0423de5a1403552188992be4b5e108d1a7e73_prof);

    }

    public function getTemplateName()
    {
        return "PMTPBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 10,  71 => 9,  63 => 11,  61 => 9,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Blog - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   {% block pmtp_body %}*/
/*   {% endblock %}*/
/* */
/* {% endblock %}*/
