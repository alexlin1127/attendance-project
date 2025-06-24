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
class __TwigTemplate_4ffd4a1b5e4ea3b091a618e769912856 extends Template
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
            'scripts' => [$this, 'block_scripts'],
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
            
        <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2\"></script>
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css\" rel=\"stylesheet\">
        <style>
            .table-fixed {
                table-layout: fixed;
                width: 100%;
            }
        </style>
    </head>

    <body>
        ";
        // line 27
        yield "        ";
        yield from $this->load("partial/nav.inc.twig", 27)->unwrap()->yield($context);
        // line 28
        yield "
        ";
        // line 30
        yield "        <main class=\"container-fluid\">
            <div class=\"row g-0\">
                ";
        // line 32
        if (((($context["role"] ?? null) == "admin") || (($context["role"] ?? null) == "adv-user"))) {
            // line 33
            yield "                ";
            // line 34
            yield "                ";
            yield from $this->load("partial/backend/menu.html.twig", 34)->unwrap()->yield($context);
            // line 35
            yield "                <div class=\"col-md-10 bg-light min-vh-100\">
                ";
        } else {
            // line 37
            yield "                <div class=\"col-md-12 bg-light min-vh-100\">
                ";
        }
        // line 39
        yield "                    <div class=\"col col-md-11 ms-5\">
                        ";
        // line 40
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 113
        yield "                    </>
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

        <script>
            const ctx = document.getElementById(\"class_complete\");
            new Chart(ctx, {
                type: \"bar\",
                data: {
                    labels: ";
        // line 133
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["chart"] ?? null), "classList", [], "any", false, false, false, 133));
        yield ",
                    datasets: [
                        {
                            label: \"各課程平均達成率\",
                            data: ";
        // line 137
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["chart"] ?? null), "cplmt", [], "any", false, false, false, 137));
        yield ",
                            backgroundColor: [
                                \"rgba(255, 99, 132, 0.6)\",
                                \"rgba(54, 162, 235, 0.6)\",
                                \"rgba(255, 206, 86, 0.6)\",
                                \"rgba(75, 192, 192, 0.6)\",
                                \"rgba(153, 102, 255, 0.6)\",
                            ],
                            borderColor: [
                                \"rgba(255, 99, 132, 0.6)\",
                                \"rgba(54, 162, 235, 0.6)\",
                                \"rgba(255, 206, 86, 0.6)\",
                                \"rgba(75, 192, 192, 0.6)\",
                                \"rgba(153, 102, 255, 0.6)\",
                            ],
                            borderWidth: 1, 
                        },
                    ],
                },
                options: {
                    plugins: {
                        legend: {
                            display: false
                        },
                        datalabels: {
                            anchor: 'end',
                            align: 'bottom',
                            formatter: function(value, context) {
                                // 顯示 label + 數值
                                return context.chart.data.labels[context.dataIndex] + '\\n' + value.toFixed(2);
                            },
                            font: {
                                weight: 'bold'
                            },
                            textAlign: 'center'
                        }
                    }
                },
                plugins: [ChartDataLabels]
            });
        </script>
        ";
        // line 178
        yield from $this->unwrap()->yieldBlock('scripts', $context, $blocks);
        // line 180
        yield "    </body>
</html>";
        yield from [];
    }

    // line 40
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 41
        yield "                        <div class=\"row row-cols-md-1 mt-5 mb-3 text-center\">
                            <h3 style=\"font-weight: 600; font-size: 2.3rem\">產尖全端班學員出缺席統計</h3>
                        </div>
                        <div class=\"row row-cols-md-1 mt-4 mb-3\">
                            <div class=\"col\">
                                <div class=\"card shadow-sm border-0\">
                                    <div class=\"card-body d-flex\">
                                        <div
                                            class=\"col text-center d-flex justify-content-between align-items-center me-5\">
                                            <div class=\"fw-bold fs-5\">總出席率</div>
                                            <div class=\"display-5 text-success\" style=\"font-weight: 600\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["chart"] ?? null), "attend_rate", [], "any", false, false, false, 51), "html", null, true);
        yield "%</div>
                                        </div>
                                        <div
                                            class=\"col text-center d-flex justify-content-between align-items-center me-5\">
                                            <div class=\"fw-bold fs-5\">總遲到率</div>
                                            <div class=\"display-5 text-danger\" style=\"font-weight: 600\">";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["chart"] ?? null), "late_rate", [], "any", false, false, false, 56), "html", null, true);
        yield "%</div>
                                        </div>
                                        <div class=\"col text-center d-flex justify-content-between align-items-center\">
                                            <div class=\"fw-bold fs-5\">總早退率</div>
                                            <div class=\"display-5 text-warning\" style=\"font-weight: 600\">";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["chart"] ?? null), "early_rate", [], "any", false, false, false, 60), "html", null, true);
        yield "%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row row-cols-md-4\" style=\"padding-top: 20px; padding-bottom: 20px;\">
                            <div class=\"col my-2\">
                                <div class=\"card shadow-sm border-0\">
                                    <div class=\"card-body text-center\">
                                        <h3 class=\"fw-bold mb-4 mt-2 fs-5\">總課程時數</h3>
                                        <span class=\"text-info display-5\" style=\"font-weight: 600\"><strong>";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["chart"] ?? null), "class_hours", [], "any", false, false, false, 72), "html", null, true);
        yield " hr</strong></span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col my-2\">
                                <div class=\"card shadow-sm border-0\">
                                    <div class=\"card-body text-center\">
                                        <h3 class=\"fw-bold mb-4 mt-2 fs-5\">總課程數</h3>
                                        <span class=\"text-success display-5\" style=\"font-weight: 600\"><strong>";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["chart"] ?? null), "class_num", [], "any", false, false, false, 80), "html", null, true);
        yield " 堂</strong></span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col my-2\">
                                <div class=\"card shadow-sm border-0\">
                                    <div class=\"card-body text-center\">
                                        <h3 class=\"fw-bold mb-4 mt-2 fs-5\">總天數</h3>
                                        <span class=\"text-primary display-5\" style=\"font-weight: 600\"><strong>";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["chart"] ?? null), "days", [], "any", false, false, false, 88), "html", null, true);
        yield " 天</strong></span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col my-2\">
                                <div class=\"card shadow-sm border-0\">
                                    <div class=\"card-body text-center\">
                                        <h3 class=\"fw-bold mb-4 mt-2 fs-5\">平均到校時數</h3>
                                        <span class=\"text-warning display-5\" style=\"font-weight: 600\"><strong>";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["chart"] ?? null), "raw_rate", [], "any", false, false, false, 96), "html", null, true);
        yield " hr</strong></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row row-cols-md-1\">
                            <div class=\"col my-2\">
                                <div class=\"card shadow-sm border-0\">
                                    <div class=\"card-body\">
                                        <h3 class=\"fw-bold fs-7 text-center mb-5 mt-4\">各課程達成率</h3>
                                        <canvas id=\"class_complete\" width=\"400\" height=\"200\"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
        yield from [];
    }

    // line 178
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 179
        yield "        ";
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
        return array (  293 => 179,  286 => 178,  264 => 96,  253 => 88,  242 => 80,  231 => 72,  216 => 60,  209 => 56,  201 => 51,  189 => 41,  182 => 40,  176 => 180,  174 => 178,  130 => 137,  123 => 133,  101 => 113,  99 => 40,  96 => 39,  92 => 37,  88 => 35,  85 => 34,  83 => 33,  81 => 32,  77 => 30,  74 => 28,  71 => 27,  44 => 1,);
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
            
        <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2\"></script>
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css\" rel=\"stylesheet\">
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
        <main class=\"container-fluid\">
            <div class=\"row g-0\">
                {% if role == 'admin' or role == 'adv-user' %}
                {# 功能清單 #}
                {% include \"partial/backend/menu.html.twig\" %}
                <div class=\"col-md-10 bg-light min-vh-100\">
                {% else %}
                <div class=\"col-md-12 bg-light min-vh-100\">
                {% endif %}
                    <div class=\"col col-md-11 ms-5\">
                        {% block content %}
                        <div class=\"row row-cols-md-1 mt-5 mb-3 text-center\">
                            <h3 style=\"font-weight: 600; font-size: 2.3rem\">產尖全端班學員出缺席統計</h3>
                        </div>
                        <div class=\"row row-cols-md-1 mt-4 mb-3\">
                            <div class=\"col\">
                                <div class=\"card shadow-sm border-0\">
                                    <div class=\"card-body d-flex\">
                                        <div
                                            class=\"col text-center d-flex justify-content-between align-items-center me-5\">
                                            <div class=\"fw-bold fs-5\">總出席率</div>
                                            <div class=\"display-5 text-success\" style=\"font-weight: 600\">{{chart.attend_rate}}%</div>
                                        </div>
                                        <div
                                            class=\"col text-center d-flex justify-content-between align-items-center me-5\">
                                            <div class=\"fw-bold fs-5\">總遲到率</div>
                                            <div class=\"display-5 text-danger\" style=\"font-weight: 600\">{{chart.late_rate}}%</div>
                                        </div>
                                        <div class=\"col text-center d-flex justify-content-between align-items-center\">
                                            <div class=\"fw-bold fs-5\">總早退率</div>
                                            <div class=\"display-5 text-warning\" style=\"font-weight: 600\">{{chart.early_rate}}%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row row-cols-md-4\" style=\"padding-top: 20px; padding-bottom: 20px;\">
                            <div class=\"col my-2\">
                                <div class=\"card shadow-sm border-0\">
                                    <div class=\"card-body text-center\">
                                        <h3 class=\"fw-bold mb-4 mt-2 fs-5\">總課程時數</h3>
                                        <span class=\"text-info display-5\" style=\"font-weight: 600\"><strong>{{chart.class_hours}} hr</strong></span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col my-2\">
                                <div class=\"card shadow-sm border-0\">
                                    <div class=\"card-body text-center\">
                                        <h3 class=\"fw-bold mb-4 mt-2 fs-5\">總課程數</h3>
                                        <span class=\"text-success display-5\" style=\"font-weight: 600\"><strong>{{chart.class_num}} 堂</strong></span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col my-2\">
                                <div class=\"card shadow-sm border-0\">
                                    <div class=\"card-body text-center\">
                                        <h3 class=\"fw-bold mb-4 mt-2 fs-5\">總天數</h3>
                                        <span class=\"text-primary display-5\" style=\"font-weight: 600\"><strong>{{chart.days}} 天</strong></span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col my-2\">
                                <div class=\"card shadow-sm border-0\">
                                    <div class=\"card-body text-center\">
                                        <h3 class=\"fw-bold mb-4 mt-2 fs-5\">平均到校時數</h3>
                                        <span class=\"text-warning display-5\" style=\"font-weight: 600\"><strong>{{chart.raw_rate}} hr</strong></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row row-cols-md-1\">
                            <div class=\"col my-2\">
                                <div class=\"card shadow-sm border-0\">
                                    <div class=\"card-body\">
                                        <h3 class=\"fw-bold fs-7 text-center mb-5 mt-4\">各課程達成率</h3>
                                        <canvas id=\"class_complete\" width=\"400\" height=\"200\"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {% endblock %}
                    </>
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

        <script>
            const ctx = document.getElementById(\"class_complete\");
            new Chart(ctx, {
                type: \"bar\",
                data: {
                    labels: {{chart.classList | json_encode | raw}},
                    datasets: [
                        {
                            label: \"各課程平均達成率\",
                            data: {{chart.cplmt | json_encode | raw}},
                            backgroundColor: [
                                \"rgba(255, 99, 132, 0.6)\",
                                \"rgba(54, 162, 235, 0.6)\",
                                \"rgba(255, 206, 86, 0.6)\",
                                \"rgba(75, 192, 192, 0.6)\",
                                \"rgba(153, 102, 255, 0.6)\",
                            ],
                            borderColor: [
                                \"rgba(255, 99, 132, 0.6)\",
                                \"rgba(54, 162, 235, 0.6)\",
                                \"rgba(255, 206, 86, 0.6)\",
                                \"rgba(75, 192, 192, 0.6)\",
                                \"rgba(153, 102, 255, 0.6)\",
                            ],
                            borderWidth: 1, 
                        },
                    ],
                },
                options: {
                    plugins: {
                        legend: {
                            display: false
                        },
                        datalabels: {
                            anchor: 'end',
                            align: 'bottom',
                            formatter: function(value, context) {
                                // 顯示 label + 數值
                                return context.chart.data.labels[context.dataIndex] + '\\n' + value.toFixed(2);
                            },
                            font: {
                                weight: 'bold'
                            },
                            textAlign: 'center'
                        }
                    }
                },
                plugins: [ChartDataLabels]
            });
        </script>
        {% block scripts %}
        {% endblock %}
    </body>
</html>", "dashboard.html.twig", "C:\\xampp\\htdocs\\attendance-project\\templates\\dashboard.html.twig");
    }
}
