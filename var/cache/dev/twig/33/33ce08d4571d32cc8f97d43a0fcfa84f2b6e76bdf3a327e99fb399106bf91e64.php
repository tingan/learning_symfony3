<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_e19466265f08c071c4a69e29b8721da7c53f743fd22af2688fc3aebba7816679 extends Twig_Template
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
        $__internal_9e6c3fadb7006eed90a6826bc3a5e68b39b95b27353da5d6eb888c94800c3fd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e6c3fadb7006eed90a6826bc3a5e68b39b95b27353da5d6eb888c94800c3fd0->enter($__internal_9e6c3fadb7006eed90a6826bc3a5e68b39b95b27353da5d6eb888c94800c3fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_0b3eb70f70684fbed26303a3c3abb87464a3885187bec31c65a24a7c17c71492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b3eb70f70684fbed26303a3c3abb87464a3885187bec31c65a24a7c17c71492->enter($__internal_0b3eb70f70684fbed26303a3c3abb87464a3885187bec31c65a24a7c17c71492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_9e6c3fadb7006eed90a6826bc3a5e68b39b95b27353da5d6eb888c94800c3fd0->leave($__internal_9e6c3fadb7006eed90a6826bc3a5e68b39b95b27353da5d6eb888c94800c3fd0_prof);

        
        $__internal_0b3eb70f70684fbed26303a3c3abb87464a3885187bec31c65a24a7c17c71492->leave($__internal_0b3eb70f70684fbed26303a3c3abb87464a3885187bec31c65a24a7c17c71492_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
