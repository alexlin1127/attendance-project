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

/* login.html.twig */
class __TwigTemplate_d213f75e19c508434715e39c738599bc extends Template
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
        yield "<!DOCTYPE html>
<html lang=\"zh-Hant-tw\">
\t<head>
\t\t<title>Log in</title>
\t\t<meta charset=\"utf-8\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>

\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN\" crossorigin=\"anonymous\"/>

\t\t<style></style>
\t</head>

\t<body>
\t\t";
        // line 15
        yield "\t\t<main class=\"container-fluid mt-5\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12 col-sm-12 col-md-4 offset-md-4 my-5\">
\t\t\t\t\t<div class=\"card shadow-sm\">
\t\t\t\t\t\t<div class=\"card-header text-white bg-primary text-center fs-4 fw-bold\">產尖全端班出缺勤管理系統</div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t";
        // line 21
        if ((($tmp = ($context["message"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 22
            yield "\t\t\t\t\t\t\t\t<div class=\"alert ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["alert_type"] ?? null), "html", null, true);
            yield " alert-dismissible fade show\" role=\"alert\">
\t\t\t\t\t\t\t\t\t";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["message"] ?? null), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 27
        yield "\t\t\t\t\t\t\t<form method=\"post\" action=\"\">
\t\t\t\t\t\t\t\t<div class=\"mb-3 d\">
\t\t\t\t\t\t\t\t\t<label for=\"foraccount\" class=\"form-label fs-5\">使用者帳號</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"account\" id=\"account\" placeholder=\"請輸入電子郵件信箱\" required>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mb-3 d\">
\t\t\t\t\t\t\t\t\t<label for=\"forpasswd\" class=\"form-label fs-5\">密碼</label>
\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"passwd\" name=\"passwd\" required>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mb-3 d-flex justify-content-center\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary mt-4 w-75\">登入</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</main>

\t\t<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js\" integrity=\"sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r\" crossorigin=\"anonymous\"></script>

\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js\" integrity=\"sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+\" crossorigin=\"anonymous\"></script>
\t</body>
</html>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "login.html.twig";
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
        return array (  79 => 27,  72 => 23,  67 => 22,  65 => 21,  57 => 15,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"zh-Hant-tw\">
\t<head>
\t\t<title>Log in</title>
\t\t<meta charset=\"utf-8\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>

\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN\" crossorigin=\"anonymous\"/>

\t\t<style></style>
\t</head>

\t<body>
\t\t{# 主版型 #}
\t\t<main class=\"container-fluid mt-5\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12 col-sm-12 col-md-4 offset-md-4 my-5\">
\t\t\t\t\t<div class=\"card shadow-sm\">
\t\t\t\t\t\t<div class=\"card-header text-white bg-primary text-center fs-4 fw-bold\">產尖全端班出缺勤管理系統</div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t{% if message %}
\t\t\t\t\t\t\t\t<div class=\"alert {{alert_type}} alert-dismissible fade show\" role=\"alert\">
\t\t\t\t\t\t\t\t\t{{message}}
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<form method=\"post\" action=\"\">
\t\t\t\t\t\t\t\t<div class=\"mb-3 d\">
\t\t\t\t\t\t\t\t\t<label for=\"foraccount\" class=\"form-label fs-5\">使用者帳號</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"account\" id=\"account\" placeholder=\"請輸入電子郵件信箱\" required>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mb-3 d\">
\t\t\t\t\t\t\t\t\t<label for=\"forpasswd\" class=\"form-label fs-5\">密碼</label>
\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"passwd\" name=\"passwd\" required>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mb-3 d-flex justify-content-center\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary mt-4 w-75\">登入</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</main>

\t\t<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js\" integrity=\"sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r\" crossorigin=\"anonymous\"></script>

\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js\" integrity=\"sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+\" crossorigin=\"anonymous\"></script>
\t</body>
</html>
", "login.html.twig", "C:\\xampp\\htdocs\\attendance-project\\templates\\login.html.twig");
    }
}
