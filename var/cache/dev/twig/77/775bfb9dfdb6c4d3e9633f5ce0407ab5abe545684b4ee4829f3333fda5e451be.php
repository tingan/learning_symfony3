<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_fd8efabd037ab8d8d98fdf846213a6d68c3a974becaa59608120c1fc6a72f575 extends Twig_Template
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
        $__internal_7a32b14c07106cf0129200bc10297d7fa8d4562e883977c10e96e782bea17dc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a32b14c07106cf0129200bc10297d7fa8d4562e883977c10e96e782bea17dc7->enter($__internal_7a32b14c07106cf0129200bc10297d7fa8d4562e883977c10e96e782bea17dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_7efb7cd5963be5879484c4bf332686177325add299e7f436809324c0ec4210cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7efb7cd5963be5879484c4bf332686177325add299e7f436809324c0ec4210cd->enter($__internal_7efb7cd5963be5879484c4bf332686177325add299e7f436809324c0ec4210cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_7a32b14c07106cf0129200bc10297d7fa8d4562e883977c10e96e782bea17dc7->leave($__internal_7a32b14c07106cf0129200bc10297d7fa8d4562e883977c10e96e782bea17dc7_prof);

        
        $__internal_7efb7cd5963be5879484c4bf332686177325add299e7f436809324c0ec4210cd->leave($__internal_7efb7cd5963be5879484c4bf332686177325add299e7f436809324c0ec4210cd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
