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
        $__internal_82796581c0fb579f863f014cb9693692de5046a8eef389f5d3a9656bd8639a8d = $this->env->getExtension("native_profiler");
        $__internal_82796581c0fb579f863f014cb9693692de5046a8eef389f5d3a9656bd8639a8d->enter($__internal_82796581c0fb579f863f014cb9693692de5046a8eef389f5d3a9656bd8639a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82796581c0fb579f863f014cb9693692de5046a8eef389f5d3a9656bd8639a8d->leave($__internal_82796581c0fb579f863f014cb9693692de5046a8eef389f5d3a9656bd8639a8d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b00a7e03bd3661c0f2374b03836f314494678d0d89af01e58fe27bea81e82413 = $this->env->getExtension("native_profiler");
        $__internal_b00a7e03bd3661c0f2374b03836f314494678d0d89af01e58fe27bea81e82413->enter($__internal_b00a7e03bd3661c0f2374b03836f314494678d0d89af01e58fe27bea81e82413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b00a7e03bd3661c0f2374b03836f314494678d0d89af01e58fe27bea81e82413->leave($__internal_b00a7e03bd3661c0f2374b03836f314494678d0d89af01e58fe27bea81e82413_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ff1add1c8824c8f369988aba1fb3a925e5d70a7830da1bb13900c13e7c3cfdc8 = $this->env->getExtension("native_profiler");
        $__internal_ff1add1c8824c8f369988aba1fb3a925e5d70a7830da1bb13900c13e7c3cfdc8->enter($__internal_ff1add1c8824c8f369988aba1fb3a925e5d70a7830da1bb13900c13e7c3cfdc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ff1add1c8824c8f369988aba1fb3a925e5d70a7830da1bb13900c13e7c3cfdc8->leave($__internal_ff1add1c8824c8f369988aba1fb3a925e5d70a7830da1bb13900c13e7c3cfdc8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_aedd26ad147df65cba59d3400ba15dc977d89345204dcdba5316bce3fe7514ec = $this->env->getExtension("native_profiler");
        $__internal_aedd26ad147df65cba59d3400ba15dc977d89345204dcdba5316bce3fe7514ec->enter($__internal_aedd26ad147df65cba59d3400ba15dc977d89345204dcdba5316bce3fe7514ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_aedd26ad147df65cba59d3400ba15dc977d89345204dcdba5316bce3fe7514ec->leave($__internal_aedd26ad147df65cba59d3400ba15dc977d89345204dcdba5316bce3fe7514ec_prof);

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
