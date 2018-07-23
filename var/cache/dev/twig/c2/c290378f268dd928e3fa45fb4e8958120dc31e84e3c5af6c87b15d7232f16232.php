<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_ac4444af5195207c6602900e37764cb33e447feb488f6b641af87f22748c47d6 extends Twig_Template
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
        $__internal_e1b68413e8aae49f6b2c9e5e0a2a7003b84a30de1af7e6b7824db1bb82fd0544 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1b68413e8aae49f6b2c9e5e0a2a7003b84a30de1af7e6b7824db1bb82fd0544->enter($__internal_e1b68413e8aae49f6b2c9e5e0a2a7003b84a30de1af7e6b7824db1bb82fd0544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_318bbefe17cff9978815283b4f7d2e182a27bb29d34a1d162f3f9fe4c5507f98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_318bbefe17cff9978815283b4f7d2e182a27bb29d34a1d162f3f9fe4c5507f98->enter($__internal_318bbefe17cff9978815283b4f7d2e182a27bb29d34a1d162f3f9fe4c5507f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_e1b68413e8aae49f6b2c9e5e0a2a7003b84a30de1af7e6b7824db1bb82fd0544->leave($__internal_e1b68413e8aae49f6b2c9e5e0a2a7003b84a30de1af7e6b7824db1bb82fd0544_prof);

        
        $__internal_318bbefe17cff9978815283b4f7d2e182a27bb29d34a1d162f3f9fe4c5507f98->leave($__internal_318bbefe17cff9978815283b4f7d2e182a27bb29d34a1d162f3f9fe4c5507f98_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
