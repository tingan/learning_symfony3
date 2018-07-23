<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_5074dca4f2f367dac6c70ec0a1520e747fd8ed3b2422152babb5b521ead0c762 extends Twig_Template
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
        $__internal_cb6a92c89be4d4fb23889070b9757a17f8fd1fb17e76c1ff94cbd1bd2db436d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb6a92c89be4d4fb23889070b9757a17f8fd1fb17e76c1ff94cbd1bd2db436d1->enter($__internal_cb6a92c89be4d4fb23889070b9757a17f8fd1fb17e76c1ff94cbd1bd2db436d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_d6e46eff380d940b14ced1e6a7a7f5dcaaa2254b43e410a2f3d8f55c27bec42a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6e46eff380d940b14ced1e6a7a7f5dcaaa2254b43e410a2f3d8f55c27bec42a->enter($__internal_d6e46eff380d940b14ced1e6a7a7f5dcaaa2254b43e410a2f3d8f55c27bec42a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_cb6a92c89be4d4fb23889070b9757a17f8fd1fb17e76c1ff94cbd1bd2db436d1->leave($__internal_cb6a92c89be4d4fb23889070b9757a17f8fd1fb17e76c1ff94cbd1bd2db436d1_prof);

        
        $__internal_d6e46eff380d940b14ced1e6a7a7f5dcaaa2254b43e410a2f3d8f55c27bec42a->leave($__internal_d6e46eff380d940b14ced1e6a7a7f5dcaaa2254b43e410a2f3d8f55c27bec42a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
