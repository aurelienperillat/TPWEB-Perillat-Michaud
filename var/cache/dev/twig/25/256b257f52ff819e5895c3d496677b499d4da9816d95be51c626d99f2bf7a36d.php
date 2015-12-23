<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_244b2a8062f062c98e13af80b66d6d9546bf0bd71828b6b0a79463e716a21a68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4cda9758876cb0836be51714f291e9c918e5b243a49e33c7512abd430d55b84 = $this->env->getExtension("native_profiler");
        $__internal_c4cda9758876cb0836be51714f291e9c918e5b243a49e33c7512abd430d55b84->enter($__internal_c4cda9758876cb0836be51714f291e9c918e5b243a49e33c7512abd430d55b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4cda9758876cb0836be51714f291e9c918e5b243a49e33c7512abd430d55b84->leave($__internal_c4cda9758876cb0836be51714f291e9c918e5b243a49e33c7512abd430d55b84_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5fcedea8d6e317bdded1a4f6e2b65ddf3161f57005563ceb9660f52eb4554e2a = $this->env->getExtension("native_profiler");
        $__internal_5fcedea8d6e317bdded1a4f6e2b65ddf3161f57005563ceb9660f52eb4554e2a->enter($__internal_5fcedea8d6e317bdded1a4f6e2b65ddf3161f57005563ceb9660f52eb4554e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5fcedea8d6e317bdded1a4f6e2b65ddf3161f57005563ceb9660f52eb4554e2a->leave($__internal_5fcedea8d6e317bdded1a4f6e2b65ddf3161f57005563ceb9660f52eb4554e2a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7755db355e14d314d86d8949e20ecc1f5a9591746261296003f83b74a620a647 = $this->env->getExtension("native_profiler");
        $__internal_7755db355e14d314d86d8949e20ecc1f5a9591746261296003f83b74a620a647->enter($__internal_7755db355e14d314d86d8949e20ecc1f5a9591746261296003f83b74a620a647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7755db355e14d314d86d8949e20ecc1f5a9591746261296003f83b74a620a647->leave($__internal_7755db355e14d314d86d8949e20ecc1f5a9591746261296003f83b74a620a647_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3e338f39ab8634d617eab44e8f72feca62c171907d48d0aca8c675c8ac9d7a7 = $this->env->getExtension("native_profiler");
        $__internal_f3e338f39ab8634d617eab44e8f72feca62c171907d48d0aca8c675c8ac9d7a7->enter($__internal_f3e338f39ab8634d617eab44e8f72feca62c171907d48d0aca8c675c8ac9d7a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f3e338f39ab8634d617eab44e8f72feca62c171907d48d0aca8c675c8ac9d7a7->leave($__internal_f3e338f39ab8634d617eab44e8f72feca62c171907d48d0aca8c675c8ac9d7a7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
