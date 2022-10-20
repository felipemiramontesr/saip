<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/tema_saip_v0/user.html.twig */
class __TwigTemplate_306c7fc293968c551be0aa4856342ebf599554f44552532a0a3fb2c25c1291c8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 2];
        $filters = ["escape" => 1];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<article";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">
  ";
        // line 2
        if (($context["content"] ?? null)) {
            // line 3
            echo "    <div class=\"portada_fotografia_perfil\">
\t<div class=\"portada\">
\t\t";
            // line 5
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_portada_de_usuario", [])), "html", null, true);
            echo "
\t\t<div class=\"escudo\">
\t\t\t";
            // line 7
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_escudo_de_usuario", [])), "html", null, true);
            echo "
\t\t</div>
\t\t<div class=\"fotografia_civil\">
\t\t\t";
            // line 10
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_fotografia_civil", [])), "html", null, true);
            echo "
\t\t</div>
\t\t<div class=\"nombre_completo_de_usuario\">
\t\t\t";
            // line 13
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_nombre_completo", [])), "html", null, true);
            echo "
\t\t</div>
\t\t<div class=\"nombramiento\">
\t\t\t";
            // line 16
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_nombramiento", [])), "html", null, true);
            echo "
\t\t</div>
\t\t<div class=\"contacto\">
\t\t\t<div class=\"correo_electronico\">
\t\t\t\t\t";
            // line 20
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_correo_electronico", [])), "html", null, true);
            echo "
\t\t\t</div>
\t\t\t<div class=\"telefono\">
\t\t\t\t\t";
            // line 23
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_telefono", [])), "html", null, true);
            echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"pic\">
\t\t\t";
            // line 27
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "user_picture", [])), "html", null, true);
            echo "
\t\t</div>
\t</div>
</div>
  ";
        }
        // line 32
        echo "</article>



";
    }

    public function getTemplateName()
    {
        return "themes/tema_saip_v0/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 32,  109 => 27,  102 => 23,  96 => 20,  89 => 16,  83 => 13,  77 => 10,  71 => 7,  66 => 5,  62 => 3,  60 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/tema_saip_v0/user.html.twig", "/home/cb3hqzsg2813/public_html/tlaltenango/themes/tema_saip_v0/user.html.twig");
    }
}
