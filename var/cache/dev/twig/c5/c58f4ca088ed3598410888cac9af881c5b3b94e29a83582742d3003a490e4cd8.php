<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_3e02b809370c9b7536b01ca700db5e5425c42866544fad11cbec9686649f76ec extends Twig_Template
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
        $__internal_598548920410171b1c925378b1ee4f68e0ea189a172749a2ebef50b8a6cdf4cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_598548920410171b1c925378b1ee4f68e0ea189a172749a2ebef50b8a6cdf4cb->enter($__internal_598548920410171b1c925378b1ee4f68e0ea189a172749a2ebef50b8a6cdf4cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_bb13bcd5af33c36f777c1596f96e80d0ee8094a60862cacc9d4edebeee0a7b10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb13bcd5af33c36f777c1596f96e80d0ee8094a60862cacc9d4edebeee0a7b10->enter($__internal_bb13bcd5af33c36f777c1596f96e80d0ee8094a60862cacc9d4edebeee0a7b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_598548920410171b1c925378b1ee4f68e0ea189a172749a2ebef50b8a6cdf4cb->leave($__internal_598548920410171b1c925378b1ee4f68e0ea189a172749a2ebef50b8a6cdf4cb_prof);

        
        $__internal_bb13bcd5af33c36f777c1596f96e80d0ee8094a60862cacc9d4edebeee0a7b10->leave($__internal_bb13bcd5af33c36f777c1596f96e80d0ee8094a60862cacc9d4edebeee0a7b10_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
