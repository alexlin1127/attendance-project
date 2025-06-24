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
class __TwigTemplate_71a9fd5853c8f31789c200cffd1e93c6 extends Template
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
        yield "<style>
input[readonly] {
  background-color:rgb(179, 179, 179);
  border:rgb(205, 205, 205), dashed;
  cursor: not-allowed;
}
</style>
<div class=\"row row-cols-md-1\">
    <div class=\"col\">
        <div class=\"card\">
            <div class=\"card-body\">
                <form method=\"post\" action=\"switch.php?mode=savedata\" enctype=\"multipart/form-data\" class=\"d-flex flex-column gap-3\">
                    <div>
                        <label>流水號</label>
                        <input type=\"text\" class=\"form-control\" name=\"pid\" value=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["result"] ?? null), "id", [], "any", false, false, false, 18), "html", null, true);
        yield "\" readonly>
                    </div>
                    <div>
                        <label>姓名</label>
                        <input type=\"text\" class=\"form-control\" name=\"pname\" value=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["result"] ?? null), "name", [], "any", false, false, false, 22), "html", null, true);
        yield "\">
                    </div>
                    <div>
                        <label>日期</label>
                        <input type=\"text\" class=\"form-control\" name=\"pdate\" value=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["result"] ?? null), "class_date", [], "any", false, false, false, 26), "html", null, true);
        yield "\">
                    </div>
                    <div>
                        <label>出席時數</label>
                        <input type=\"text\" class=\"form-control\" name=\"patt\" value=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["result"] ?? null), "attended_hours", [], "any", false, false, false, 30), "html", null, true);
        yield "\">
                    </div>
                    <div>
                        <label>早退時數</label>
                        <input type=\"text\" class=\"form-control\" name=\"pleave\" value=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["result"] ?? null), "leave_early_hours", [], "any", false, false, false, 34), "html", null, true);
        yield "\">
                    </div>
                    <div>
                        <label>缺席時數</label>
                        <input type=\"text\" class=\"form-control\" name=\"pabs\" value=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["result"] ?? null), "absent_hours", [], "any", false, false, false, 38), "html", null, true);
        yield "\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-success my-4 mx-auto w-50 fs-5\" style=\"padding-top: 10px; padding-bottom:10px;\">更新</button>
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
        return array (  109 => 38,  102 => 34,  95 => 30,  88 => 26,  81 => 22,  74 => 18,  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard.html.twig' %}

{% block content %}
<style>
input[readonly] {
  background-color:rgb(179, 179, 179);
  border:rgb(205, 205, 205), dashed;
  cursor: not-allowed;
}
</style>
<div class=\"row row-cols-md-1\">
    <div class=\"col\">
        <div class=\"card\">
            <div class=\"card-body\">
                <form method=\"post\" action=\"switch.php?mode=savedata\" enctype=\"multipart/form-data\" class=\"d-flex flex-column gap-3\">
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
                    <button type=\"submit\" class=\"btn btn-success my-4 mx-auto w-50 fs-5\" style=\"padding-top: 10px; padding-bottom:10px;\">更新</button>
                </form>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "partial/backend/edit.html.twig", "C:\\xampp\\htdocs\\attendance-project\\templates\\partial\\backend\\edit.html.twig");
    }
}
