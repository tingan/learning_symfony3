<?php

/* base.html.twig */
class __TwigTemplate_26b0ef7d92f0714810dc3aabf7a17ea1dcb4fdf664c4e9ff8054ca9e71139470 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ca1047e4145e15860404af4f5b2e1acfb187d3d0d6db052d3c0a32d9d78237f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ca1047e4145e15860404af4f5b2e1acfb187d3d0d6db052d3c0a32d9d78237f->enter($__internal_3ca1047e4145e15860404af4f5b2e1acfb187d3d0d6db052d3c0a32d9d78237f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_84521eec229b933b819921a46023915fa544ea156df289fdfbaae8c5214f00eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84521eec229b933b819921a46023915fa544ea156df289fdfbaae8c5214f00eb->enter($__internal_84521eec229b933b819921a46023915fa544ea156df289fdfbaae8c5214f00eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/foundation.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/themes/default.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/themes/default.date.css"), "html", null, true);
        echo "\">
    </head>
    <body>

        <!-- Start Top Bar -->
    <div class=\"top-bar\">
      <div class=\"row\">
        <div class=\"top-bar-left\">
          <ul class=\"dropdown menu\" data-dropdown-menu>
            <li><a href=\"/\">Home</a></li>
            <li><a href=\"/clients\">Clients</a></li>
            <li><a href=\"/Reservations\">Reservations</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Top Bar -->

    <br>
    
    ";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "    

    <div class=\"row column\">
      <hr>
      <ul class=\"menu\">
        <li class=\"float-right\">Copyright 2017</li>
      </ul>
    </div>

    <script>
      \$(document).foundation();
    </script>

        ";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        // line 46
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/what-input.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/foundation.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/picker.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/picker.date.js"), "html", null, true);
        echo "\"></script>
        <script>
            \$('.datepicker').pickadate(
              { 
                format: 'yyyy-mm-dd',
                formatSubmit: 'yyyy-mm-dd' 
              }
              );
        </script>
    </body>
</html>
";
        
        $__internal_3ca1047e4145e15860404af4f5b2e1acfb187d3d0d6db052d3c0a32d9d78237f->leave($__internal_3ca1047e4145e15860404af4f5b2e1acfb187d3d0d6db052d3c0a32d9d78237f_prof);

        
        $__internal_84521eec229b933b819921a46023915fa544ea156df289fdfbaae8c5214f00eb->leave($__internal_84521eec229b933b819921a46023915fa544ea156df289fdfbaae8c5214f00eb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_695c86ccc466286a8d34b007786528c8abb09d1873311ee68e4ab9e4014b344b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_695c86ccc466286a8d34b007786528c8abb09d1873311ee68e4ab9e4014b344b->enter($__internal_695c86ccc466286a8d34b007786528c8abb09d1873311ee68e4ab9e4014b344b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_542eefcc7879d2244ccc575fb57d7482ee385cbfbec78a05b97cdcfb1bf0f76f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_542eefcc7879d2244ccc575fb57d7482ee385cbfbec78a05b97cdcfb1bf0f76f->enter($__internal_542eefcc7879d2244ccc575fb57d7482ee385cbfbec78a05b97cdcfb1bf0f76f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Landon Hotel App";
        
        $__internal_542eefcc7879d2244ccc575fb57d7482ee385cbfbec78a05b97cdcfb1bf0f76f->leave($__internal_542eefcc7879d2244ccc575fb57d7482ee385cbfbec78a05b97cdcfb1bf0f76f_prof);

        
        $__internal_695c86ccc466286a8d34b007786528c8abb09d1873311ee68e4ab9e4014b344b->leave($__internal_695c86ccc466286a8d34b007786528c8abb09d1873311ee68e4ab9e4014b344b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_15f34c1819310b4028f0c677f2a1fff5dbbbaf9cee82f9c9d3272a72c2a1965a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15f34c1819310b4028f0c677f2a1fff5dbbbaf9cee82f9c9d3272a72c2a1965a->enter($__internal_15f34c1819310b4028f0c677f2a1fff5dbbbaf9cee82f9c9d3272a72c2a1965a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_96f8399cbdfc1cdfa0ce96be49f5bf9a72406eba4485577ed0e28cee74f116a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96f8399cbdfc1cdfa0ce96be49f5bf9a72406eba4485577ed0e28cee74f116a4->enter($__internal_96f8399cbdfc1cdfa0ce96be49f5bf9a72406eba4485577ed0e28cee74f116a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_96f8399cbdfc1cdfa0ce96be49f5bf9a72406eba4485577ed0e28cee74f116a4->leave($__internal_96f8399cbdfc1cdfa0ce96be49f5bf9a72406eba4485577ed0e28cee74f116a4_prof);

        
        $__internal_15f34c1819310b4028f0c677f2a1fff5dbbbaf9cee82f9c9d3272a72c2a1965a->leave($__internal_15f34c1819310b4028f0c677f2a1fff5dbbbaf9cee82f9c9d3272a72c2a1965a_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_e766c63ba27f41d33588099d3a7e75f779bdf14781691091db4518ca3fd1f8da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e766c63ba27f41d33588099d3a7e75f779bdf14781691091db4518ca3fd1f8da->enter($__internal_e766c63ba27f41d33588099d3a7e75f779bdf14781691091db4518ca3fd1f8da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6b614004e84723cd9c0c3e8209d808a5dc151b7388517dac3d748cbbc159ff7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b614004e84723cd9c0c3e8209d808a5dc151b7388517dac3d748cbbc159ff7e->enter($__internal_6b614004e84723cd9c0c3e8209d808a5dc151b7388517dac3d748cbbc159ff7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6b614004e84723cd9c0c3e8209d808a5dc151b7388517dac3d748cbbc159ff7e->leave($__internal_6b614004e84723cd9c0c3e8209d808a5dc151b7388517dac3d748cbbc159ff7e_prof);

        
        $__internal_e766c63ba27f41d33588099d3a7e75f779bdf14781691091db4518ca3fd1f8da->leave($__internal_e766c63ba27f41d33588099d3a7e75f779bdf14781691091db4518ca3fd1f8da_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bcc8c72aa77dd02a906cb8b716f1d64b7dc6905838f4e1fc554b43c27cb397f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcc8c72aa77dd02a906cb8b716f1d64b7dc6905838f4e1fc554b43c27cb397f6->enter($__internal_bcc8c72aa77dd02a906cb8b716f1d64b7dc6905838f4e1fc554b43c27cb397f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5b7da83cb83459a1ec7faf11fb108c2753099689eaad92b1d117158dcf7f9ffe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b7da83cb83459a1ec7faf11fb108c2753099689eaad92b1d117158dcf7f9ffe->enter($__internal_5b7da83cb83459a1ec7faf11fb108c2753099689eaad92b1d117158dcf7f9ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5b7da83cb83459a1ec7faf11fb108c2753099689eaad92b1d117158dcf7f9ffe->leave($__internal_5b7da83cb83459a1ec7faf11fb108c2753099689eaad92b1d117158dcf7f9ffe_prof);

        
        $__internal_bcc8c72aa77dd02a906cb8b716f1d64b7dc6905838f4e1fc554b43c27cb397f6->leave($__internal_bcc8c72aa77dd02a906cb8b716f1d64b7dc6905838f4e1fc554b43c27cb397f6_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 45,  178 => 31,  161 => 6,  143 => 5,  121 => 51,  117 => 50,  113 => 49,  109 => 48,  105 => 47,  100 => 46,  98 => 45,  83 => 32,  81 => 31,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Landon Hotel App{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('css/foundation.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/app.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('pickadate/lib/themes/default.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('pickadate/lib/themes/default.date.css') }}\">
    </head>
    <body>

        <!-- Start Top Bar -->
    <div class=\"top-bar\">
      <div class=\"row\">
        <div class=\"top-bar-left\">
          <ul class=\"dropdown menu\" data-dropdown-menu>
            <li><a href=\"/\">Home</a></li>
            <li><a href=\"/clients\">Clients</a></li>
            <li><a href=\"/Reservations\">Reservations</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Top Bar -->

    <br>
    
    {% block body %}{% endblock %}
    

    <div class=\"row column\">
      <hr>
      <ul class=\"menu\">
        <li class=\"float-right\">Copyright 2017</li>
      </ul>
    </div>

    <script>
      \$(document).foundation();
    </script>

        {% block javascripts %}{% endblock %}
        <script src=\"{{ asset('js/vendor/jquery.js') }}\"></script>
        <script src=\"{{ asset('js/vendor/what-input.js') }}\"></script>
        <script src=\"{{ asset('js/vendor/foundation.js') }}\"></script>
        <script src=\"{{ asset('js/app.js') }}\"></script>
        <script src=\"{{ asset('pickadate/lib/picker.js') }}\"></script>
        <script src=\"{{ asset('pickadate/lib/picker.date.js') }}\"></script>
        <script>
            \$('.datepicker').pickadate(
              { 
                format: 'yyyy-mm-dd',
                formatSubmit: 'yyyy-mm-dd' 
              }
              );
        </script>
    </body>
</html>
", "base.html.twig", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/app/Resources/views/base.html.twig");
    }
}
