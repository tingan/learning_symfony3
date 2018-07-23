<?php

/* reservations/book.html.twig */
class __TwigTemplate_1818f9edb614bb1d34979c322002ba5718000ad32914aef01adfaf5971e7ee45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservations/book.html.twig", 1);
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
        $__internal_78d6a7f5171e823b5ba8c7c70ac11a6ccd3e6876b56e44155f072e901fb16b73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78d6a7f5171e823b5ba8c7c70ac11a6ccd3e6876b56e44155f072e901fb16b73->enter($__internal_78d6a7f5171e823b5ba8c7c70ac11a6ccd3e6876b56e44155f072e901fb16b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/book.html.twig"));

        $__internal_5856afea6f09768721c18d87bc7c0daa457f155f6c8c9be33914c74b4c5c4c92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5856afea6f09768721c18d87bc7c0daa457f155f6c8c9be33914c74b4c5c4c92->enter($__internal_5856afea6f09768721c18d87bc7c0daa457f155f6c8c9be33914c74b4c5c4c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/book.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78d6a7f5171e823b5ba8c7c70ac11a6ccd3e6876b56e44155f072e901fb16b73->leave($__internal_78d6a7f5171e823b5ba8c7c70ac11a6ccd3e6876b56e44155f072e901fb16b73_prof);

        
        $__internal_5856afea6f09768721c18d87bc7c0daa457f155f6c8c9be33914c74b4c5c4c92->leave($__internal_5856afea6f09768721c18d87bc7c0daa457f155f6c8c9be33914c74b4c5c4c92_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ac0a61060c33f963d040f3b6585b4e2808abe752d5ed10524a56222ce28c6f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ac0a61060c33f963d040f3b6585b4e2808abe752d5ed10524a56222ce28c6f0->enter($__internal_0ac0a61060c33f963d040f3b6585b4e2808abe752d5ed10524a56222ce28c6f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_95dc2996c27b5effbccd415f263ce0225bb3d3acd20ffb95382396a4a53b2973 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95dc2996c27b5effbccd415f263ce0225bb3d3acd20ffb95382396a4a53b2973->enter($__internal_95dc2996c27b5effbccd415f263ce0225bb3d3acd20ffb95382396a4a53b2973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Clients/Booking</h4>
        <div class=\"medium-2  columns\">BOOKING FOR:</div>
        <div class=\"medium-2  columns\"><b>Client Name</b></div>
        <form action=\"\" method=\"post\">
          <div class=\"medium-1  columns\">FROM:</div>
          <div class=\"medium-2  columns\"><input name=\"\" value=\"\" type=\"text\" class=\"datepicker\" /></div>
          <div class=\"medium-1  columns\">TO:</div>
          <div class=\"medium-2  columns\"><input name=\"\" value=\"\" type=\"text\" class=\"datepicker\" /></div>
          <div class=\"medium-2  columns\"><input class=\"button\" type=\"submit\" value=\"SEARCH\" /></div>
        </form>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Room</th>
              <th width=\"200\">Availability</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          <tbody>
          
            <tr>
              <td>101</td>
              <td>
                <div class=\"callout success\">
                    <h7>Available</h7>
                </div>
              </td>
              <td>
                <a class=\"hollow button warning\" href=\"#\">BOOK NOW</a>
              </td>
            </tr>
          
          </tbody>
        </table>
      </div>
    </div>

";
        
        $__internal_95dc2996c27b5effbccd415f263ce0225bb3d3acd20ffb95382396a4a53b2973->leave($__internal_95dc2996c27b5effbccd415f263ce0225bb3d3acd20ffb95382396a4a53b2973_prof);

        
        $__internal_0ac0a61060c33f963d040f3b6585b4e2808abe752d5ed10524a56222ce28c6f0->leave($__internal_0ac0a61060c33f963d040f3b6585b4e2808abe752d5ed10524a56222ce28c6f0_prof);

    }

    public function getTemplateName()
    {
        return "reservations/book.html.twig";
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
        <h4>Clients/Booking</h4>
        <div class=\"medium-2  columns\">BOOKING FOR:</div>
        <div class=\"medium-2  columns\"><b>Client Name</b></div>
        <form action=\"\" method=\"post\">
          <div class=\"medium-1  columns\">FROM:</div>
          <div class=\"medium-2  columns\"><input name=\"\" value=\"\" type=\"text\" class=\"datepicker\" /></div>
          <div class=\"medium-1  columns\">TO:</div>
          <div class=\"medium-2  columns\"><input name=\"\" value=\"\" type=\"text\" class=\"datepicker\" /></div>
          <div class=\"medium-2  columns\"><input class=\"button\" type=\"submit\" value=\"SEARCH\" /></div>
        </form>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Room</th>
              <th width=\"200\">Availability</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          <tbody>
          
            <tr>
              <td>101</td>
              <td>
                <div class=\"callout success\">
                    <h7>Available</h7>
                </div>
              </td>
              <td>
                <a class=\"hollow button warning\" href=\"#\">BOOK NOW</a>
              </td>
            </tr>
          
          </tbody>
        </table>
      </div>
    </div>

{% endblock %}
", "reservations/book.html.twig", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/app/Resources/views/reservations/book.html.twig");
    }
}
