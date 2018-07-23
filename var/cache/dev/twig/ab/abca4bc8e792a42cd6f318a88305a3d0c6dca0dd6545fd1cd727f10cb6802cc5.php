<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_4689f4f737b83fd5f7af7af61673133cb662b00eca1e1d274f28a6a042330c68 extends Twig_Template
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
        $__internal_72f804d4f1cc2c778687614789405010713f76eedbde95325390b22634004d64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72f804d4f1cc2c778687614789405010713f76eedbde95325390b22634004d64->enter($__internal_72f804d4f1cc2c778687614789405010713f76eedbde95325390b22634004d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_0af52aa2dcabfe55a9cce9a1bbee9366c0e29f417e434fef4adf9bbfe4045454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0af52aa2dcabfe55a9cce9a1bbee9366c0e29f417e434fef4adf9bbfe4045454->enter($__internal_0af52aa2dcabfe55a9cce9a1bbee9366c0e29f417e434fef4adf9bbfe4045454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_72f804d4f1cc2c778687614789405010713f76eedbde95325390b22634004d64->leave($__internal_72f804d4f1cc2c778687614789405010713f76eedbde95325390b22634004d64_prof);

        
        $__internal_0af52aa2dcabfe55a9cce9a1bbee9366c0e29f417e434fef4adf9bbfe4045454->leave($__internal_0af52aa2dcabfe55a9cce9a1bbee9366c0e29f417e434fef4adf9bbfe4045454_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
