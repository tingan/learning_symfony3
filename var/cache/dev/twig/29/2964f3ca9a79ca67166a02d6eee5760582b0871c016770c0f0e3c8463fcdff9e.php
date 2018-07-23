<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_885b8cfc706b09dc81d03c392f7374936bd6c33bb8479760f1768bef164ad437 extends Twig_Template
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
        $__internal_3e350caf763b31533f92d3d5a34a53c01b47d7d2e2ca6afabfd47a0fbb27afb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e350caf763b31533f92d3d5a34a53c01b47d7d2e2ca6afabfd47a0fbb27afb4->enter($__internal_3e350caf763b31533f92d3d5a34a53c01b47d7d2e2ca6afabfd47a0fbb27afb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_6aa272244c347172ebff6011b66db38f4da87b994f5c67a3690358a4d7c2324d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aa272244c347172ebff6011b66db38f4da87b994f5c67a3690358a4d7c2324d->enter($__internal_6aa272244c347172ebff6011b66db38f4da87b994f5c67a3690358a4d7c2324d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_3e350caf763b31533f92d3d5a34a53c01b47d7d2e2ca6afabfd47a0fbb27afb4->leave($__internal_3e350caf763b31533f92d3d5a34a53c01b47d7d2e2ca6afabfd47a0fbb27afb4_prof);

        
        $__internal_6aa272244c347172ebff6011b66db38f4da87b994f5c67a3690358a4d7c2324d->leave($__internal_6aa272244c347172ebff6011b66db38f4da87b994f5c67a3690358a4d7c2324d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
