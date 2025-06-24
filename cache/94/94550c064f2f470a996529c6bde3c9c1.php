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

/* partial/message.html.twig */
class __TwigTemplate_46a278664691c74cd99e327f971b2e1c extends Template
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
        yield "<div class=\"row row-cols-md-1 mt-5 mb-3\">
    <div class=\"col\">
        <div class=\"alert ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["alert_type"] ?? null), "html", null, true);
        yield " alert-dismissible fade show\" role=\"alert\">
            <div>";
        // line 7
        yield ($context["message"] ?? null);
        yield "</div>
            <button type=\"button\" href=\"#\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    </div>
</div>
";
        // line 12
        if ((($context["transition"] ?? null) == "user")) {
            // line 13
            yield "<a href='switch.php?mode=acc_manage' class=\"btn btn-outline-dark\">返回帳號管理區</a>
";
        } else {
            // line 15
            yield "<a href='att_list.php' class=\"btn btn-outline-dark\">回到學員資料</a>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partial/message.html.twig";
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
        return array (  80 => 15,  76 => 13,  74 => 12,  66 => 7,  62 => 6,  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard.html.twig' %}

{% block content %}
<div class=\"row row-cols-md-1 mt-5 mb-3\">
    <div class=\"col\">
        <div class=\"alert {{alert_type}} alert-dismissible fade show\" role=\"alert\">
            <div>{{message | raw}}</div>
            <button type=\"button\" href=\"#\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    </div>
</div>
{% if transition == 'user' %}
<a href='switch.php?mode=acc_manage' class=\"btn btn-outline-dark\">返回帳號管理區</a>
{% else %}
<a href='att_list.php' class=\"btn btn-outline-dark\">回到學員資料</a>
{% endif %}
{% endblock %}", "partial/message.html.twig", "C:\\xampp\\htdocs\\attendance-project\\templates\\partial\\message.html.twig");
    }
}
