<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /home/kominfo/www/simantap/plugins/simantap/produksi/components/formdataproduksi/default.htm */
class __TwigTemplate_7a327e4c053d7a8ecad84762d1a5ba53defd67c28bce7aaa1f4b460c92d6d260 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["master_produksi"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "master_produksi", [], "any", false, false, false, 1);
        // line 2
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["master_produksi"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["master"]) {
            // line 4
            echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["master"], "indikator", [], "any", false, false, false, 6), "nm_indikator", [], "any", false, false, false, 6), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["master"], "tahun", [], "any", false, false, false, 6), "html", null, true);
            echo "</h3>
        </div>        
        <div class=\"panel-body\"></div>
            ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["master"], "komoditas", [], "any", false, false, false, 9));
            foreach ($context['_seq'] as $context["_key"] => $context["komoditas_produksi"]) {
                // line 10
                echo "            <div class=\"list-group\">
                <a href=\"/data-produksi/kecamatan/";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["komoditas_produksi"], "id", [], "any", false, false, false, 11), "html", null, true);
                echo "\" class=\"list-group-item\">
                    <span class=\"badge\">14&nbsp;";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["master"], "indikator", [], "any", false, false, false, 12), "satuan", [], "any", false, false, false, 12), "html", null, true);
                echo "</span>
                    ";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["komoditas_produksi"], "komoditas", [], "any", false, false, false, 13), "nm_komoditi", [], "any", false, false, false, 13), "html", null, true);
                echo "
                </a>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['komoditas_produksi'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['master'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 22
        echo "    <script type=\"text/javascript\">
        \$('#kategori').select2();
    </script>
";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/home/kominfo/www/simantap/plugins/simantap/produksi/components/formdataproduksi/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 21,  96 => 22,  94 => 21,  91 => 20,  83 => 17,  73 => 13,  69 => 12,  65 => 11,  62 => 10,  58 => 9,  50 => 6,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set master_produksi = __SELF__.master_produksi %}

{% for master in master_produksi %}
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">{{ master.indikator.nm_indikator }}&nbsp;{{ master.tahun }}</h3>
        </div>        
        <div class=\"panel-body\"></div>
            {% for komoditas_produksi in master.komoditas %}
            <div class=\"list-group\">
                <a href=\"/data-produksi/kecamatan/{{ komoditas_produksi.id }}\" class=\"list-group-item\">
                    <span class=\"badge\">14&nbsp;{{ master.indikator.satuan }}</span>
                    {{ komoditas_produksi.komoditas.nm_komoditi }}
                </a>
            </div>
            {% endfor %}
        </div>
    </div>
{% endfor %}

{% put scripts %}
    <script type=\"text/javascript\">
        \$('#kategori').select2();
    </script>
{% endput %}", "/home/kominfo/www/simantap/plugins/simantap/produksi/components/formdataproduksi/default.htm", "");
    }
}
