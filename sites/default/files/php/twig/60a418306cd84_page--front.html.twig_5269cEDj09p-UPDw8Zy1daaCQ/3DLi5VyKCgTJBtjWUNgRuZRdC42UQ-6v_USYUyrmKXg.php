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

/* themes/tema_saip_v0/page--front.html.twig */
class __TwigTemplate_d64947c7b915ffb3bfe8fbc1b5d2b00e0f8aa6cafcc3178dd95c0822ef8a3642 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 2];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
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
        echo "<div class=\"contenedor_de_region_cabecera\">
  ";
        // line 2
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "cabecera", [])), "html", null, true);
        echo "
</div>
<div class=\"contenedor_de_region_cabecera_movil\">
  ";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "cabecera_movil", [])), "html", null, true);
        echo "
</div>
<div class=\"contenedor_de_region_mapa_principal\">
  ";
        // line 8
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "mapa_principal", [])), "html", null, true);
        echo "
  <div class=\"contenedor_de_region_fotografia_de_perfil\">
  \t\t";
        // line 10
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "fotografia_de_perfil", [])), "html", null, true);
        echo "
\t</div>
</div>
<div class=\"contenedor_de_region_marca_del_sitio\">
  ";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "marca_del_sitio", [])), "html", null, true);
        echo "
</div>
<div class=\"contenedor_de_region_totales_financieros\">
      ";
        // line 17
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "totales_financieros", [])), "html", null, true);
        echo "
</div>
<div class=\"contenedor_de_region_menu_principal\">
  ";
        // line 20
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "menu_principal", [])), "html", null, true);
        echo "
</div>
<div class=\"contenedor_de_region_contenido\">
\t<div class=\"region_barra_lateral_izquierda\">
\t\t";
        // line 24
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "barra_lateral_izquierda", [])), "html", null, true);
        echo "
\t</div>
\t<div class=\"region_contenido\">
\t\t";
        // line 27
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
\t</div>
\t<div class=\"region_barra_lateral_derecha\">
\t\t";
        // line 30
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "barra_lateral_derecha", [])), "html", null, true);
        echo "
\t</div>
</div>
<div class=\"contenedor_de_region_de_pie_de_pagina\">
  ";
        // line 34
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "pie_de_pagina", [])), "html", null, true);
        echo "
  <div class=\"sub_pie_de_pagina\">
  \t<p> © Sistema de Administración de Informacíón Pública</p>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/tema_saip_v0/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 34,  113 => 30,  107 => 27,  101 => 24,  94 => 20,  88 => 17,  82 => 14,  75 => 10,  70 => 8,  64 => 5,  58 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/tema_saip_v0/page--front.html.twig", "/home/cb3hqzsg2813/public_html/tlaltenango/themes/tema_saip_v0/page--front.html.twig");
    }
}
