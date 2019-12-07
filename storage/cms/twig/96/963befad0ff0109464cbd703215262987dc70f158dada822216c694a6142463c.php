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

/* /home/kominfo/www/simantap/themes/rainlab-vanilla/pages/data-produksi/kecamatan.htm */
class __TwigTemplate_756afc3a57dbc745e12e5521b97e548dfb06247b8ebf4efd2c8d3d76f9d70715 extends \Twig\Template
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
        echo "<ol class=\"breadcrumb\">
    <li><a href=\"";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Beranda</a></li>
    <li><a href=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("data-produksi/master");
        echo "\">Data Produksi</a></li>
    <li class=\"active\">Komoditas</li>
</ol>

<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">Komoditas ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["komoditas_produksi"] ?? null), "komoditas", [], "any", false, false, false, 9), "nm_komoditi", [], "any", false, false, false, 9), "html", null, true);
        echo "</h3>
    </div>        
    <div class=\"panel-body\"></div>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["komoditas_produksi"] ?? null), "kecamatan_produksi", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["kecamatan"]) {
            // line 13
            echo "        <div class=\"list-group\">
            <a href=\"/data-produksi/kecamatan/";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["komoditas_produksi"] ?? null), "id", [], "any", false, false, false, 14), "html", null, true);
            echo "\" class=\"list-group-item\">
                <span class=\"badge\">14&nbsp;";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["komoditas_produksi"] ?? null), "master", [], "any", false, false, false, 15), "indikator", [], "any", false, false, false, 15), "satuan", [], "any", false, false, false, 15), "html", null, true);
            echo "</span>
                ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["kecamatan"], "kecamatan", [], "any", false, false, false, 16), "name", [], "any", false, false, false, 16), "html", null, true);
            echo "
            </a>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kecamatan'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/kominfo/www/simantap/themes/rainlab-vanilla/pages/data-produksi/kecamatan.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 20,  74 => 16,  70 => 15,  66 => 14,  63 => 13,  59 => 12,  53 => 9,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ol class=\"breadcrumb\">
    <li><a href=\"{{ 'home'|page }}\">Beranda</a></li>
    <li><a href=\"{{ 'data-produksi/master'|page }}\">Data Produksi</a></li>
    <li class=\"active\">Komoditas</li>
</ol>

<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">Komoditas {{ komoditas_produksi.komoditas.nm_komoditi }}</h3>
    </div>        
    <div class=\"panel-body\"></div>
        {% for kecamatan in komoditas_produksi.kecamatan_produksi %}
        <div class=\"list-group\">
            <a href=\"/data-produksi/kecamatan/{{ komoditas_produksi.id }}\" class=\"list-group-item\">
                <span class=\"badge\">14&nbsp;{{ komoditas_produksi.master.indikator.satuan }}</span>
                {{ kecamatan.kecamatan.name }}
            </a>
        </div>
        {% endfor %}
    </div>
</div>", "/home/kominfo/www/simantap/themes/rainlab-vanilla/pages/data-produksi/kecamatan.htm", "");
    }
}
