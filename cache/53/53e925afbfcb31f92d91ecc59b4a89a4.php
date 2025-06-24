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

/* partial/backend/add_user.html.twig */
class __TwigTemplate_2f726175eb1dc78b89951a4e5e0993b8 extends Template
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
";
        }
        // line 14
        yield "
<div class=\"row d-flex justify-content-center\">
    <div class=\"d-flex justify-content-end\">
    </div>
    <div class=\"col-12 col-md-6 mt-3 mb-5\">
        <div class=\"card mt-4\">
            <div class=\"card-header bg-primary\">
                <h2 class=\"text-center my-1 fw-bold text-white\" style=\"letter-spacing: 5px;\">新增使用者</h2>
            </div>
            <div class=\"card-body\">
                <form method=\"post\" action=\"switch.php?mode=add_user_data\" enctype=\"multipart/form-data\">
                    <div class=\"m-4\">
                        <label class=\"fw-bold fs-5 mb-2\" for=\"name\">使用者名稱</label>
                        <input type=\"text\" class=\"form-control\" id='name' name=\"username\" placeholder=\"名稱限15字元以內\" required>
                    </div>
                    <div class=\"m-4\">
                        <label class=\"fw-bold fs-5 mb-2\" for=\"acc\">登入帳號</label>
                        <input type=\"email\" class=\"form-control\" id='acc' name=\"acc\" placeholder=\"請輸入Email\" required>
                    </div>
                    <div class=\"m-4\">
                        <label class=\"fw-bold fs-5 mb-2\" for=\"pwd\">登入密碼</label>
                        <input type=\"password\" class=\"form-control\" id='pwd' name=\"pwd\" required>
                    </div>
                    <div class=\"m-4\">
                        <label class=\"fw-bold fs-5 mb-2\" for=\"role\">使用者身分</label>
                        <input type=\"password\" class=\"form-control\" id='role' name=\"role\" placeholder=\"一般使用者 nor-user // 企業帳號 adv-user\" required>
                    </div>
                    <div class=\"row me-2\">
                        <div class=\"col-12 col-md-12 d-flex justify-content-end \">
                            <a href=\"switch.php?mode=acc_manage\" class=\"btn btn-outline-success\" style=\"width: 100px; padding:10px;margin-right: 15px;\"><strong>返回</strong></a>
                            <button type=\"submit\" class=\"btn btn-outline-success\" style=\"width: 100px; padding:10px\"><strong>新增</strong></button>
                        </div>
                    </div>  
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
        return "partial/backend/add_user.html.twig";
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
        return array (  77 => 14,  68 => 8,  64 => 7,  60 => 5,  58 => 4,  51 => 3,  40 => 1,);
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
{% endif %}

<div class=\"row d-flex justify-content-center\">
    <div class=\"d-flex justify-content-end\">
    </div>
    <div class=\"col-12 col-md-6 mt-3 mb-5\">
        <div class=\"card mt-4\">
            <div class=\"card-header bg-primary\">
                <h2 class=\"text-center my-1 fw-bold text-white\" style=\"letter-spacing: 5px;\">新增使用者</h2>
            </div>
            <div class=\"card-body\">
                <form method=\"post\" action=\"switch.php?mode=add_user_data\" enctype=\"multipart/form-data\">
                    <div class=\"m-4\">
                        <label class=\"fw-bold fs-5 mb-2\" for=\"name\">使用者名稱</label>
                        <input type=\"text\" class=\"form-control\" id='name' name=\"username\" placeholder=\"名稱限15字元以內\" required>
                    </div>
                    <div class=\"m-4\">
                        <label class=\"fw-bold fs-5 mb-2\" for=\"acc\">登入帳號</label>
                        <input type=\"email\" class=\"form-control\" id='acc' name=\"acc\" placeholder=\"請輸入Email\" required>
                    </div>
                    <div class=\"m-4\">
                        <label class=\"fw-bold fs-5 mb-2\" for=\"pwd\">登入密碼</label>
                        <input type=\"password\" class=\"form-control\" id='pwd' name=\"pwd\" required>
                    </div>
                    <div class=\"m-4\">
                        <label class=\"fw-bold fs-5 mb-2\" for=\"role\">使用者身分</label>
                        <input type=\"password\" class=\"form-control\" id='role' name=\"role\" placeholder=\"一般使用者 nor-user // 企業帳號 adv-user\" required>
                    </div>
                    <div class=\"row me-2\">
                        <div class=\"col-12 col-md-12 d-flex justify-content-end \">
                            <a href=\"switch.php?mode=acc_manage\" class=\"btn btn-outline-success\" style=\"width: 100px; padding:10px;margin-right: 15px;\"><strong>返回</strong></a>
                            <button type=\"submit\" class=\"btn btn-outline-success\" style=\"width: 100px; padding:10px\"><strong>新增</strong></button>
                        </div>
                    </div>  
                </form>
            </div>
        </div>
    </div>
</div>

{% endblock %}", "partial/backend/add_user.html.twig", "C:\\xampp\\htdocs\\attendance-project\\templates\\partial\\backend\\add_user.html.twig");
    }
}
