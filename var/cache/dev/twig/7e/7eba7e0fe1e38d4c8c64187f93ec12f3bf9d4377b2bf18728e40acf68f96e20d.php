<?php

/* PMTPBundle:Default:form.html.twig */
class __TwigTemplate_4ee06d464f1119d3051e01b62c76f0f0cd82855c213a51ae75c9c4c1673701b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71fe2d1d941749754239d775696552f135dca4aabd4d098e418536e5f8610dc2 = $this->env->getExtension("native_profiler");
        $__internal_71fe2d1d941749754239d775696552f135dca4aabd4d098e418536e5f8610dc2->enter($__internal_71fe2d1d941749754239d775696552f135dca4aabd4d098e418536e5f8610dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PMTPBundle:Default:form.html.twig"));

        // line 1
        echo "<h3>Formulaire d'article</h3>

<div class=\"well\">
  ";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

    ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    <div class=\"form-group\">
      ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Titre de l'annonce"));
        echo "
      ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "

      <div class=\"col-sm-9\">
        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Contenu de l'annonce"));
        echo "
      ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "
      
\t  <div class=\"col-sm-9\">
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>
\t
\t<div class=\"form-group\">
      ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Date"));
        echo "
      ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "
      
\t  <div class=\"col-sm-9\">
        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>
\t
\t<div class=\"form-group\">
      ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Auteur"));
        echo "
      ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "
      
\t  <div class=\"col-sm-9\">
        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>
    
\t<div class=\"form-group\">
\t\t<div class=\"col-sm-offset-2 col-sm-8\">
\t\t\t";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary btn-block")));
        echo "
\t\t</div>
\t</div>
\t\t
    ";
        // line 50
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>";
        
        $__internal_71fe2d1d941749754239d775696552f135dca4aabd4d098e418536e5f8610dc2->leave($__internal_71fe2d1d941749754239d775696552f135dca4aabd4d098e418536e5f8610dc2_prof);

    }

    public function getTemplateName()
    {
        return "PMTPBundle:Default:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 50,  111 => 46,  102 => 40,  96 => 37,  92 => 36,  84 => 31,  78 => 28,  74 => 27,  66 => 22,  60 => 19,  56 => 18,  48 => 13,  42 => 10,  38 => 9,  32 => 6,  27 => 4,  22 => 1,);
    }
}
/* <h3>Formulaire d'article</h3>*/
/* */
/* <div class="well">*/
/*   {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/* */
/*     {{ form_errors(form) }}*/
/* */
/*     <div class="form-group">*/
/*       {{ form_label(form.title, "Titre de l'annonce", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*       {{ form_errors(form.title) }}*/
/* */
/*       <div class="col-sm-9">*/
/*         {{ form_widget(form.title, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       {{ form_label(form.content, "Contenu de l'annonce", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*       {{ form_errors(form.title) }}*/
/*       */
/* 	  <div class="col-sm-9">*/
/*         {{ form_widget(form.content, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*     </div>*/
/* 	*/
/* 	<div class="form-group">*/
/*       {{ form_label(form.date, "Date", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*       {{ form_errors(form.title) }}*/
/*       */
/* 	  <div class="col-sm-9">*/
/*         {{ form_widget(form.date, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*     </div>*/
/* 	*/
/* 	<div class="form-group">*/
/*       {{ form_label(form.author, "Auteur", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*       {{ form_errors(form.title) }}*/
/*       */
/* 	  <div class="col-sm-9">*/
/*         {{ form_widget(form.author, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*     </div>*/
/*     */
/* 	<div class="form-group">*/
/* 		<div class="col-sm-offset-2 col-sm-8">*/
/* 			{{ form_widget(form.save, {'attr': {'class': 'btn btn-primary btn-block'}}) }}*/
/* 		</div>*/
/* 	</div>*/
/* 		*/
/*     {{ form_end(form) }}*/
/* </div>*/
