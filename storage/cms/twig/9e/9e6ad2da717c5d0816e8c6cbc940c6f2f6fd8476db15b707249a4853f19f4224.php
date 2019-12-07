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

/* /home/kominfo/www/simantap/themes/rainlab-vanilla/partials/blog/categories.htm */
class __TwigTemplate_8122754b47780c87a8f68ab4f3d1dcda28a2526d770656a4ab9eb13903d3672b extends \Twig\Template
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
        $context["categories"] = twig_get_attribute($this->env, $this->source, ($context["blogCategories"] ?? null), "categories", [], "any", false, false, false, 1);
        // line 2
        $context["currentCategorySlug"] = twig_get_attribute($this->env, $this->source, ($context["blogCategories"] ?? null), "currentCategorySlug", [], "any", false, false, false, 2);
        // line 3
        echo "
<div class=\"list-group\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 6
            echo "        ";
            $context["postCount"] = twig_get_attribute($this->env, $this->source, $context["category"], "post_count", [], "any", false, false, false, 6);
            // line 7
            echo "        <a
            href=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, false, 8), "html", null, true);
            echo "\"
            class=\"list-group-item ";
            // line 9
            echo (((twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 9) == ($context["currentCategorySlug"] ?? null))) ? ("active") : (""));
            echo "\"
            >";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 10), "html", null, true);
            echo "
            ";
            // line 11
            if (($context["postCount"] ?? null)) {
                // line 12
                echo "                <span class=\"badge\">";
                echo twig_escape_filter($this->env, ($context["postCount"] ?? null), "html", null, true);
                echo "</span>
            ";
            }
            // line 14
            echo "        </a> 
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/home/kominfo/www/simantap/themes/rainlab-vanilla/partials/blog/categories.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 16,  75 => 14,  69 => 12,  67 => 11,  63 => 10,  59 => 9,  55 => 8,  52 => 7,  49 => 6,  45 => 5,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set categories = blogCategories.categories %}
{% set currentCategorySlug = blogCategories.currentCategorySlug %}

<div class=\"list-group\">
    {% for category in categories %}
        {% set postCount = category.post_count %}
        <a
            href=\"{{ category.url }}\"
            class=\"list-group-item {{ category.slug == currentCategorySlug ? 'active' }}\"
            >{{ category.name }}
            {% if postCount %}
                <span class=\"badge\">{{ postCount }}</span>
            {% endif %}
        </a> 
    {% endfor %}
</div>", "/home/kominfo/www/simantap/themes/rainlab-vanilla/partials/blog/categories.htm", "");
    }
}
