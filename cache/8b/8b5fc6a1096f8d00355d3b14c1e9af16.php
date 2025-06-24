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

/* partial/backend/menu.html.twig */
class __TwigTemplate_59451511a728b13544471f8576f3a5cf extends Template
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
        yield "<div class=\"col-md-2\">
    <div class=\"row row-cols-1\">
        <div class=\"list-group list-group-flush\">
            <h4 class=\"list-group-item active bg-info\">功能選單</h4>
            <a
                href=\"att_list.php\"
                class=\"list-group-item list-group-item-action text-start fw-bold fs-5\">
                出缺席記錄查詢
            </a>
            ";
        // line 10
        if ((($context["role"] ?? null) == "admin")) {
            // line 11
            yield "                <a href=\"switch.php?mode=add_user\" class=\"list-group-item list-group-item-action text-start fw-bold fs-5\">
                    新增使用者
                </a>
                <a href=\"switch.php?mode=acc_manage\" class=\"list-group-item list-group-item-action text-start fw-bold fs-5\">
                    帳號管理
                </a>
            ";
        }
        // line 18
        yield "            <a  
                href=\"att_list.php?";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["queryString"] ?? null), "html", null, true);
        yield "&download=1\"
                class=\"list-group-item list-group-item-action text-start fw-bold fs-5 border-bottom\">
                匯出報表
            </a>
        </div>
    </div>
</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partial/backend/menu.html.twig";
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
        return array (  67 => 19,  64 => 18,  55 => 11,  53 => 10,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"col-md-2\">
    <div class=\"row row-cols-1\">
        <div class=\"list-group list-group-flush\">
            <h4 class=\"list-group-item active bg-info\">功能選單</h4>
            <a
                href=\"att_list.php\"
                class=\"list-group-item list-group-item-action text-start fw-bold fs-5\">
                出缺席記錄查詢
            </a>
            {% if role == 'admin' %}
                <a href=\"switch.php?mode=add_user\" class=\"list-group-item list-group-item-action text-start fw-bold fs-5\">
                    新增使用者
                </a>
                <a href=\"switch.php?mode=acc_manage\" class=\"list-group-item list-group-item-action text-start fw-bold fs-5\">
                    帳號管理
                </a>
            {% endif %}
            <a  
                href=\"att_list.php?{{ queryString }}&download=1\"
                class=\"list-group-item list-group-item-action text-start fw-bold fs-5 border-bottom\">
                匯出報表
            </a>
        </div>
    </div>
</div>", "partial/backend/menu.html.twig", "C:\\xampp\\htdocs\\attendance-project\\templates\\partial\\backend\\menu.html.twig");
    }
}
