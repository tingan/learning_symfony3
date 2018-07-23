<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_9db96344a075cdaf0b2a8e7bbbd61fd4f209aa8837b420323881ec0757b0c66d extends Twig_Template
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
        $__internal_e37bb3dbdd086367ac18aeb979c38f899089259e0b867e01a8014f76b9aaffc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e37bb3dbdd086367ac18aeb979c38f899089259e0b867e01a8014f76b9aaffc1->enter($__internal_e37bb3dbdd086367ac18aeb979c38f899089259e0b867e01a8014f76b9aaffc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_0a5f3e94864f92481620c901dad5f00586a29dbcd084476a91aa62a371daa723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a5f3e94864f92481620c901dad5f00586a29dbcd084476a91aa62a371daa723->enter($__internal_0a5f3e94864f92481620c901dad5f00586a29dbcd084476a91aa62a371daa723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_e37bb3dbdd086367ac18aeb979c38f899089259e0b867e01a8014f76b9aaffc1->leave($__internal_e37bb3dbdd086367ac18aeb979c38f899089259e0b867e01a8014f76b9aaffc1_prof);

        
        $__internal_0a5f3e94864f92481620c901dad5f00586a29dbcd084476a91aa62a371daa723->leave($__internal_0a5f3e94864f92481620c901dad5f00586a29dbcd084476a91aa62a371daa723_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
