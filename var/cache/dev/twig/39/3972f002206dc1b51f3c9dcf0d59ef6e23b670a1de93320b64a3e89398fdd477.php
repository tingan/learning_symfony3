<?php

/* reservations/index.html.twig */
class __TwigTemplate_0251a6d8c1cc5ec4ae2d15ec0fde5d05937d67be6548e01693014fa284114442 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservations/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_21373b900243c76450d91e464583297402f09a8f238ca3c543b6f0eb820df93b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21373b900243c76450d91e464583297402f09a8f238ca3c543b6f0eb820df93b->enter($__internal_21373b900243c76450d91e464583297402f09a8f238ca3c543b6f0eb820df93b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/index.html.twig"));

        $__internal_76c6c9a98b490269b223e4142b2320983d3814834914cbf54fa61f736a474fc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76c6c9a98b490269b223e4142b2320983d3814834914cbf54fa61f736a474fc4->enter($__internal_76c6c9a98b490269b223e4142b2320983d3814834914cbf54fa61f736a474fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21373b900243c76450d91e464583297402f09a8f238ca3c543b6f0eb820df93b->leave($__internal_21373b900243c76450d91e464583297402f09a8f238ca3c543b6f0eb820df93b_prof);

        
        $__internal_76c6c9a98b490269b223e4142b2320983d3814834914cbf54fa61f736a474fc4->leave($__internal_76c6c9a98b490269b223e4142b2320983d3814834914cbf54fa61f736a474fc4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_091af21beff436a837e6ecd2bc1ffdb139cd99d61bcdbc0532fcb67621cef55f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_091af21beff436a837e6ecd2bc1ffdb139cd99d61bcdbc0532fcb67621cef55f->enter($__internal_091af21beff436a837e6ecd2bc1ffdb139cd99d61bcdbc0532fcb67621cef55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c6b29ce3da1ef40db2b768cec1ee44a013cd84a27aaf28b8c16704555af78dfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6b29ce3da1ef40db2b768cec1ee44a013cd84a27aaf28b8c16704555af78dfa->enter($__internal_c6b29ce3da1ef40db2b768cec1ee44a013cd84a27aaf28b8c16704555af78dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Reservations</h4>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">ROOM</th>
              <th width=\"200\">Name</th>
              <th width=\"200\">DATES</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          <tbody>
            
          </tbody>
        </table>
      </div>
    </div>

";
        
        $__internal_c6b29ce3da1ef40db2b768cec1ee44a013cd84a27aaf28b8c16704555af78dfa->leave($__internal_c6b29ce3da1ef40db2b768cec1ee44a013cd84a27aaf28b8c16704555af78dfa_prof);

        
        $__internal_091af21beff436a837e6ecd2bc1ffdb139cd99d61bcdbc0532fcb67621cef55f->leave($__internal_091af21beff436a837e6ecd2bc1ffdb139cd99d61bcdbc0532fcb67621cef55f_prof);

    }

    public function getTemplateName()
    {
        return "reservations/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Reservations</h4>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">ROOM</th>
              <th width=\"200\">Name</th>
              <th width=\"200\">DATES</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          <tbody>
            
          </tbody>
        </table>
      </div>
    </div>

{% endblock %}
", "reservations/index.html.twig", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/app/Resources/views/reservations/index.html.twig");
    }
}
