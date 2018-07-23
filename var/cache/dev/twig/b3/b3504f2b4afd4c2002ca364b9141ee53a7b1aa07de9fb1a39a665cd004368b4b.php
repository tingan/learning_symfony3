<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_fa5df5e0e0d4e0089334f125c9c19fb21ee67ff7702849b7a48da1e087e9394c extends Twig_Template
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
        $__internal_9b8e330da6f24c2892a94617ab0e8668dc73a24129930589fd85a24e251cab35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b8e330da6f24c2892a94617ab0e8668dc73a24129930589fd85a24e251cab35->enter($__internal_9b8e330da6f24c2892a94617ab0e8668dc73a24129930589fd85a24e251cab35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_11e8fcb84716c8c62ab0adf48ce7a8df91c91bd08c4ee368d83ff191e03f2637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11e8fcb84716c8c62ab0adf48ce7a8df91c91bd08c4ee368d83ff191e03f2637->enter($__internal_11e8fcb84716c8c62ab0adf48ce7a8df91c91bd08c4ee368d83ff191e03f2637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_9b8e330da6f24c2892a94617ab0e8668dc73a24129930589fd85a24e251cab35->leave($__internal_9b8e330da6f24c2892a94617ab0e8668dc73a24129930589fd85a24e251cab35_prof);

        
        $__internal_11e8fcb84716c8c62ab0adf48ce7a8df91c91bd08c4ee368d83ff191e03f2637->leave($__internal_11e8fcb84716c8c62ab0adf48ce7a8df91c91bd08c4ee368d83ff191e03f2637_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
