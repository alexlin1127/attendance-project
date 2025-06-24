<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* partial/nav.inc.twig */
class __TwigTemplate_3bfa4b514d3144ecc750c391af5df571 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
\t<div class=\"container-fluid\">
\t\t<!-- 後台標題 -->
\t\t<a class=\"navbar-brand ms-1 fw-bold fs-4\" style=\"letter-spacing: 4px;\"><i class=\"bi bi-arrow-bar-right\"></i>出缺勤系統後台</a>
\t\t<!-- 漢堡選單按鈕 (小螢幕顯示) -->
\t\t<button
\t\t\tclass=\"navbar-toggler\"
\t\t\ttype=\"button\"
\t\t\tdata-bs-toggle=\"collapse\"
\t\t\tdata-bs-target=\"#navbarNav\"
\t\t\taria-controls=\"navbarNav\"
\t\t\taria-expanded=\"false\"
\t\t\taria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>

\t\t<div class=\"blank\"></div>
\t\t<!-- 導航菜單內容 -->
\t\t<div class=\"collapse navbar-collapse justify-content-end me-3\" id=\"navbarNav\">
\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t";
        // line 21
        if (((($context["role"] ?? null) == "admin") || (($context["role"] ?? null) == "adv-user"))) {
            // line 22
            yield "\t\t\t\t<li class=\"nav-item me-lg-2\">
\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"dashboard.php\">首頁</a>
\t\t\t\t</li>
\t\t\t\t";
        }
        // line 26
        yield "\t\t\t\t<li class=\"nav-item me-lg-2\">
\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\"><i class=\"bi bi-person-circle\"></i>  ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["username"] ?? null), "html", null, true);
        yield "</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item text-end\">
\t\t\t\t\t<a class=\"btn btn-outline-warning\" aria-current=\"page\" href=\"logout.php\">登出</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
</nav>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partial/nav.inc.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  75 => 27,  72 => 26,  66 => 22,  64 => 21,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
\t<div class=\"container-fluid\">
\t\t<!-- 後台標題 -->
\t\t<a class=\"navbar-brand ms-1 fw-bold fs-4\" style=\"letter-spacing: 4px;\"><i class=\"bi bi-arrow-bar-right\"></i>出缺勤系統後台</a>
\t\t<!-- 漢堡選單按鈕 (小螢幕顯示) -->
\t\t<button
\t\t\tclass=\"navbar-toggler\"
\t\t\ttype=\"button\"
\t\t\tdata-bs-toggle=\"collapse\"
\t\t\tdata-bs-target=\"#navbarNav\"
\t\t\taria-controls=\"navbarNav\"
\t\t\taria-expanded=\"false\"
\t\t\taria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>

\t\t<div class=\"blank\"></div>
\t\t<!-- 導航菜單內容 -->
\t\t<div class=\"collapse navbar-collapse justify-content-end me-3\" id=\"navbarNav\">
\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t{% if role == 'admin' or role == 'adv-user' %}
\t\t\t\t<li class=\"nav-item me-lg-2\">
\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"dashboard.php\">首頁</a>
\t\t\t\t</li>
\t\t\t\t{% endif %}
\t\t\t\t<li class=\"nav-item me-lg-2\">
\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\"><i class=\"bi bi-person-circle\"></i>  {{username}}</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item text-end\">
\t\t\t\t\t<a class=\"btn btn-outline-warning\" aria-current=\"page\" href=\"logout.php\">登出</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
</nav>
", "partial/nav.inc.twig", "C:\\xampp\\htdocs\\attendance-project\\templates\\partial\\nav.inc.twig");
    }
}
