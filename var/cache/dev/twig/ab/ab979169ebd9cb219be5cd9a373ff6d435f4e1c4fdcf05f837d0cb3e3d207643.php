<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_4092ab24576d2005b2da5f139a83a3b15c964c3deb18d0856a97c6d8e9c1df12 extends Twig_Template
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
        $__internal_8c9d66231d6a7f88d0cb6dedd1899fd67704c11caffd78621934b24ef8e276aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c9d66231d6a7f88d0cb6dedd1899fd67704c11caffd78621934b24ef8e276aa->enter($__internal_8c9d66231d6a7f88d0cb6dedd1899fd67704c11caffd78621934b24ef8e276aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_2a239490efcb3a01879464bca32dd46d02fcda7cbd7b04e0f3622d3aa4c9360a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a239490efcb3a01879464bca32dd46d02fcda7cbd7b04e0f3622d3aa4c9360a->enter($__internal_2a239490efcb3a01879464bca32dd46d02fcda7cbd7b04e0f3622d3aa4c9360a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8c9d66231d6a7f88d0cb6dedd1899fd67704c11caffd78621934b24ef8e276aa->leave($__internal_8c9d66231d6a7f88d0cb6dedd1899fd67704c11caffd78621934b24ef8e276aa_prof);

        
        $__internal_2a239490efcb3a01879464bca32dd46d02fcda7cbd7b04e0f3622d3aa4c9360a->leave($__internal_2a239490efcb3a01879464bca32dd46d02fcda7cbd7b04e0f3622d3aa4c9360a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
