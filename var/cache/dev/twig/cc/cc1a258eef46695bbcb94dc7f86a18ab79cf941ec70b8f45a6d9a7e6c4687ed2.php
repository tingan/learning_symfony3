<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_d9cafd7ae597496003b68503585bfb64d21f60eb112be1ec82abc7da67abce85 extends Twig_Template
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
        $__internal_7895587676d2d10aa40b35b2033214dc9d13e5e416c169136a6bc7a6b27db619 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7895587676d2d10aa40b35b2033214dc9d13e5e416c169136a6bc7a6b27db619->enter($__internal_7895587676d2d10aa40b35b2033214dc9d13e5e416c169136a6bc7a6b27db619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_af471fc30066e411350067e53d9361e6e9fc6160c4897685305c4f4a0822de01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af471fc30066e411350067e53d9361e6e9fc6160c4897685305c4f4a0822de01->enter($__internal_af471fc30066e411350067e53d9361e6e9fc6160c4897685305c4f4a0822de01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_7895587676d2d10aa40b35b2033214dc9d13e5e416c169136a6bc7a6b27db619->leave($__internal_7895587676d2d10aa40b35b2033214dc9d13e5e416c169136a6bc7a6b27db619_prof);

        
        $__internal_af471fc30066e411350067e53d9361e6e9fc6160c4897685305c4f4a0822de01->leave($__internal_af471fc30066e411350067e53d9361e6e9fc6160c4897685305c4f4a0822de01_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
