<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_9cff3da51e0d89dd56d473e57fe4539ae5e914f7e7fc37113f8b5b3caecc64d0 extends Twig_Template
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
        $__internal_5f93662954609de1a548e6d69add13152f32576a643a0d6abfd61a625c2d0157 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f93662954609de1a548e6d69add13152f32576a643a0d6abfd61a625c2d0157->enter($__internal_5f93662954609de1a548e6d69add13152f32576a643a0d6abfd61a625c2d0157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_7917c21712dbcaee8c2b81d5ae283234ce530b85018c124d7f89221383945a7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7917c21712dbcaee8c2b81d5ae283234ce530b85018c124d7f89221383945a7c->enter($__internal_7917c21712dbcaee8c2b81d5ae283234ce530b85018c124d7f89221383945a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_5f93662954609de1a548e6d69add13152f32576a643a0d6abfd61a625c2d0157->leave($__internal_5f93662954609de1a548e6d69add13152f32576a643a0d6abfd61a625c2d0157_prof);

        
        $__internal_7917c21712dbcaee8c2b81d5ae283234ce530b85018c124d7f89221383945a7c->leave($__internal_7917c21712dbcaee8c2b81d5ae283234ce530b85018c124d7f89221383945a7c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
