<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_a1dff83d83259d87f1c8c0b8f9c59407decdcd0259abc32fed362cebda1ebb3b extends Twig_Template
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
        $__internal_a41241a4943e5e77b9752a41445eb52c5f6a257866d84df7b78fa553bc0580f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a41241a4943e5e77b9752a41445eb52c5f6a257866d84df7b78fa553bc0580f9->enter($__internal_a41241a4943e5e77b9752a41445eb52c5f6a257866d84df7b78fa553bc0580f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_c23a7a8fc7631bad1270906c5266b1f71d2f8c82fd5d6318085a2b7ef8c135f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c23a7a8fc7631bad1270906c5266b1f71d2f8c82fd5d6318085a2b7ef8c135f2->enter($__internal_c23a7a8fc7631bad1270906c5266b1f71d2f8c82fd5d6318085a2b7ef8c135f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_a41241a4943e5e77b9752a41445eb52c5f6a257866d84df7b78fa553bc0580f9->leave($__internal_a41241a4943e5e77b9752a41445eb52c5f6a257866d84df7b78fa553bc0580f9_prof);

        
        $__internal_c23a7a8fc7631bad1270906c5266b1f71d2f8c82fd5d6318085a2b7ef8c135f2->leave($__internal_c23a7a8fc7631bad1270906c5266b1f71d2f8c82fd5d6318085a2b7ef8c135f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
