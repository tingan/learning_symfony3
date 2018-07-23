<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_829c53af01a91953362b22c056793358fefc5b0db279e408565bbc133b4e8ecf extends Twig_Template
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
        $__internal_0765e4d56f5e8c417f0582edd31b75fff350b422ae646a7db2989f675cfc1aa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0765e4d56f5e8c417f0582edd31b75fff350b422ae646a7db2989f675cfc1aa9->enter($__internal_0765e4d56f5e8c417f0582edd31b75fff350b422ae646a7db2989f675cfc1aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_e75eb3260a2d8baeb08b914e91c0a81570aa18805f0e9364f8583028de5947a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e75eb3260a2d8baeb08b914e91c0a81570aa18805f0e9364f8583028de5947a6->enter($__internal_e75eb3260a2d8baeb08b914e91c0a81570aa18805f0e9364f8583028de5947a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_0765e4d56f5e8c417f0582edd31b75fff350b422ae646a7db2989f675cfc1aa9->leave($__internal_0765e4d56f5e8c417f0582edd31b75fff350b422ae646a7db2989f675cfc1aa9_prof);

        
        $__internal_e75eb3260a2d8baeb08b914e91c0a81570aa18805f0e9364f8583028de5947a6->leave($__internal_e75eb3260a2d8baeb08b914e91c0a81570aa18805f0e9364f8583028de5947a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
