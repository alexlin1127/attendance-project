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
class __TwigTemplate_f6c414831c01830f6d985de9cf9f6e2f extends Template
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
            <h4 class=\"list-group-item active text-center bg-info\">功能選單</h4>
            <a
                href=\"att_list.php\"
                class=\"list-group-item list-group-item-action text-center fw-bold fs-5\">
                出缺席記錄查詢
            </a>
            <a
                href=\"bk-product.php?mode=viewcart\"
                class=\"list-group-item list-group-item-action text-center fw-bold fs-5 border-bottom\">
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
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"col-md-2\">
    <div class=\"row row-cols-1\">
        <div class=\"list-group list-group-flush\">
            <h4 class=\"list-group-item active text-center bg-info\">功能選單</h4>
            <a
                href=\"att_list.php\"
                class=\"list-group-item list-group-item-action text-center fw-bold fs-5\">
                出缺席記錄查詢
            </a>
            <a
                href=\"bk-product.php?mode=viewcart\"
                class=\"list-group-item list-group-item-action text-center fw-bold fs-5 border-bottom\">
                匯出報表
            </a>
        </div>
    </div>
</div>", "partial/backend/menu.html.twig", "C:\\xampp\\htdocs\\attendance-project\\templates\\partial\\backend\\menu.html.twig");
    }
}
