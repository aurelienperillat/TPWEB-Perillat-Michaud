<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_1d5e091f98f58465f2ddfca995b70e88b985f3d286053ac92f9e9541eef7b732 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_4f689f69cc78f087e157281c5fe7ef4e04286b4c1bffa76541b7f357d42f031c = $this->env->getExtension("native_profiler");
        $__internal_4f689f69cc78f087e157281c5fe7ef4e04286b4c1bffa76541b7f357d42f031c->enter($__internal_4f689f69cc78f087e157281c5fe7ef4e04286b4c1bffa76541b7f357d42f031c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f689f69cc78f087e157281c5fe7ef4e04286b4c1bffa76541b7f357d42f031c->leave($__internal_4f689f69cc78f087e157281c5fe7ef4e04286b4c1bffa76541b7f357d42f031c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_813b5b9cdca0c6558aa09a98cdbc8bc5a19acaec824e6f1f02e99fd373cde60d = $this->env->getExtension("native_profiler");
        $__internal_813b5b9cdca0c6558aa09a98cdbc8bc5a19acaec824e6f1f02e99fd373cde60d->enter($__internal_813b5b9cdca0c6558aa09a98cdbc8bc5a19acaec824e6f1f02e99fd373cde60d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_813b5b9cdca0c6558aa09a98cdbc8bc5a19acaec824e6f1f02e99fd373cde60d->leave($__internal_813b5b9cdca0c6558aa09a98cdbc8bc5a19acaec824e6f1f02e99fd373cde60d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8105751c2ce2ae499d36b4d9f78617edd18ce6514d637a0a278f96e73e57b87b = $this->env->getExtension("native_profiler");
        $__internal_8105751c2ce2ae499d36b4d9f78617edd18ce6514d637a0a278f96e73e57b87b->enter($__internal_8105751c2ce2ae499d36b4d9f78617edd18ce6514d637a0a278f96e73e57b87b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8105751c2ce2ae499d36b4d9f78617edd18ce6514d637a0a278f96e73e57b87b->leave($__internal_8105751c2ce2ae499d36b4d9f78617edd18ce6514d637a0a278f96e73e57b87b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bf0494ce951b473da3f9cab8ce8cf22bb5fdb1dc98ef311667c55248a9ed1886 = $this->env->getExtension("native_profiler");
        $__internal_bf0494ce951b473da3f9cab8ce8cf22bb5fdb1dc98ef311667c55248a9ed1886->enter($__internal_bf0494ce951b473da3f9cab8ce8cf22bb5fdb1dc98ef311667c55248a9ed1886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_bf0494ce951b473da3f9cab8ce8cf22bb5fdb1dc98ef311667c55248a9ed1886->leave($__internal_bf0494ce951b473da3f9cab8ce8cf22bb5fdb1dc98ef311667c55248a9ed1886_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
