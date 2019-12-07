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

/* /home/kominfo/www/simantap/themes/rainlab-vanilla/pages/blog/post.htm */
class __TwigTemplate_4ec3841228d87c9869ed73877b53db7bad5a1afa57045aa3d475c42aa0bf3e21 extends \Twig\Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("blogPost"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        echo "
<hr />
<h4>Comments</h4>
";
        // line 5
        if (($context["user"] ?? null)) {
            // line 6
            echo "    ";
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("forumEmbedTopic"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
        } else {
            // line 8
            echo "    <p>Please <a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("account");
            echo "\">sign in</a> to comment!</p>
";
        }
        // line 10
        echo "
";
        // line 11
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("entryForm"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "/home/kominfo/www/simantap/themes/rainlab-vanilla/pages/blog/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 11,  60 => 10,  54 => 8,  48 => 6,  46 => 5,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% component 'blogPost' %}

<hr />
<h4>Comments</h4>
{% if user %}
    {% component 'forumEmbedTopic' %}
{% else %}
    <p>Please <a href=\"{{ 'account'|page }}\">sign in</a> to comment!</p>
{% endif %}

{% component 'entryForm' %}", "/home/kominfo/www/simantap/themes/rainlab-vanilla/pages/blog/post.htm", "");
    }
}
