<?php

/* ::base.html.twig */
class __TwigTemplate_1d3223ea738f1fc54a7a4778508ccb9348e077ae50f7324f65ba48c501139d58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab9d51be5da32edf646812099dea14eca5dd2420b2b047b9b7d77ed1094bbbc4 = $this->env->getExtension("native_profiler");
        $__internal_ab9d51be5da32edf646812099dea14eca5dd2420b2b047b9b7d77ed1094bbbc4->enter($__internal_ab9d51be5da32edf646812099dea14eca5dd2420b2b047b9b7d77ed1094bbbc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "</head>

<body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>Projet web 4A</h1>
\t  <p>Développé par: Aurélien Perillat et Nicolas Michaud</p>
    </div>

    <div class=\"row\">
      <div id=\"menu\" class=\"col-sm-3\">
        <h2>Menu</h2>
        <ul class=\"list-group\">
          <li class=\"list-group-item\" style=\"background-color: #eee\"><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("pm_tp_home");
        echo "\">Accueil</a></li>
          <li class=\"list-group-item\" style=\"background-color: #eee\"><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("pm_tp_add");
        echo "\">Ajouter un article</a></li>
        </ul>
        
      </div>
      <div id=\"content\" class=\"col-sm-9\">
        ";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "      </div>
    </div>
  </div>

  ";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 42
        echo "
</body>
</html>";
        
        $__internal_ab9d51be5da32edf646812099dea14eca5dd2420b2b047b9b7d77ed1094bbbc4->leave($__internal_ab9d51be5da32edf646812099dea14eca5dd2420b2b047b9b7d77ed1094bbbc4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c448b7d81b9c1767b725d8971686fb131c1c8c4894a3ec0bfcc08583efc841a = $this->env->getExtension("native_profiler");
        $__internal_6c448b7d81b9c1767b725d8971686fb131c1c8c4894a3ec0bfcc08583efc841a->enter($__internal_6c448b7d81b9c1767b725d8971686fb131c1c8c4894a3ec0bfcc08583efc841a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web 4A";
        
        $__internal_6c448b7d81b9c1767b725d8971686fb131c1c8c4894a3ec0bfcc08583efc841a->leave($__internal_6c448b7d81b9c1767b725d8971686fb131c1c8c4894a3ec0bfcc08583efc841a_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_31056c0e18f3078057cdc942a9a47c01860ece3256f852949c8ebfcc32b73a3c = $this->env->getExtension("native_profiler");
        $__internal_31056c0e18f3078057cdc942a9a47c01860ece3256f852949c8ebfcc32b73a3c->enter($__internal_31056c0e18f3078057cdc942a9a47c01860ece3256f852949c8ebfcc32b73a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "
    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  ";
        
        $__internal_31056c0e18f3078057cdc942a9a47c01860ece3256f852949c8ebfcc32b73a3c->leave($__internal_31056c0e18f3078057cdc942a9a47c01860ece3256f852949c8ebfcc32b73a3c_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4a8feee7d3f13864d543bc4439cb87cc5c0d5913195e0d8a0948e6f3e493bd8 = $this->env->getExtension("native_profiler");
        $__internal_f4a8feee7d3f13864d543bc4439cb87cc5c0d5913195e0d8a0948e6f3e493bd8->enter($__internal_f4a8feee7d3f13864d543bc4439cb87cc5c0d5913195e0d8a0948e6f3e493bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 33
        echo "        ";
        
        $__internal_f4a8feee7d3f13864d543bc4439cb87cc5c0d5913195e0d8a0948e6f3e493bd8->leave($__internal_f4a8feee7d3f13864d543bc4439cb87cc5c0d5913195e0d8a0948e6f3e493bd8_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_95b4fc0e7d034f2c82b2820a12550aafff618bc48e69b4e8ca163db4f363592d = $this->env->getExtension("native_profiler");
        $__internal_95b4fc0e7d034f2c82b2820a12550aafff618bc48e69b4e8ca163db4f363592d->enter($__internal_95b4fc0e7d034f2c82b2820a12550aafff618bc48e69b4e8ca163db4f363592d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_95b4fc0e7d034f2c82b2820a12550aafff618bc48e69b4e8ca163db4f363592d->leave($__internal_95b4fc0e7d034f2c82b2820a12550aafff618bc48e69b4e8ca163db4f363592d_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 39,  127 => 38,  120 => 33,  114 => 32,  105 => 10,  99 => 9,  87 => 7,  78 => 42,  76 => 38,  70 => 34,  68 => 32,  60 => 27,  56 => 26,  41 => 13,  39 => 9,  34 => 7,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*   <meta charset="utf-8">*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*   <title>{% block title %}Web 4A{% endblock %}</title>*/
/* */
/*   {% block stylesheets %}*/
/* */
/*     <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">*/
/*   {% endblock %}*/
/* </head>*/
/* */
/* <body>*/
/*   <div class="container">*/
/*     <div id="header" class="jumbotron">*/
/*       <h1>Projet web 4A</h1>*/
/* 	  <p>Développé par: Aurélien Perillat et Nicolas Michaud</p>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*       <div id="menu" class="col-sm-3">*/
/*         <h2>Menu</h2>*/
/*         <ul class="list-group">*/
/*           <li class="list-group-item" style="background-color: #eee"><a href="{{ path('pm_tp_home') }}">Accueil</a></li>*/
/*           <li class="list-group-item" style="background-color: #eee"><a href="{{ path('pm_tp_add') }}">Ajouter un article</a></li>*/
/*         </ul>*/
/*         */
/*       </div>*/
/*       <div id="content" class="col-sm-9">*/
/*         {% block body %}*/
/*         {% endblock %}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* */
/*   {% block javascripts %}*/
/*     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/*     <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>*/
/*   {% endblock %}*/
/* */
/* </body>*/
/* </html>*/
