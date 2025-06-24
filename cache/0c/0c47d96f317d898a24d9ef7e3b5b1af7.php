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

/* partial/backend/show_att.html.twig */
class __TwigTemplate_e78ea580667a3514bebfa99aa53eba94 extends Template
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
            'scripts' => [$this, 'block_scripts'],
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
        if (((($context["role"] ?? null) == "admin") || (($context["role"] ?? null) == "adv-user"))) {
            // line 5
            yield "<div class=\"row row-cols-1 row-cols-md-6 mt-5 d-flex justify-content-end\">
    <a href=\"att_list.php\" class=\"btn btn-outline-success\" style=\"letter-spacing: 3px;\">查看其他學員</a>
</div>
";
        }
        // line 9
        yield "<div class=\"row row-cols-1 row-cols-md-1 my-3\">
    <div class=\"col text-center\">
        <div id=\"student_name\" style=\"font-size: 2rem; font-weight: 600; padding-bottom: 30px; padding-left: 20px\">學員姓名： ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["chart"] ?? null), "name", [], "any", false, false, false, 11), "html", null, true);
        yield "</div>
    </div>
</div>

<div class=\"row\">
    <div class=\"col-12 col-md-6\">
        <div class=\"row row-cols-1 row-cols-md-2\" id=\"attendance-card\">
            <div class=\"col mb-3\">
                <div class=\"card text-center pt-1 border-info shadow\">
                    <div class=\"card-title mt-2\" style=\"font-size: 1.5rem; font-weight: 600\">總課程時數</div>
                    <div class=\"card-body text-primary fs-2 fw-bold\" id=\"class_hours\" style=\"font-size: 1.6rem\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["chart"] ?? null), "class_hours_total", [], "any", false, false, false, 21), "html", null, true);
        yield " hr</div>
                </div>
            </div>
            <div class=\"col mb-3\">
                <div class=\"card text-center pt-1 border-info shadow\">
                    <div class=\"card-title mt-2\" style=\"font-size: 1.5rem; font-weight: 600\">總計算天數</div>
                    <div class=\"card-body text-secondary fs-2 fw-bold\" id=\"class_hours\" style=\"font-size: 1.6rem\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["chart"] ?? null), "rows", [], "any", false, false, false, 27), "html", null, true);
        yield " 天</div>
                </div>
            </div>
            <div class=\"col mb-3\">
                <div class=\"card text-center pt-1 border-info shadow\">
                    <div class=\"card-title mt-2\" style=\"font-size: 1.5rem; font-weight: 600\">實際上課時數</div>
                    <div class=\"card-body text-primary fs-2 fw-bold\" id=\"attended_hours\" style=\"font-size: 1.6rem\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["chart"] ?? null), "attended_hours_total", [], "any", false, false, false, 33), "html", null, true);
        yield " hr</div>
                </div>
            </div>
            <div class=\"col mb-3\">
                <div class=\"card text-center pt-1 border-info shadow\">
                    <div class=\"card-title mt-2\" style=\"font-size: 1.5rem; font-weight: 600\">缺席時數</div>
                    <div class=\"card-body text-danger fs-2 fw-bold\" id=\"absent_hours\" style=\"font-size: 1.6rem\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["chart"] ?? null), "absent_hours_total", [], "any", false, false, false, 39), "html", null, true);
        yield " hr</div>
                </div>
            </div>
            <div class=\"col mb-3\">
                <div class=\"card text-center pt-1 border-info shadow\">
                    <div class=\"card-title mt-2\" style=\"font-size: 1.5rem; font-weight: 600\">遲到時數</div>
                    <div class=\"card-body text-warning fs-2 fw-bold\" id=\"late_hours\" style=\"font-size: 1.6rem\">";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["chart"] ?? null), "late_hours_total", [], "any", false, false, false, 45), "html", null, true);
        yield " hr</div>
                </div>
            </div>
            <div class=\"col mb-3\">
                <div class=\"card text-center pt-1 border-info shadow\">
                    <div class=\"card-title mt-2\" style=\"font-size: 1.5rem; font-weight: 600\">早退時數</div>
                    <div class=\"card-body text-warning fs-2 fw-bold\" id=\"leave_early_hours\" style=\"font-size: 1.6rem\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["chart"] ?? null), "leave_early_hours_total", [], "any", false, false, false, 51), "html", null, true);
        yield " hr</div>
                </div>
            </div>
            <div class=\"col mb-3\">
                <div class=\"card text-center pt-1 border-info shadow\">
                    <div class=\"card-title mt-2\" style=\"font-size: 1.5rem; font-weight: 600\">出勤比率</div>
                    <div class=\"card-body text-primary fs-2 fw-bold\" id=\"attendance_rate\" style=\"font-size: 1.6rem\">";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["chart"] ?? null), "attendance_rate", [], "any", false, false, false, 57), "html", null, true);
        yield " %</div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"col-12 col-md-6 mb-5 pb-4\">
        <div class=\"card text-center pt-3 border-info shadow\">
            <div class=\"card-body\">
                <div class=\"card-title pb-4\" style=\"font-size: 1.5rem; font-weight: 600\">出席狀況</div>
                <canvas id=\"attendance\"></canvas>
            </div>
        </div>
    </div>
</div>
<div class=\"row row-cols-1 row-cols-md-2\">
    <div class=\"col\">
        <div class=\"card text-center pt-3 border-info shadow\">
            <div class=\"card-body\">
                <div class=\"card-title pb-4\" style=\"font-size: 1.5rem; font-weight: 600\">每日上課時數</div>
                <canvas id=\"attendance_hours\" width=\"400\" height=\"200\"></canvas>
            </div>
        </div>
    </div>
    <div class=\"col\">
        <div class=\"card text-center pt-3 border-info shadow\">
            <div class=\"card-body\">
                <div class=\"card-title pb-4\" style=\"font-size: 1.5rem; font-weight: 600\">每日在校時數</div>
                <canvas id=\"raw_hours\" width=\"400\" height=\"200\"></canvas>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    // line 92
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 93
        yield "<script>
document.addEventListener('DOMContentLoaded', () => {
    const ctx1 = document.getElementById(\"attendance_hours\");
    const ctx2 = document.getElementById(\"raw_hours\");
    const ctx3 = document.getElementById(\"attendance\");
    new Chart(ctx1, {
        type: \"line\",
        data: {
            labels: ";
        // line 101
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["chart"] ?? null), "class_date", [], "any", false, false, false, 101));
        yield ",
            datasets: [
                {
                    label: \"每日上課時數\",
                    data: ";
        // line 105
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["chart"] ?? null), "attended_hours", [], "any", false, false, false, 105));
        yield ",
                    backgroundColor: [
                        \"rgba(255, 99, 132, 0.6)\",
                        \"rgba(54, 162, 235, 0.6)\",
                        \"rgba(255, 206, 86, 0.6)\",
                        \"rgba(75, 192, 192, 0.6)\",
                        \"rgba(153, 102, 255, 0.6)\",
                    ],
                    borderColor: [
                        \"rgba(255, 99, 132, 1)\",
                        \"rgba(54, 162, 235, 1)\",
                        \"rgba(255, 206, 86, 1)\",
                        \"rgba(75, 192, 192, 1)\",
                        \"rgba(153, 102, 255, 1)\",
                    ],
                    borderWidth: 1, // 邊框寬度
                },
            ],
        },
        options: {
            plugins: {
                legend: {
                    display: false
                },
            },
            scales: {
                y: {
                    beginAtZero: true, // Y 軸從 0 開始
                },
            },
        },
    });

    new Chart(ctx2, {
        type: \"bar\",
        data: {
            labels: ";
        // line 141
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["chart"] ?? null), "class_date", [], "any", false, false, false, 141));
        yield ",
            datasets: [
                {
                    label: \"每日在校時數\",
                    data: ";
        // line 145
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["chart"] ?? null), "raw_hours", [], "any", false, false, false, 145));
        yield ",
                    backgroundColor: [
                        \"rgba(255, 99, 132, 0.6)\",
                        \"rgba(54, 162, 235, 0.6)\",
                        \"rgba(255, 206, 86, 0.6)\",
                        \"rgba(75, 192, 192, 0.6)\",
                        \"rgba(153, 102, 255, 0.6)\",
                    ],
                    borderColor: [
                        \"rgba(255, 99, 132, 1)\",
                        \"rgba(54, 162, 235, 1)\",
                        \"rgba(255, 206, 86, 1)\",
                        \"rgba(75, 192, 192, 1)\",
                        \"rgba(153, 102, 255, 1)\",
                    ],
                    borderWidth: 1, // 邊框寬度
                },
            ],
        },
        options: {
            plugins: {
                legend: {
                    display: false
                },
            },
            scales: {
                y: {
                    beginAtZero: true, // Y 軸從 0 開始
                },
            },
        },
        
    });
    new Chart(ctx3, {
        type: \"pie\",
        data: {
            labels: [\"出席\", \"缺席\"],
            datasets: [
                {
                    label: \"出席狀況\",
                    data: [";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["chart"] ?? null), "attendance_rate", [], "any", false, false, false, 185)), "html", null, true);
        yield ", 100 - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["chart"] ?? null), "attendance_rate", [], "any", false, false, false, 185)), "html", null, true);
        yield "],
                    backgroundColor: [\"rgba(255, 99, 132, 0.6)\", \"rgba(54, 162, 235, 0.6)\"],
                    borderColor: [\"rgba(255, 99, 132, 1)\", \"rgba(54, 162, 235, 1)\"],
                    borderWidth: 1, // 邊框寬度
                },
            ],
        },
        options: {
            plugins: {
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            return context.label + ': ' + context.parsed.toFixed(1) + '%';
                        }
                    }
                }
            }
        }
    });
});

    
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partial/backend/show_att.html.twig";
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
        return array (  290 => 185,  247 => 145,  240 => 141,  201 => 105,  194 => 101,  184 => 93,  177 => 92,  138 => 57,  129 => 51,  120 => 45,  111 => 39,  102 => 33,  93 => 27,  84 => 21,  71 => 11,  67 => 9,  61 => 5,  59 => 4,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard.html.twig' %}

{% block content %}
{% if role == 'admin' or role == 'adv-user' %}
<div class=\"row row-cols-1 row-cols-md-6 mt-5 d-flex justify-content-end\">
    <a href=\"att_list.php\" class=\"btn btn-outline-success\" style=\"letter-spacing: 3px;\">查看其他學員</a>
</div>
{% endif %}
<div class=\"row row-cols-1 row-cols-md-1 my-3\">
    <div class=\"col text-center\">
        <div id=\"student_name\" style=\"font-size: 2rem; font-weight: 600; padding-bottom: 30px; padding-left: 20px\">學員姓名： {{chart.name}}</div>
    </div>
</div>

<div class=\"row\">
    <div class=\"col-12 col-md-6\">
        <div class=\"row row-cols-1 row-cols-md-2\" id=\"attendance-card\">
            <div class=\"col mb-3\">
                <div class=\"card text-center pt-1 border-info shadow\">
                    <div class=\"card-title mt-2\" style=\"font-size: 1.5rem; font-weight: 600\">總課程時數</div>
                    <div class=\"card-body text-primary fs-2 fw-bold\" id=\"class_hours\" style=\"font-size: 1.6rem\">{{chart.class_hours_total}} hr</div>
                </div>
            </div>
            <div class=\"col mb-3\">
                <div class=\"card text-center pt-1 border-info shadow\">
                    <div class=\"card-title mt-2\" style=\"font-size: 1.5rem; font-weight: 600\">總計算天數</div>
                    <div class=\"card-body text-secondary fs-2 fw-bold\" id=\"class_hours\" style=\"font-size: 1.6rem\">{{chart.rows}} 天</div>
                </div>
            </div>
            <div class=\"col mb-3\">
                <div class=\"card text-center pt-1 border-info shadow\">
                    <div class=\"card-title mt-2\" style=\"font-size: 1.5rem; font-weight: 600\">實際上課時數</div>
                    <div class=\"card-body text-primary fs-2 fw-bold\" id=\"attended_hours\" style=\"font-size: 1.6rem\">{{chart.attended_hours_total}} hr</div>
                </div>
            </div>
            <div class=\"col mb-3\">
                <div class=\"card text-center pt-1 border-info shadow\">
                    <div class=\"card-title mt-2\" style=\"font-size: 1.5rem; font-weight: 600\">缺席時數</div>
                    <div class=\"card-body text-danger fs-2 fw-bold\" id=\"absent_hours\" style=\"font-size: 1.6rem\">{{chart.absent_hours_total}} hr</div>
                </div>
            </div>
            <div class=\"col mb-3\">
                <div class=\"card text-center pt-1 border-info shadow\">
                    <div class=\"card-title mt-2\" style=\"font-size: 1.5rem; font-weight: 600\">遲到時數</div>
                    <div class=\"card-body text-warning fs-2 fw-bold\" id=\"late_hours\" style=\"font-size: 1.6rem\">{{chart.late_hours_total}} hr</div>
                </div>
            </div>
            <div class=\"col mb-3\">
                <div class=\"card text-center pt-1 border-info shadow\">
                    <div class=\"card-title mt-2\" style=\"font-size: 1.5rem; font-weight: 600\">早退時數</div>
                    <div class=\"card-body text-warning fs-2 fw-bold\" id=\"leave_early_hours\" style=\"font-size: 1.6rem\">{{chart.leave_early_hours_total}} hr</div>
                </div>
            </div>
            <div class=\"col mb-3\">
                <div class=\"card text-center pt-1 border-info shadow\">
                    <div class=\"card-title mt-2\" style=\"font-size: 1.5rem; font-weight: 600\">出勤比率</div>
                    <div class=\"card-body text-primary fs-2 fw-bold\" id=\"attendance_rate\" style=\"font-size: 1.6rem\">{{chart.attendance_rate}} %</div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"col-12 col-md-6 mb-5 pb-4\">
        <div class=\"card text-center pt-3 border-info shadow\">
            <div class=\"card-body\">
                <div class=\"card-title pb-4\" style=\"font-size: 1.5rem; font-weight: 600\">出席狀況</div>
                <canvas id=\"attendance\"></canvas>
            </div>
        </div>
    </div>
</div>
<div class=\"row row-cols-1 row-cols-md-2\">
    <div class=\"col\">
        <div class=\"card text-center pt-3 border-info shadow\">
            <div class=\"card-body\">
                <div class=\"card-title pb-4\" style=\"font-size: 1.5rem; font-weight: 600\">每日上課時數</div>
                <canvas id=\"attendance_hours\" width=\"400\" height=\"200\"></canvas>
            </div>
        </div>
    </div>
    <div class=\"col\">
        <div class=\"card text-center pt-3 border-info shadow\">
            <div class=\"card-body\">
                <div class=\"card-title pb-4\" style=\"font-size: 1.5rem; font-weight: 600\">每日在校時數</div>
                <canvas id=\"raw_hours\" width=\"400\" height=\"200\"></canvas>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block scripts %}
<script>
document.addEventListener('DOMContentLoaded', () => {
    const ctx1 = document.getElementById(\"attendance_hours\");
    const ctx2 = document.getElementById(\"raw_hours\");
    const ctx3 = document.getElementById(\"attendance\");
    new Chart(ctx1, {
        type: \"line\",
        data: {
            labels: {{chart.class_date | json_encode | raw }},
            datasets: [
                {
                    label: \"每日上課時數\",
                    data: {{chart.attended_hours | json_encode | raw }},
                    backgroundColor: [
                        \"rgba(255, 99, 132, 0.6)\",
                        \"rgba(54, 162, 235, 0.6)\",
                        \"rgba(255, 206, 86, 0.6)\",
                        \"rgba(75, 192, 192, 0.6)\",
                        \"rgba(153, 102, 255, 0.6)\",
                    ],
                    borderColor: [
                        \"rgba(255, 99, 132, 1)\",
                        \"rgba(54, 162, 235, 1)\",
                        \"rgba(255, 206, 86, 1)\",
                        \"rgba(75, 192, 192, 1)\",
                        \"rgba(153, 102, 255, 1)\",
                    ],
                    borderWidth: 1, // 邊框寬度
                },
            ],
        },
        options: {
            plugins: {
                legend: {
                    display: false
                },
            },
            scales: {
                y: {
                    beginAtZero: true, // Y 軸從 0 開始
                },
            },
        },
    });

    new Chart(ctx2, {
        type: \"bar\",
        data: {
            labels: {{chart.class_date | json_encode | raw }},
            datasets: [
                {
                    label: \"每日在校時數\",
                    data: {{chart.raw_hours | json_encode | raw }},
                    backgroundColor: [
                        \"rgba(255, 99, 132, 0.6)\",
                        \"rgba(54, 162, 235, 0.6)\",
                        \"rgba(255, 206, 86, 0.6)\",
                        \"rgba(75, 192, 192, 0.6)\",
                        \"rgba(153, 102, 255, 0.6)\",
                    ],
                    borderColor: [
                        \"rgba(255, 99, 132, 1)\",
                        \"rgba(54, 162, 235, 1)\",
                        \"rgba(255, 206, 86, 1)\",
                        \"rgba(75, 192, 192, 1)\",
                        \"rgba(153, 102, 255, 1)\",
                    ],
                    borderWidth: 1, // 邊框寬度
                },
            ],
        },
        options: {
            plugins: {
                legend: {
                    display: false
                },
            },
            scales: {
                y: {
                    beginAtZero: true, // Y 軸從 0 開始
                },
            },
        },
        
    });
    new Chart(ctx3, {
        type: \"pie\",
        data: {
            labels: [\"出席\", \"缺席\"],
            datasets: [
                {
                    label: \"出席狀況\",
                    data: [{{chart.attendance_rate | json_encode}}, 100 - {{ chart.attendance_rate | json_encode }}],
                    backgroundColor: [\"rgba(255, 99, 132, 0.6)\", \"rgba(54, 162, 235, 0.6)\"],
                    borderColor: [\"rgba(255, 99, 132, 1)\", \"rgba(54, 162, 235, 1)\"],
                    borderWidth: 1, // 邊框寬度
                },
            ],
        },
        options: {
            plugins: {
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            return context.label + ': ' + context.parsed.toFixed(1) + '%';
                        }
                    }
                }
            }
        }
    });
});

    
</script>
{% endblock %}", "partial/backend/show_att.html.twig", "C:\\xampp\\htdocs\\attendance-project\\templates\\partial\\backend\\show_att.html.twig");
    }
}
