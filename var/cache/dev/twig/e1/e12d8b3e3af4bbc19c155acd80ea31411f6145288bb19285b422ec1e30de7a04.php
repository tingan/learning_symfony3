<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_0cb551ff342eca3ad0e7c97a4b581c6b1bacd876961254d8e3e4996cd81ea9bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fcd93b0a0aba8f22f4171cd6ebd25e954a7f4f2bd665ea200a507b4347de3e25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcd93b0a0aba8f22f4171cd6ebd25e954a7f4f2bd665ea200a507b4347de3e25->enter($__internal_fcd93b0a0aba8f22f4171cd6ebd25e954a7f4f2bd665ea200a507b4347de3e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_ac03d8d690faeeb21a912e80ebee369a48386ab0c11995c56261d76a579e6d55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac03d8d690faeeb21a912e80ebee369a48386ab0c11995c56261d76a579e6d55->enter($__internal_ac03d8d690faeeb21a912e80ebee369a48386ab0c11995c56261d76a579e6d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_fcd93b0a0aba8f22f4171cd6ebd25e954a7f4f2bd665ea200a507b4347de3e25->leave($__internal_fcd93b0a0aba8f22f4171cd6ebd25e954a7f4f2bd665ea200a507b4347de3e25_prof);

        
        $__internal_ac03d8d690faeeb21a912e80ebee369a48386ab0c11995c56261d76a579e6d55->leave($__internal_ac03d8d690faeeb21a912e80ebee369a48386ab0c11995c56261d76a579e6d55_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_75c1c68386aee3cec3ac52f650d836a1ce5dc06d589bf0697c0ab7bc4c1fe55f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75c1c68386aee3cec3ac52f650d836a1ce5dc06d589bf0697c0ab7bc4c1fe55f->enter($__internal_75c1c68386aee3cec3ac52f650d836a1ce5dc06d589bf0697c0ab7bc4c1fe55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f14289a13221c066948cae29c93119fec621c04c389b7af99af03c4d59a974bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f14289a13221c066948cae29c93119fec621c04c389b7af99af03c4d59a974bf->enter($__internal_f14289a13221c066948cae29c93119fec621c04c389b7af99af03c4d59a974bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f14289a13221c066948cae29c93119fec621c04c389b7af99af03c4d59a974bf->leave($__internal_f14289a13221c066948cae29c93119fec621c04c389b7af99af03c4d59a974bf_prof);

        
        $__internal_75c1c68386aee3cec3ac52f650d836a1ce5dc06d589bf0697c0ab7bc4c1fe55f->leave($__internal_75c1c68386aee3cec3ac52f650d836a1ce5dc06d589bf0697c0ab7bc4c1fe55f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
