<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_43d94d7fa1720cbb19c6a69d5fbfeee1699887945271fd8893d406492642c3ed extends Twig_Template
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
        $__internal_c26baf049b133f54d9f3b40220da3e4f9339b84a60ea568a2dce34ced97c3a62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c26baf049b133f54d9f3b40220da3e4f9339b84a60ea568a2dce34ced97c3a62->enter($__internal_c26baf049b133f54d9f3b40220da3e4f9339b84a60ea568a2dce34ced97c3a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_6be97f8c425847f6079973ede66d01aadaf339a3e48068d862835b95732ad881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6be97f8c425847f6079973ede66d01aadaf339a3e48068d862835b95732ad881->enter($__internal_6be97f8c425847f6079973ede66d01aadaf339a3e48068d862835b95732ad881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_c26baf049b133f54d9f3b40220da3e4f9339b84a60ea568a2dce34ced97c3a62->leave($__internal_c26baf049b133f54d9f3b40220da3e4f9339b84a60ea568a2dce34ced97c3a62_prof);

        
        $__internal_6be97f8c425847f6079973ede66d01aadaf339a3e48068d862835b95732ad881->leave($__internal_6be97f8c425847f6079973ede66d01aadaf339a3e48068d862835b95732ad881_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
