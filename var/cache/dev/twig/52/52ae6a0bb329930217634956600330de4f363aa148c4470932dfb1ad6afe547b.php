<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_a7fe5d405f2341b05175bb94ea6473b286986cb4838646e13557879df76ac462 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_b4d46a777be1637192accd216fb602ab03550b9317b1a342363cdb0821fc892a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4d46a777be1637192accd216fb602ab03550b9317b1a342363cdb0821fc892a->enter($__internal_b4d46a777be1637192accd216fb602ab03550b9317b1a342363cdb0821fc892a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_83b32526b51d7db8a7e14afe351812adfab343e901187b7e3af192d608e48a28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83b32526b51d7db8a7e14afe351812adfab343e901187b7e3af192d608e48a28->enter($__internal_83b32526b51d7db8a7e14afe351812adfab343e901187b7e3af192d608e48a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4d46a777be1637192accd216fb602ab03550b9317b1a342363cdb0821fc892a->leave($__internal_b4d46a777be1637192accd216fb602ab03550b9317b1a342363cdb0821fc892a_prof);

        
        $__internal_83b32526b51d7db8a7e14afe351812adfab343e901187b7e3af192d608e48a28->leave($__internal_83b32526b51d7db8a7e14afe351812adfab343e901187b7e3af192d608e48a28_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_67beed68426d49f33d8626ffa0e444d00b82640e2157406086c434cec389ab1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67beed68426d49f33d8626ffa0e444d00b82640e2157406086c434cec389ab1a->enter($__internal_67beed68426d49f33d8626ffa0e444d00b82640e2157406086c434cec389ab1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_21d8ce95015def7d872916d8a41b250f619c70d9f78585433a5371eec8a8f3fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21d8ce95015def7d872916d8a41b250f619c70d9f78585433a5371eec8a8f3fd->enter($__internal_21d8ce95015def7d872916d8a41b250f619c70d9f78585433a5371eec8a8f3fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_21d8ce95015def7d872916d8a41b250f619c70d9f78585433a5371eec8a8f3fd->leave($__internal_21d8ce95015def7d872916d8a41b250f619c70d9f78585433a5371eec8a8f3fd_prof);

        
        $__internal_67beed68426d49f33d8626ffa0e444d00b82640e2157406086c434cec389ab1a->leave($__internal_67beed68426d49f33d8626ffa0e444d00b82640e2157406086c434cec389ab1a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_135135b134e85629988dcfc287680b20b820f8de8ed814d9cee50b7bcc54a637 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_135135b134e85629988dcfc287680b20b820f8de8ed814d9cee50b7bcc54a637->enter($__internal_135135b134e85629988dcfc287680b20b820f8de8ed814d9cee50b7bcc54a637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_529d635098f9f8d95a7f5530d3cb41b3931d9f9c780459fedfd3e5af6ece5fba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_529d635098f9f8d95a7f5530d3cb41b3931d9f9c780459fedfd3e5af6ece5fba->enter($__internal_529d635098f9f8d95a7f5530d3cb41b3931d9f9c780459fedfd3e5af6ece5fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_529d635098f9f8d95a7f5530d3cb41b3931d9f9c780459fedfd3e5af6ece5fba->leave($__internal_529d635098f9f8d95a7f5530d3cb41b3931d9f9c780459fedfd3e5af6ece5fba_prof);

        
        $__internal_135135b134e85629988dcfc287680b20b820f8de8ed814d9cee50b7bcc54a637->leave($__internal_135135b134e85629988dcfc287680b20b820f8de8ed814d9cee50b7bcc54a637_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
