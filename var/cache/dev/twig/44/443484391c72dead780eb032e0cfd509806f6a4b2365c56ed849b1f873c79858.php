<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_4d0f1bf1f42b9e7abfd8628cb3105928c42a46ffbd3388cb272512df246eecb5 extends Twig_Template
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
        $__internal_09993eec85c79d9ce29bda5b57d6f63086b80e985da3c0003090643fb1be8080 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09993eec85c79d9ce29bda5b57d6f63086b80e985da3c0003090643fb1be8080->enter($__internal_09993eec85c79d9ce29bda5b57d6f63086b80e985da3c0003090643fb1be8080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_266c6baf80b34e8c19f53fad929b94c2938e181a8e1b672af0a545d33e1825bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_266c6baf80b34e8c19f53fad929b94c2938e181a8e1b672af0a545d33e1825bb->enter($__internal_266c6baf80b34e8c19f53fad929b94c2938e181a8e1b672af0a545d33e1825bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_09993eec85c79d9ce29bda5b57d6f63086b80e985da3c0003090643fb1be8080->leave($__internal_09993eec85c79d9ce29bda5b57d6f63086b80e985da3c0003090643fb1be8080_prof);

        
        $__internal_266c6baf80b34e8c19f53fad929b94c2938e181a8e1b672af0a545d33e1825bb->leave($__internal_266c6baf80b34e8c19f53fad929b94c2938e181a8e1b672af0a545d33e1825bb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
