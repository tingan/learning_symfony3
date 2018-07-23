<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_60081cb057b2ed8093ab5ebf7604e0278b3ffc887a41d905a34ed540c135f81c extends Twig_Template
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
        $__internal_76b6f398f633623f6048e3af45f38079bf60b96928852f7189ca235c1c83ca6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76b6f398f633623f6048e3af45f38079bf60b96928852f7189ca235c1c83ca6b->enter($__internal_76b6f398f633623f6048e3af45f38079bf60b96928852f7189ca235c1c83ca6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_778cd4a5940db824ce13a84a3c1bb87ceae446d3c5f601682a6996ceb56235ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_778cd4a5940db824ce13a84a3c1bb87ceae446d3c5f601682a6996ceb56235ec->enter($__internal_778cd4a5940db824ce13a84a3c1bb87ceae446d3c5f601682a6996ceb56235ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76b6f398f633623f6048e3af45f38079bf60b96928852f7189ca235c1c83ca6b->leave($__internal_76b6f398f633623f6048e3af45f38079bf60b96928852f7189ca235c1c83ca6b_prof);

        
        $__internal_778cd4a5940db824ce13a84a3c1bb87ceae446d3c5f601682a6996ceb56235ec->leave($__internal_778cd4a5940db824ce13a84a3c1bb87ceae446d3c5f601682a6996ceb56235ec_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0ac5fc30d17ee350998584758ba2ce158def1bbbbd7d0ef0fa48f4cb8b456625 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ac5fc30d17ee350998584758ba2ce158def1bbbbd7d0ef0fa48f4cb8b456625->enter($__internal_0ac5fc30d17ee350998584758ba2ce158def1bbbbd7d0ef0fa48f4cb8b456625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b92bfcd046be59156ea6746d2af231d0c70f51cf1fcebc2823982eb9c409d999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b92bfcd046be59156ea6746d2af231d0c70f51cf1fcebc2823982eb9c409d999->enter($__internal_b92bfcd046be59156ea6746d2af231d0c70f51cf1fcebc2823982eb9c409d999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b92bfcd046be59156ea6746d2af231d0c70f51cf1fcebc2823982eb9c409d999->leave($__internal_b92bfcd046be59156ea6746d2af231d0c70f51cf1fcebc2823982eb9c409d999_prof);

        
        $__internal_0ac5fc30d17ee350998584758ba2ce158def1bbbbd7d0ef0fa48f4cb8b456625->leave($__internal_0ac5fc30d17ee350998584758ba2ce158def1bbbbd7d0ef0fa48f4cb8b456625_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c392def97c76aaff88c768ee24cc886646070f5b577ccfd87969c23a8231d345 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c392def97c76aaff88c768ee24cc886646070f5b577ccfd87969c23a8231d345->enter($__internal_c392def97c76aaff88c768ee24cc886646070f5b577ccfd87969c23a8231d345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4faa4874a8835bd9c53fdcf6adb6a1a2df6d585600eb44b1a0ce4f067ec784a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4faa4874a8835bd9c53fdcf6adb6a1a2df6d585600eb44b1a0ce4f067ec784a2->enter($__internal_4faa4874a8835bd9c53fdcf6adb6a1a2df6d585600eb44b1a0ce4f067ec784a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_4faa4874a8835bd9c53fdcf6adb6a1a2df6d585600eb44b1a0ce4f067ec784a2->leave($__internal_4faa4874a8835bd9c53fdcf6adb6a1a2df6d585600eb44b1a0ce4f067ec784a2_prof);

        
        $__internal_c392def97c76aaff88c768ee24cc886646070f5b577ccfd87969c23a8231d345->leave($__internal_c392def97c76aaff88c768ee24cc886646070f5b577ccfd87969c23a8231d345_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2b999b602afe4004ccc9e3aaf4ad8516a3ee45db947ede3d33f7c1628b8398cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b999b602afe4004ccc9e3aaf4ad8516a3ee45db947ede3d33f7c1628b8398cf->enter($__internal_2b999b602afe4004ccc9e3aaf4ad8516a3ee45db947ede3d33f7c1628b8398cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6ec3e387cef79736e9893100e2ca1701e1c78de3330e79332a26f642bd7b0248 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ec3e387cef79736e9893100e2ca1701e1c78de3330e79332a26f642bd7b0248->enter($__internal_6ec3e387cef79736e9893100e2ca1701e1c78de3330e79332a26f642bd7b0248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_6ec3e387cef79736e9893100e2ca1701e1c78de3330e79332a26f642bd7b0248->leave($__internal_6ec3e387cef79736e9893100e2ca1701e1c78de3330e79332a26f642bd7b0248_prof);

        
        $__internal_2b999b602afe4004ccc9e3aaf4ad8516a3ee45db947ede3d33f7c1628b8398cf->leave($__internal_2b999b602afe4004ccc9e3aaf4ad8516a3ee45db947ede3d33f7c1628b8398cf_prof);

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
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
