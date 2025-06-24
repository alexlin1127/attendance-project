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

/* partial/backend/edit.html.twig */
class __TwigTemplate_a7eb999226e0726d3d76366aa40782c6 extends Template
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
        yield "<div class=\"row row-cols-md-1\">
    <div class=\"col\">
        <div class=\"card\">
            <div class=\"card-body\">
                <form method=\"post\" action=\"switch.php?mode=savedata\" enctype=\"multipart/form-data\">
                    <div>
                        <label>流水號</label>
                        <input type=\"text\" class=\"form-control\" name=\"pid\" value=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["result"] ?? null), "id", [], "any", false, false, false, 11), "html", null, true);
        yield "\" readonly>
                    </div>
                    <div>
                        <label>姓名</label>
                        <input type=\"text\" class=\"form-control\" name=\"pname\" value=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["result"] ?? null), "name", [], "any", false, false, false, 15), "html", null, true);
        yield "\">
                    </div>
                    <div>
                        <label>日期</label>
                        <input type=\"text\" class=\"form-control\" name=\"pdate\" value=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["result"] ?? null), "class_date", [], "any", false, false, false, 19), "html", null, true);
        yield "\">
                    </div>
                    <div>
                        <label>出席時數</label>
                        <input type=\"text\" class=\"form-control\" name=\"patt\" value=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["result"] ?? null), "attended_hours", [], "any", false, false, false, 23), "html", null, true);
        yield "\">
                    </div>
                    <div>
                        <label>早退時數</label>
                        <input type=\"text\" class=\"form-control\" name=\"pleave\" value=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["result"] ?? null), "leave_early_hours", [], "any", false, false, false, 27), "html", null, true);
        yield "\">
                    </div>
                    <div>
                        <label>缺席時數</label>
                        <input type=\"text\" class=\"form-control\" name=\"pabs\" value=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["result"] ?? null), "absent_hours", [], "any", false, false, false, 31), "html", null, true);
        yield "\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-success\">更新</button>
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
        return "partial/backend/edit.html.twig";
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
        return array (  102 => 31,  95 => 27,  88 => 23,  81 => 19,  74 => 15,  67 => 11,  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard.html.twig' %}

{% block content %}
<div class=\"row row-cols-md-1\">
    <div class=\"col\">
        <div class=\"card\">
            <div class=\"card-body\">
                <form method=\"post\" action=\"switch.php?mode=savedata\" enctype=\"multipart/form-data\">
                    <div>
                        <label>流水號</label>
                        <input type=\"text\" class=\"form-control\" name=\"pid\" value=\"{{result.id}}\" readonly>
                    </div>
                    <div>
                        <label>姓名</label>
                        <input type=\"text\" class=\"form-control\" name=\"pname\" value=\"{{result.name}}\">
                    </div>
                    <div>
                        <label>日期</label>
                        <input type=\"text\" class=\"form-control\" name=\"pdate\" value=\"{{result.class_date}}\">
                    </div>
                    <div>
                        <label>出席時數</label>
                        <input type=\"text\" class=\"form-control\" name=\"patt\" value=\"{{result.attended_hours}}\">
                    </div>
                    <div>
                        <label>早退時數</label>
                        <input type=\"text\" class=\"form-control\" name=\"pleave\" value=\"{{result.leave_early_hours}}\">
                    </div>
                    <div>
                        <label>缺席時數</label>
                        <input type=\"text\" class=\"form-control\" name=\"pabs\" value=\"{{result.absent_hours}}\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-success\">更新</button>
                </form>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "partial/backend/edit.html.twig", "C:\\xampp\\htdocs\\attendance-project\\templates\\partial\\backend\\edit.html.twig");
    }
}
