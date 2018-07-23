<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_103949417280e25e29a542df3835a4cce90eeb8aee0c01e358b9f39ad28ff91c extends Twig_Template
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
        $__internal_d1c7c0bf9ee166f241d5fb43d2d3cf0acbbb4a2a6e85b67ce16ac5a819e38d36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1c7c0bf9ee166f241d5fb43d2d3cf0acbbb4a2a6e85b67ce16ac5a819e38d36->enter($__internal_d1c7c0bf9ee166f241d5fb43d2d3cf0acbbb4a2a6e85b67ce16ac5a819e38d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_431af986e00fd2c77fb125fa05b8e63d2a198c26e66acb222704c654d758c069 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_431af986e00fd2c77fb125fa05b8e63d2a198c26e66acb222704c654d758c069->enter($__internal_431af986e00fd2c77fb125fa05b8e63d2a198c26e66acb222704c654d758c069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_d1c7c0bf9ee166f241d5fb43d2d3cf0acbbb4a2a6e85b67ce16ac5a819e38d36->leave($__internal_d1c7c0bf9ee166f241d5fb43d2d3cf0acbbb4a2a6e85b67ce16ac5a819e38d36_prof);

        
        $__internal_431af986e00fd2c77fb125fa05b8e63d2a198c26e66acb222704c654d758c069->leave($__internal_431af986e00fd2c77fb125fa05b8e63d2a198c26e66acb222704c654d758c069_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
