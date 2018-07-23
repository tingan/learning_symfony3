<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_acd39b642d31af1d9f5c624c43f3c5d2ce627872cac478485b4a997d5ee0c318 extends Twig_Template
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
        $__internal_2e5d32709e9828d4a2031faac6ea52dd6f94a4365952342098dec7d274a9cf36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e5d32709e9828d4a2031faac6ea52dd6f94a4365952342098dec7d274a9cf36->enter($__internal_2e5d32709e9828d4a2031faac6ea52dd6f94a4365952342098dec7d274a9cf36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_9895f26e768c21b4d67a81e0f8638349ada0c572c543a1253f1bd839310cfa94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9895f26e768c21b4d67a81e0f8638349ada0c572c543a1253f1bd839310cfa94->enter($__internal_9895f26e768c21b4d67a81e0f8638349ada0c572c543a1253f1bd839310cfa94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_2e5d32709e9828d4a2031faac6ea52dd6f94a4365952342098dec7d274a9cf36->leave($__internal_2e5d32709e9828d4a2031faac6ea52dd6f94a4365952342098dec7d274a9cf36_prof);

        
        $__internal_9895f26e768c21b4d67a81e0f8638349ada0c572c543a1253f1bd839310cfa94->leave($__internal_9895f26e768c21b4d67a81e0f8638349ada0c572c543a1253f1bd839310cfa94_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
