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

/* dashboard.html.twig */
class __TwigTemplate_f0acfd5c6aee92355f207788bc67d618 extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"zh-Hant-tw\">
    <head>
        <title>Attendance Dashboard</title>
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />

        <link
            href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\"
            rel=\"stylesheet\"
            integrity=\"sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN\"
            crossorigin=\"anonymous\" />
        
        <style>
            .table-fixed {
                table-layout: fixed;
                width: 100%;
            }
        </style>
    </head>

    <body>

        ";
        // line 25
        yield "        ";
        yield from $this->load("partial/nav.inc.twig", 25)->unwrap()->yield($context);
        // line 26
        yield "
        ";
        // line 28
        yield "        <main class=\"container-fluid mt-4\">
            <div class=\"row g-0\">
                ";
        // line 31
        yield "                ";
        yield from $this->load("partial/backend/menu.html.twig", 31)->unwrap()->yield($context);
        // line 32
        yield "
                ";
        // line 34
        yield "                <div class=\"col-md-10 bg-light\">
                    <div class=\"col col-md-11 ms-5\">
                        ";
        // line 36
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 129
        yield "                    </div>
                </div>
            </div>
        </main>

        <script
            src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js\"
            integrity=\"sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r\"
            crossorigin=\"anonymous\"></script>

        <script
            src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js\"
            integrity=\"sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+\"
            crossorigin=\"anonymous\"></script>
    </body>
</html>";
        yield from [];
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 37
        yield "                        <div class=\"row row-cols-md-1 mt-5 mb-3\">
                            <div class=\"col\">
                                <div class=\"card shadow-sm border-0\">
                                    <div class=\"card-body d-flex\">
                                        <div
                                            class=\"col text-center d-flex justify-content-between align-items-center me-5\">
                                            <div class=\"fw-bold fs-5\">總出席率</div>
                                            <div class=\"display-4 fw-bold text-success\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["chart"] ?? null), "attend_rate", [], "any", false, false, false, 44), "html", null, true);
        yield "%</div>
                                        </div>
                                        <div
                                            class=\"col text-center d-flex justify-content-between align-items-center me-5\">
                                            <div class=\"fw-bold fs-5\">總遲到率</div>
                                            <div class=\"display-4 fw-bold text-danger\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["chart"] ?? null), "late_rate", [], "any", false, false, false, 49), "html", null, true);
        yield "%</div>
                                        </div>
                                        <div class=\"col text-center d-flex justify-content-between align-items-center\">
                                            <div class=\"fw-bold fs-5\">總早退率</div>
                                            <div class=\"display-4 fw-bold text-warning\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["chart"] ?? null), "early_rate", [], "any", false, false, false, 53), "html", null, true);
        yield "%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row row-cols-md-2\">
                            <div class=\"col my-2\">
                                <div class=\"card shadow-sm border-0\">
                                    <div class=\"card-body text-center\">
                                        <h3 class=\"fw-bold mb-4 mt-2 display-8\">總課程時數</h3>
                                        <span class=\"text-info display-4\"><strong>200 hr</strong></span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col my-2\">
                                <div class=\"card shadow-sm border-0\">
                                    <div class=\"card-body text-center\">
                                        <h3 class=\"fw-bold mb-4 mt-2 display-8\">總課程數</h3>
                                        <span class=\"text-success display-4\"><strong>20 堂</strong></span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col my-2\">
                                <div class=\"card shadow-sm border-0\">
                                    <div class=\"card-body text-center\">
                                        <h3 class=\"fw-bold mb-4 mt-2 display-8\">總天數</h3>
                                        <span class=\"text-primary display-4\"><strong>63 天</strong></span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col my-2\">
                                <div class=\"card shadow-sm border-0\">
                                    <div class=\"card-body text-center\">
                                        <h3 class=\"fw-bold mb-4 mt-2 display-8\">平均到校時數</h3>
                                        <span class=\"text-warning display-4\"><strong>5.2 hr</strong></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row row-cols-md-1\">
                            <div class=\"col my-2\">
                                <div class=\"card shadow-sm border-0\">
                                    <div class=\"card-body\">
                                        <h3 class=\"fw-bold fs-7 text-center mb-5 mt-4\">各課程達成率</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, aperiam
                                            corporis nisi ducimus assumenda doloremque repudiandae blanditiis
                                            praesentium qui perspiciatis autem velit culpa cumque distinctio
                                            perferendis? Temporibus doloribus ullam necessitatibus.Lorem ipsum dolor sit
                                            amet consectetur adipisicing elit. Accusamus, aperiam corporis nisi ducimus
                                            assumenda doloremque repudiandae blanditiis praesentium qui perspiciatis
                                            autem velit culpa cumque distinctio perferendis? Temporibus doloribus ullam
                                            necessitatibus. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Accusamus, aperiam corporis nisi ducimus assumenda doloremque repudiandae
                                            blanditiis praesentium qui perspiciatis autem velit culpa cumque distinctio
                                            perferendis? Temporibus doloribus ullam necessitatibus.Lorem ipsum dolor sit
                                            amet consectetur adipisicing elit. Accusamus, aperiam corporis nisi ducimus
                                            assumenda doloremque repudiandae blanditiis praesentium qui perspiciatis
                                            autem velit culpa cumque distinctio perferendis? Temporibus doloribus ullam
                                            necessitatibus. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Accusamus, aperiam corporis nisi ducimus assumenda doloremque repudiandae
                                            blanditiis praesentium qui perspiciatis autem velit culpa cumque distinctio
                                            perferendis? Temporibus doloribus ullam necessitatibus.Lorem ipsum dolor sit
                                            amet consectetur adipisicing elit. Accusamus, aperiam corporis nisi ducimus
                                            assumenda doloremque repudiandae blanditiis praesentium qui perspiciatis
                                            autem velit culpa cumque distinctio perferendis? Temporibus doloribus ullam
                                            necessitatibus.
                                        </p>
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
        return "dashboard.html.twig";
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
        return array (  141 => 53,  134 => 49,  126 => 44,  117 => 37,  110 => 36,  90 => 129,  88 => 36,  84 => 34,  81 => 32,  78 => 31,  74 => 28,  71 => 26,  68 => 25,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"zh-Hant-tw\">
    <head>
        <title>Attendance Dashboard</title>
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />

        <link
            href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\"
            rel=\"stylesheet\"
            integrity=\"sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN\"
            crossorigin=\"anonymous\" />
        
        <style>
            .table-fixed {
                table-layout: fixed;
                width: 100%;
            }
        </style>
    </head>

    <body>

        {# 導航選單 #}
        {% include \"partial/nav.inc.twig\" %}

        {# 主版型 #}
        <main class=\"container-fluid mt-4\">
            <div class=\"row g-0\">
                {# 功能清單 #}
                {% include \"partial/backend/menu.html.twig\" %}

                {# 主畫面區 #}
                <div class=\"col-md-10 bg-light\">
                    <div class=\"col col-md-11 ms-5\">
                        {% block content %}
                        <div class=\"row row-cols-md-1 mt-5 mb-3\">
                            <div class=\"col\">
                                <div class=\"card shadow-sm border-0\">
                                    <div class=\"card-body d-flex\">
                                        <div
                                            class=\"col text-center d-flex justify-content-between align-items-center me-5\">
                                            <div class=\"fw-bold fs-5\">總出席率</div>
                                            <div class=\"display-4 fw-bold text-success\">{{chart.attend_rate}}%</div>
                                        </div>
                                        <div
                                            class=\"col text-center d-flex justify-content-between align-items-center me-5\">
                                            <div class=\"fw-bold fs-5\">總遲到率</div>
                                            <div class=\"display-4 fw-bold text-danger\">{{chart.late_rate}}%</div>
                                        </div>
                                        <div class=\"col text-center d-flex justify-content-between align-items-center\">
                                            <div class=\"fw-bold fs-5\">總早退率</div>
                                            <div class=\"display-4 fw-bold text-warning\">{{chart.early_rate}}%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row row-cols-md-2\">
                            <div class=\"col my-2\">
                                <div class=\"card shadow-sm border-0\">
                                    <div class=\"card-body text-center\">
                                        <h3 class=\"fw-bold mb-4 mt-2 display-8\">總課程時數</h3>
                                        <span class=\"text-info display-4\"><strong>200 hr</strong></span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col my-2\">
                                <div class=\"card shadow-sm border-0\">
                                    <div class=\"card-body text-center\">
                                        <h3 class=\"fw-bold mb-4 mt-2 display-8\">總課程數</h3>
                                        <span class=\"text-success display-4\"><strong>20 堂</strong></span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col my-2\">
                                <div class=\"card shadow-sm border-0\">
                                    <div class=\"card-body text-center\">
                                        <h3 class=\"fw-bold mb-4 mt-2 display-8\">總天數</h3>
                                        <span class=\"text-primary display-4\"><strong>63 天</strong></span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col my-2\">
                                <div class=\"card shadow-sm border-0\">
                                    <div class=\"card-body text-center\">
                                        <h3 class=\"fw-bold mb-4 mt-2 display-8\">平均到校時數</h3>
                                        <span class=\"text-warning display-4\"><strong>5.2 hr</strong></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row row-cols-md-1\">
                            <div class=\"col my-2\">
                                <div class=\"card shadow-sm border-0\">
                                    <div class=\"card-body\">
                                        <h3 class=\"fw-bold fs-7 text-center mb-5 mt-4\">各課程達成率</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, aperiam
                                            corporis nisi ducimus assumenda doloremque repudiandae blanditiis
                                            praesentium qui perspiciatis autem velit culpa cumque distinctio
                                            perferendis? Temporibus doloribus ullam necessitatibus.Lorem ipsum dolor sit
                                            amet consectetur adipisicing elit. Accusamus, aperiam corporis nisi ducimus
                                            assumenda doloremque repudiandae blanditiis praesentium qui perspiciatis
                                            autem velit culpa cumque distinctio perferendis? Temporibus doloribus ullam
                                            necessitatibus. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Accusamus, aperiam corporis nisi ducimus assumenda doloremque repudiandae
                                            blanditiis praesentium qui perspiciatis autem velit culpa cumque distinctio
                                            perferendis? Temporibus doloribus ullam necessitatibus.Lorem ipsum dolor sit
                                            amet consectetur adipisicing elit. Accusamus, aperiam corporis nisi ducimus
                                            assumenda doloremque repudiandae blanditiis praesentium qui perspiciatis
                                            autem velit culpa cumque distinctio perferendis? Temporibus doloribus ullam
                                            necessitatibus. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Accusamus, aperiam corporis nisi ducimus assumenda doloremque repudiandae
                                            blanditiis praesentium qui perspiciatis autem velit culpa cumque distinctio
                                            perferendis? Temporibus doloribus ullam necessitatibus.Lorem ipsum dolor sit
                                            amet consectetur adipisicing elit. Accusamus, aperiam corporis nisi ducimus
                                            assumenda doloremque repudiandae blanditiis praesentium qui perspiciatis
                                            autem velit culpa cumque distinctio perferendis? Temporibus doloribus ullam
                                            necessitatibus.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {% endblock %}
                    </div>
                </div>
            </div>
        </main>

        <script
            src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js\"
            integrity=\"sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r\"
            crossorigin=\"anonymous\"></script>

        <script
            src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js\"
            integrity=\"sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+\"
            crossorigin=\"anonymous\"></script>
    </body>
</html>", "dashboard.html.twig", "C:\\xampp\\htdocs\\attendance-project\\templates\\dashboard.html.twig");
    }
}
