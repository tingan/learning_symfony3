<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_8b0dfa96f705da7d3771f97a8e6a8c875904ac1652d04abff2de72a96d080285 extends Twig_Template
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
        $__internal_3a122f522b47e92292b3331678f3ce6bee7501800f12171918a29eb321be1a9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a122f522b47e92292b3331678f3ce6bee7501800f12171918a29eb321be1a9a->enter($__internal_3a122f522b47e92292b3331678f3ce6bee7501800f12171918a29eb321be1a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_3cb6f18349d7fdc0b26dc5d534b9c9ec8066780b8851465dc7977789204fcc3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cb6f18349d7fdc0b26dc5d534b9c9ec8066780b8851465dc7977789204fcc3f->enter($__internal_3cb6f18349d7fdc0b26dc5d534b9c9ec8066780b8851465dc7977789204fcc3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_3a122f522b47e92292b3331678f3ce6bee7501800f12171918a29eb321be1a9a->leave($__internal_3a122f522b47e92292b3331678f3ce6bee7501800f12171918a29eb321be1a9a_prof);

        
        $__internal_3cb6f18349d7fdc0b26dc5d534b9c9ec8066780b8851465dc7977789204fcc3f->leave($__internal_3cb6f18349d7fdc0b26dc5d534b9c9ec8066780b8851465dc7977789204fcc3f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
