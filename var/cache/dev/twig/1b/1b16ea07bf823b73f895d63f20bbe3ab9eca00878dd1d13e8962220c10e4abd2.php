<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_40b27c383f2f0f34979ae9b455b918bb942b88b030af3cfe32a99ce9fcf73549 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34a697dc2ed4d622100f9d4f29dea3f9dd3aee8e70c45f9ece763eb85250976d = $this->env->getExtension("native_profiler");
        $__internal_34a697dc2ed4d622100f9d4f29dea3f9dd3aee8e70c45f9ece763eb85250976d->enter($__internal_34a697dc2ed4d622100f9d4f29dea3f9dd3aee8e70c45f9ece763eb85250976d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34a697dc2ed4d622100f9d4f29dea3f9dd3aee8e70c45f9ece763eb85250976d->leave($__internal_34a697dc2ed4d622100f9d4f29dea3f9dd3aee8e70c45f9ece763eb85250976d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dbd90d27b7f47f2d361c329fc7201e8575ee0ca8ac851a29a42585f92b2e8c2f = $this->env->getExtension("native_profiler");
        $__internal_dbd90d27b7f47f2d361c329fc7201e8575ee0ca8ac851a29a42585f92b2e8c2f->enter($__internal_dbd90d27b7f47f2d361c329fc7201e8575ee0ca8ac851a29a42585f92b2e8c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dbd90d27b7f47f2d361c329fc7201e8575ee0ca8ac851a29a42585f92b2e8c2f->leave($__internal_dbd90d27b7f47f2d361c329fc7201e8575ee0ca8ac851a29a42585f92b2e8c2f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cb3b5de1c6be003a8f871fcb4ae983b99eeefdf12150d967086a460eea1c2d75 = $this->env->getExtension("native_profiler");
        $__internal_cb3b5de1c6be003a8f871fcb4ae983b99eeefdf12150d967086a460eea1c2d75->enter($__internal_cb3b5de1c6be003a8f871fcb4ae983b99eeefdf12150d967086a460eea1c2d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cb3b5de1c6be003a8f871fcb4ae983b99eeefdf12150d967086a460eea1c2d75->leave($__internal_cb3b5de1c6be003a8f871fcb4ae983b99eeefdf12150d967086a460eea1c2d75_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_90fc688e20ee6b0aaab11a7c01ad7e55fa68fe31a1ce2dbd3aadb69b1c57c784 = $this->env->getExtension("native_profiler");
        $__internal_90fc688e20ee6b0aaab11a7c01ad7e55fa68fe31a1ce2dbd3aadb69b1c57c784->enter($__internal_90fc688e20ee6b0aaab11a7c01ad7e55fa68fe31a1ce2dbd3aadb69b1c57c784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_90fc688e20ee6b0aaab11a7c01ad7e55fa68fe31a1ce2dbd3aadb69b1c57c784->leave($__internal_90fc688e20ee6b0aaab11a7c01ad7e55fa68fe31a1ce2dbd3aadb69b1c57c784_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
