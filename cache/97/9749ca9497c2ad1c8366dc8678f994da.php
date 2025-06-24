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

/* partial/backend/add_data.html.twig */
class __TwigTemplate_ede4896828a8d0d85ec21ce33ba2c9c5 extends Template
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

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "dashboard.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("dashboard.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        if ((($context["flag"] ?? null) == false)) {
            // line 5
            yield "    <div class=\"row row-cols-md-1\">
        <div class=\"col\">
            <div class=\"alert ";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["alert_type"] ?? null), "html", null, true);
            yield " alert-dismissible fade show\" role=\"alert\">
                <div>";
            // line 8
            yield ($context["message"] ?? null);
            yield "</div>
                <a type=\"button\" href=\"#\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></a>
            </div>
        </div>
    </div>

    <a href='att_list.php' class=\"btn btn-light\">回到學員資料</a>
";
        }
        // line 16
        yield "
<div class=\"row row-cols-md-1\">
    <div class=\"col\">
        <h2 class=\"text-center my-4 fw-bold\">新增學員出缺勤紀錄</h2>
        <div class=\"card\">
            <div class=\"card-body\">
                <form method=\"post\" action=\"switch.php?mode=add_stdata\" enctype=\"multipart/form-data\">
                    <div class=\"m-3\">
                        <label class=\"fw-bold fs-6 mb-1\">姓名</label>
                        <input type=\"text\" class=\"form-control\" name=\"pname\" value=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["result"] ?? null), "name", [], "any", false, false, false, 25), "html", null, true);
        yield "\" placeholder=\"請輸入學員英文名\" required>
                    </div>
                    <div class=\"m-3\">
                        <label class=\"fw-bold fs-6 mb-1\">日期</label>
                        <input type=\"text\" class=\"form-control\" name=\"pdate\" value=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["result"] ?? null), "class_date", [], "any", false, false, false, 29), "html", null, true);
        yield "\" placeholder=\"日期格式範例:2025-04-14\" required>
                    </div>
                    <div class=\"m-3\">
                        <label class=\"fw-bold fs-6 mb-1\">當日總課程時數（請輸入數字）</label>
                        <input type=\"number\" class=\"form-control\" name=\"pclass\" value=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["result"] ?? null), "attended_hours", [], "any", false, false, false, 33), "html", null, true);
        yield "\" min=\"3\" max=\"7\" required>
                    </div>
                    <div class=\"m-3\">
                        <label class=\"fw-bold fs-6 mb-1\">出席時數（請輸入數字）</label>
                        <input type=\"number\" class=\"form-control\" name=\"patt\" value=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["result"] ?? null), "attended_hours", [], "any", false, false, false, 37), "html", null, true);
        yield "\" min=\"0\" max=\"7\" required>
                    </div>
                    <div class=\"m-3\">
                        <label class=\"fw-bold fs-6 mb-1\">遲到時數（請輸入數字）</label>
                        <input type=\"number\" class=\"form-control\" name=\"plate\" value=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["result"] ?? null), "late_hours", [], "any", false, false, false, 41), "html", null, true);
        yield "\" min=\"0\" max=\"1\" required>
                    </div>
                    <div class=\"m-3\">
                        <label class=\"fw-bold fs-6 mb-1\">早退時數（請輸入數字）</label>
                        <input type=\"number\" class=\"form-control\" name=\"pleave\" value=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["result"] ?? null), "leave_early_hours", [], "any", false, false, false, 45), "html", null, true);
        yield "\" min=\"0\" max=\"1\" required>
                    </div>
                    <div class=\"m-3\">
                        <label class=\"fw-bold fs-6 mb-1\">缺席時數（請輸入數字）</label>
                        <input type=\"number\" class=\"form-control\" name=\"pabs\" value=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["result"] ?? null), "absent_hours", [], "any", false, false, false, 49), "html", null, true);
        yield "\" min=\"0\" max=\"7\" required>
                    </div>
                    <button type=\"submit\" class=\"btn btn-success m-3\">新增</button>
                </form>
            </div>
        </div>
    </div>
</div>

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partial/backend/add_data.html.twig";
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
        return array (  132 => 49,  125 => 45,  118 => 41,  111 => 37,  104 => 33,  97 => 29,  90 => 25,  79 => 16,  68 => 8,  64 => 7,  60 => 5,  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard.html.twig' %}

{% block content %}
{% if flag == false %}
    <div class=\"row row-cols-md-1\">
        <div class=\"col\">
            <div class=\"alert {{alert_type}} alert-dismissible fade show\" role=\"alert\">
                <div>{{ message | raw }}</div>
                <a type=\"button\" href=\"#\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></a>
            </div>
        </div>
    </div>

    <a href='att_list.php' class=\"btn btn-light\">回到學員資料</a>
{% endif %}

<div class=\"row row-cols-md-1\">
    <div class=\"col\">
        <h2 class=\"text-center my-4 fw-bold\">新增學員出缺勤紀錄</h2>
        <div class=\"card\">
            <div class=\"card-body\">
                <form method=\"post\" action=\"switch.php?mode=add_stdata\" enctype=\"multipart/form-data\">
                    <div class=\"m-3\">
                        <label class=\"fw-bold fs-6 mb-1\">姓名</label>
                        <input type=\"text\" class=\"form-control\" name=\"pname\" value=\"{{result.name}}\" placeholder=\"請輸入學員英文名\" required>
                    </div>
                    <div class=\"m-3\">
                        <label class=\"fw-bold fs-6 mb-1\">日期</label>
                        <input type=\"text\" class=\"form-control\" name=\"pdate\" value=\"{{result.class_date}}\" placeholder=\"日期格式範例:2025-04-14\" required>
                    </div>
                    <div class=\"m-3\">
                        <label class=\"fw-bold fs-6 mb-1\">當日總課程時數（請輸入數字）</label>
                        <input type=\"number\" class=\"form-control\" name=\"pclass\" value=\"{{result.attended_hours}}\" min=\"3\" max=\"7\" required>
                    </div>
                    <div class=\"m-3\">
                        <label class=\"fw-bold fs-6 mb-1\">出席時數（請輸入數字）</label>
                        <input type=\"number\" class=\"form-control\" name=\"patt\" value=\"{{result.attended_hours}}\" min=\"0\" max=\"7\" required>
                    </div>
                    <div class=\"m-3\">
                        <label class=\"fw-bold fs-6 mb-1\">遲到時數（請輸入數字）</label>
                        <input type=\"number\" class=\"form-control\" name=\"plate\" value=\"{{result.late_hours}}\" min=\"0\" max=\"1\" required>
                    </div>
                    <div class=\"m-3\">
                        <label class=\"fw-bold fs-6 mb-1\">早退時數（請輸入數字）</label>
                        <input type=\"number\" class=\"form-control\" name=\"pleave\" value=\"{{result.leave_early_hours}}\" min=\"0\" max=\"1\" required>
                    </div>
                    <div class=\"m-3\">
                        <label class=\"fw-bold fs-6 mb-1\">缺席時數（請輸入數字）</label>
                        <input type=\"number\" class=\"form-control\" name=\"pabs\" value=\"{{result.absent_hours}}\" min=\"0\" max=\"7\" required>
                    </div>
                    <button type=\"submit\" class=\"btn btn-success m-3\">新增</button>
                </form>
            </div>
        </div>
    </div>
</div>

{% endblock %}", "partial/backend/add_data.html.twig", "C:\\xampp\\htdocs\\attendance-project\\templates\\partial\\backend\\add_data.html.twig");
    }
}
