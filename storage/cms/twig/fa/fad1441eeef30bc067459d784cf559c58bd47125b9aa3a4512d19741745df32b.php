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

/* /home/kominfo/www/simantap/plugins/simantap/produksi/components/entryform/default.htm */
class __TwigTemplate_9bd831874ad7ddb42028e910175e8308fb5f6ce1c4703d39881be04c26434bf0 extends \Twig\Template
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
        echo "<h2>Test</h2>
";
        // line 2
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "formRender", [], "method", false, false, false, 2);
    }

    public function getTemplateName()
    {
        return "/home/kominfo/www/simantap/plugins/simantap/produksi/components/entryform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2>Test</h2>
{{ form.formRender()|raw }}", "/home/kominfo/www/simantap/plugins/simantap/produksi/components/entryform/default.htm", "");
    }
}
