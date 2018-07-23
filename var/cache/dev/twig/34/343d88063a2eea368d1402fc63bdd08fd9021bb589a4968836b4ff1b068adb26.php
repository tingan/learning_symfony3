<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_9e151c727dbbbbe9ec2bf0b8676caf1d6877e1ac965844f0b7c95a7fd86c744a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_efd0001e35d848bfd233c4b5af8414189f68fbec5a697feab1e51e873c0fc800 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efd0001e35d848bfd233c4b5af8414189f68fbec5a697feab1e51e873c0fc800->enter($__internal_efd0001e35d848bfd233c4b5af8414189f68fbec5a697feab1e51e873c0fc800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_554afbade223673267f62879a1fcb6db208c8b3f4c9735d864d8fe3140386f4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_554afbade223673267f62879a1fcb6db208c8b3f4c9735d864d8fe3140386f4b->enter($__internal_554afbade223673267f62879a1fcb6db208c8b3f4c9735d864d8fe3140386f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efd0001e35d848bfd233c4b5af8414189f68fbec5a697feab1e51e873c0fc800->leave($__internal_efd0001e35d848bfd233c4b5af8414189f68fbec5a697feab1e51e873c0fc800_prof);

        
        $__internal_554afbade223673267f62879a1fcb6db208c8b3f4c9735d864d8fe3140386f4b->leave($__internal_554afbade223673267f62879a1fcb6db208c8b3f4c9735d864d8fe3140386f4b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5b89943f04bea070076b29cf0410642220585e719086a021eb107645cc1ff80d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b89943f04bea070076b29cf0410642220585e719086a021eb107645cc1ff80d->enter($__internal_5b89943f04bea070076b29cf0410642220585e719086a021eb107645cc1ff80d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1d19d100fdab028cf3f965ab7a5ae1b2f9398d25ac40cadb9dcfb36c183ca7c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d19d100fdab028cf3f965ab7a5ae1b2f9398d25ac40cadb9dcfb36c183ca7c6->enter($__internal_1d19d100fdab028cf3f965ab7a5ae1b2f9398d25ac40cadb9dcfb36c183ca7c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_1d19d100fdab028cf3f965ab7a5ae1b2f9398d25ac40cadb9dcfb36c183ca7c6->leave($__internal_1d19d100fdab028cf3f965ab7a5ae1b2f9398d25ac40cadb9dcfb36c183ca7c6_prof);

        
        $__internal_5b89943f04bea070076b29cf0410642220585e719086a021eb107645cc1ff80d->leave($__internal_5b89943f04bea070076b29cf0410642220585e719086a021eb107645cc1ff80d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
