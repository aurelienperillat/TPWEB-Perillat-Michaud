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
        $__internal_ccbd96b9f4d7224d14d23c02eff67e5a0df53ec38c3181574ebe761f64099996 = $this->env->getExtension("native_profiler");
        $__internal_ccbd96b9f4d7224d14d23c02eff67e5a0df53ec38c3181574ebe761f64099996->enter($__internal_ccbd96b9f4d7224d14d23c02eff67e5a0df53ec38c3181574ebe761f64099996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PMTPBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccbd96b9f4d7224d14d23c02eff67e5a0df53ec38c3181574ebe761f64099996->leave($__internal_ccbd96b9f4d7224d14d23c02eff67e5a0df53ec38c3181574ebe761f64099996_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_392626b8e36a823b0ff7088388764d8eb1f55b6b05950a9e91fcec09b99879ee = $this->env->getExtension("native_profiler");
        $__internal_392626b8e36a823b0ff7088388764d8eb1f55b6b05950a9e91fcec09b99879ee->enter($__internal_392626b8e36a823b0ff7088388764d8eb1f55b6b05950a9e91fcec09b99879ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Blog - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_392626b8e36a823b0ff7088388764d8eb1f55b6b05950a9e91fcec09b99879ee->leave($__internal_392626b8e36a823b0ff7088388764d8eb1f55b6b05950a9e91fcec09b99879ee_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_2044f33932585fd6bdf42a700ab53feac43ca4b0537a3ac0732a719dd9d5e046 = $this->env->getExtension("native_profiler");
        $__internal_2044f33932585fd6bdf42a700ab53feac43ca4b0537a3ac0732a719dd9d5e046->enter($__internal_2044f33932585fd6bdf42a700ab53feac43ca4b0537a3ac0732a719dd9d5e046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  ";
        // line 9
        $this->displayBlock('pmtp_body', $context, $blocks);
        // line 11
        echo "
";
        
        $__internal_2044f33932585fd6bdf42a700ab53feac43ca4b0537a3ac0732a719dd9d5e046->leave($__internal_2044f33932585fd6bdf42a700ab53feac43ca4b0537a3ac0732a719dd9d5e046_prof);

    }

    // line 9
    public function block_pmtp_body($context, array $blocks = array())
    {
        $__internal_4f27e13d6086bd690dbe05bc2a28c2cc73e755f430cc0cb3e3158c8f476a2c3d = $this->env->getExtension("native_profiler");
        $__internal_4f27e13d6086bd690dbe05bc2a28c2cc73e755f430cc0cb3e3158c8f476a2c3d->enter($__internal_4f27e13d6086bd690dbe05bc2a28c2cc73e755f430cc0cb3e3158c8f476a2c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pmtp_body"));

        // line 10
        echo "  ";
        
        $__internal_4f27e13d6086bd690dbe05bc2a28c2cc73e755f430cc0cb3e3158c8f476a2c3d->leave($__internal_4f27e13d6086bd690dbe05bc2a28c2cc73e755f430cc0cb3e3158c8f476a2c3d_prof);

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
