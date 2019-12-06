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

/* /home/kominfo/www/simantap/themes/rainlab-vanilla/pages/home.htm */
class __TwigTemplate_a6cec59b15bde102350c7683942a1978eb7edc3f0d3444365fd94b03c7ac5f1b extends \Twig\Template
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
        echo "<div class=\"row\">
    <div class=\"col-sm-6 col-md-4\">
        <div class=\"thumbnail text-center\">
            <br />
            <img src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/eco-growth-plant.png");
        echo "\" alt=\"RainLab.User\" />
            <div class=\"caption\">
                <h3>Data Produksi</h3>
                <p>Informasi pengelolaan data hasil produksi pertanian di Kabupaten Berau.</p>
                <br />
                <p>
                    <a href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("data-produksi");
        echo "\" class=\"btn btn-lg btn-info\" role=\"button\">Lihat Data</a>
                </p>
            </div>
        </div>
    </div>

    <div class=\"col-sm-6 col-md-4\">
        <div class=\"thumbnail text-center\">
            <br />
            <img src=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/plugin-blog.png");
        echo "\" alt=\"RainLab.Blog\" />
            <div class=\"caption\">
                <h3>Blog articles</h3>
                <p>The user plugin <em>RainLab.Blog</em> provides robust authoring features.</p>
                <br />
                <p>
                    <a href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog");
        echo "\" class=\"btn btn-lg btn-success\" role=\"button\">View Blog</a>
                </p>
            </div>
        </div>
    </div>

    <div class=\"col-sm-6 col-md-4\">
        <div class=\"thumbnail text-center\">
            <br />
            <img src=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/plugin-forum.png");
        echo "\" alt=\"RainLab.Forum\" />
            <div class=\"caption\">
                <h3>Discussion forum</h3>
                <p>The forum plugin <em>RainLab.Forum</em> provides community discussion features.</p>
                <br />
                <p>
                    <a href=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("forum");
        echo "\" class=\"btn btn-lg btn-warning\" role=\"button\">View Forum</a>
                </p>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/kominfo/www/simantap/themes/rainlab-vanilla/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 41,  85 => 35,  73 => 26,  64 => 20,  52 => 11,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
    <div class=\"col-sm-6 col-md-4\">
        <div class=\"thumbnail text-center\">
            <br />
            <img src=\"{{ 'assets/images/eco-growth-plant.png'|theme }}\" alt=\"RainLab.User\" />
            <div class=\"caption\">
                <h3>Data Produksi</h3>
                <p>Informasi pengelolaan data hasil produksi pertanian di Kabupaten Berau.</p>
                <br />
                <p>
                    <a href=\"{{ 'data-produksi'|page }}\" class=\"btn btn-lg btn-info\" role=\"button\">Lihat Data</a>
                </p>
            </div>
        </div>
    </div>

    <div class=\"col-sm-6 col-md-4\">
        <div class=\"thumbnail text-center\">
            <br />
            <img src=\"{{ 'assets/images/plugin-blog.png'|theme }}\" alt=\"RainLab.Blog\" />
            <div class=\"caption\">
                <h3>Blog articles</h3>
                <p>The user plugin <em>RainLab.Blog</em> provides robust authoring features.</p>
                <br />
                <p>
                    <a href=\"{{ 'blog'|page }}\" class=\"btn btn-lg btn-success\" role=\"button\">View Blog</a>
                </p>
            </div>
        </div>
    </div>

    <div class=\"col-sm-6 col-md-4\">
        <div class=\"thumbnail text-center\">
            <br />
            <img src=\"{{ 'assets/images/plugin-forum.png'|theme }}\" alt=\"RainLab.Forum\" />
            <div class=\"caption\">
                <h3>Discussion forum</h3>
                <p>The forum plugin <em>RainLab.Forum</em> provides community discussion features.</p>
                <br />
                <p>
                    <a href=\"{{ 'forum'|page }}\" class=\"btn btn-lg btn-warning\" role=\"button\">View Forum</a>
                </p>
            </div>
        </div>
    </div>
</div>", "/home/kominfo/www/simantap/themes/rainlab-vanilla/pages/home.htm", "");
    }
}
