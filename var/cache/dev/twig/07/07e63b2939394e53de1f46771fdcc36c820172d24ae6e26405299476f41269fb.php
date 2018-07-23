<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_14079a80209bc737de4ddfb189450ca043d9895a33f869074951a6be320cedfd extends Twig_Template
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
        $__internal_54b156373e4cfb85f6d4b1b5c507250c5677f00fa24d0dd56768d81b93e10a9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54b156373e4cfb85f6d4b1b5c507250c5677f00fa24d0dd56768d81b93e10a9f->enter($__internal_54b156373e4cfb85f6d4b1b5c507250c5677f00fa24d0dd56768d81b93e10a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_1bdd66dcf8dfce4efd0affeeddef07a731f23fb655b2d6af909e1a3c649bb58e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bdd66dcf8dfce4efd0affeeddef07a731f23fb655b2d6af909e1a3c649bb58e->enter($__internal_1bdd66dcf8dfce4efd0affeeddef07a731f23fb655b2d6af909e1a3c649bb58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_54b156373e4cfb85f6d4b1b5c507250c5677f00fa24d0dd56768d81b93e10a9f->leave($__internal_54b156373e4cfb85f6d4b1b5c507250c5677f00fa24d0dd56768d81b93e10a9f_prof);

        
        $__internal_1bdd66dcf8dfce4efd0affeeddef07a731f23fb655b2d6af909e1a3c649bb58e->leave($__internal_1bdd66dcf8dfce4efd0affeeddef07a731f23fb655b2d6af909e1a3c649bb58e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
