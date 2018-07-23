<?php

/* admin/index.html.twig */
class __TwigTemplate_0fd4c6afed8d6ac5af26ae933901b28d2d430dc25c250faa7312f6418efc9c82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
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
        $__internal_90911f232c44c8725c9497d4e2a2adfcefb27cdf4f64ac6cd0e5410ced33a687 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90911f232c44c8725c9497d4e2a2adfcefb27cdf4f64ac6cd0e5410ced33a687->enter($__internal_90911f232c44c8725c9497d4e2a2adfcefb27cdf4f64ac6cd0e5410ced33a687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_acc5e451f1596d6b6f9221cda97d929358922a1367cf2a9ea462f5a587ee3c12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acc5e451f1596d6b6f9221cda97d929358922a1367cf2a9ea462f5a587ee3c12->enter($__internal_acc5e451f1596d6b6f9221cda97d929358922a1367cf2a9ea462f5a587ee3c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90911f232c44c8725c9497d4e2a2adfcefb27cdf4f64ac6cd0e5410ced33a687->leave($__internal_90911f232c44c8725c9497d4e2a2adfcefb27cdf4f64ac6cd0e5410ced33a687_prof);

        
        $__internal_acc5e451f1596d6b6f9221cda97d929358922a1367cf2a9ea462f5a587ee3c12->leave($__internal_acc5e451f1596d6b6f9221cda97d929358922a1367cf2a9ea462f5a587ee3c12_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_11dbd6a841489d485e7688598dce5e708d93ab1599c60c706bf74d9923e1762e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11dbd6a841489d485e7688598dce5e708d93ab1599c60c706bf74d9923e1762e->enter($__internal_11dbd6a841489d485e7688598dce5e708d93ab1599c60c706bf74d9923e1762e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_28d5f81346911ea860978f669e11045bf0b54fe4020f3eb3fd95736bc9c6305a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28d5f81346911ea860978f669e11045bf0b54fe4020f3eb3fd95736bc9c6305a->enter($__internal_28d5f81346911ea860978f669e11045bf0b54fe4020f3eb3fd95736bc9c6305a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-6 columns\">
        <h4>Welcome to the Landon Hotel</h4>
        <img class=\"thumbnail\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/attractions.jpg"), "html", null, true);
        echo "\">
      </div>
      <div class=\"medium-6 large-5 columns\">
        <p>The original Landon perseveres after 50 years in the heart of West London. The West End neighborhood has something for everyone—from theater to dining to historic sights.</p>
        <p>And the not-to-miss Rooftop Cafe is a great place for travelers and locals to engage over drinks, food, and good conversation. </p>
        <p>To learn more about the Landon Hotel in the West End, browse our website and download our handy information sheet.</p>
      </div>
    </div>

";
        
        $__internal_28d5f81346911ea860978f669e11045bf0b54fe4020f3eb3fd95736bc9c6305a->leave($__internal_28d5f81346911ea860978f669e11045bf0b54fe4020f3eb3fd95736bc9c6305a_prof);

        
        $__internal_11dbd6a841489d485e7688598dce5e708d93ab1599c60c706bf74d9923e1762e->leave($__internal_11dbd6a841489d485e7688598dce5e708d93ab1599c60c706bf74d9923e1762e_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
      <div class=\"medium-6 columns\">
        <h4>Welcome to the Landon Hotel</h4>
        <img class=\"thumbnail\" src=\"{{ asset('images/attractions.jpg') }}\">
      </div>
      <div class=\"medium-6 large-5 columns\">
        <p>The original Landon perseveres after 50 years in the heart of West London. The West End neighborhood has something for everyone—from theater to dining to historic sights.</p>
        <p>And the not-to-miss Rooftop Cafe is a great place for travelers and locals to engage over drinks, food, and good conversation. </p>
        <p>To learn more about the Landon Hotel in the West End, browse our website and download our handy information sheet.</p>
      </div>
    </div>

{% endblock %}
", "admin/index.html.twig", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/app/Resources/views/admin/index.html.twig");
    }
}
