<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_1cb534632e1c9d6ec1399ddc7a72a118f72793a5fedb2f37772df35e1cf1cf02 extends Twig_Template
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
        $__internal_7ea1bc426f726bc6581b95feff4f560fcfcd65746e79f0a7e49cdd03074b85cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ea1bc426f726bc6581b95feff4f560fcfcd65746e79f0a7e49cdd03074b85cd->enter($__internal_7ea1bc426f726bc6581b95feff4f560fcfcd65746e79f0a7e49cdd03074b85cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_ba03e1619d9d89c3da0e846360b23b32e4ff351bfd4a6c5a563bfe936aeedb95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba03e1619d9d89c3da0e846360b23b32e4ff351bfd4a6c5a563bfe936aeedb95->enter($__internal_ba03e1619d9d89c3da0e846360b23b32e4ff351bfd4a6c5a563bfe936aeedb95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_7ea1bc426f726bc6581b95feff4f560fcfcd65746e79f0a7e49cdd03074b85cd->leave($__internal_7ea1bc426f726bc6581b95feff4f560fcfcd65746e79f0a7e49cdd03074b85cd_prof);

        
        $__internal_ba03e1619d9d89c3da0e846360b23b32e4ff351bfd4a6c5a563bfe936aeedb95->leave($__internal_ba03e1619d9d89c3da0e846360b23b32e4ff351bfd4a6c5a563bfe936aeedb95_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
