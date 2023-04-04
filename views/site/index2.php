<?php

/** @var yii\web\View $this */

use yii\helpers\Url;
use richardfan\widget\JSRegister;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title mb-0">Bar Chart</h4>

                        <div class="row text-center mt-4">
                            <div class="col-4">
                                <h5 class="mb-0 font-size-18">86541</h5>
                                <p class="text-muted text-truncate">Activated</p>
                            </div>
                            <div class="col-4">
                                <h5 class="mb-0 font-size-18">2541</h5>
                                <p class="text-muted text-truncate">Pending</p>
                            </div>
                            <div class="col-4">
                                <h5 class="mb-0 font-size-18">102030</h5>
                                <p class="text-muted text-truncate">Deactivated</p>
                            </div>
                        </div>

                        <div id="chart" dir="ltr"></div>
                    </div>
                </div>
            </div>
            <!-- end col -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title mb-0">Stacked Area Chart</h4>

                        <div class="row text-center mt-4">
                            <div class="col-4">
                                <h5 class="mb-0 font-size-18">86541</h5>
                                <p class="text-muted text-truncate">Activated</p>
                            </div>
                            <div class="col-4">
                                <h5 class="mb-0 font-size-18">2541</h5>
                                <p class="text-muted text-truncate">Pending</p>
                            </div>
                            <div class="col-4">
                                <h5 class="mb-0 font-size-18">102030</h5>
                                <p class="text-muted text-truncate">Deactivated</p>
                            </div>
                        </div>

                        <div id="chart-stacked" dir="ltr"></div>

                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <div class="row pt-2 pb-1">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 b-1">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php JSRegister::begin() ?>
<script>
    ! function(e) {
        "use strict";

        function t() {}
        t.prototype.init = function() {
            c3.generate({
                bindto: "#chart",
                data: {
                    columns: [
                        ["Desktop", 150, 80, 70, 152, 250, 95],
                        ["Mobile", 200, 130, 90, 240, 130, 220],
                        ["Tablet", 300, 200, 160, 400, 250, 250]
                    ],
                    type: "bar",
                    colors: {
                        Desktop: "#f0f1f4",
                        Mobile: "#2f8ee0",
                        Tablet: "#4bbbce"
                    }
                }
            }), c3.generate({
                bindto: "#combine-chart",
                data: {
                    columns: [
                        ["SonyVaio", 30, 20, 50, 40, 60, 50],
                        ["iMacs", 200, 130, 90, 240, 130, 220],
                        ["Tablets", 300, 200, 160, 400, 250, 250],
                        ["iPhones", 200, 130, 90, 240, 130, 220],
                        ["Macbooks", 130, 120, 150, 140, 160, 150]
                    ],
                    types: {
                        SonyVaio: "bar",
                        iMacs: "bar",
                        Tablets: "spline",
                        iPhones: "line",
                        Macbooks: "bar"
                    },
                    colors: {
                        SonyVaio: "#f0f1f4",
                        iMacs: "#2f8ee0",
                        Tablets: "#4bbbce",
                        iPhones: "#f1463c",
                        Macbooks: "#6fd08b"
                    },
                    groups: [
                        ["SonyVaio", "iMacs"]
                    ]
                },
                axis: {
                    x: {
                        type: "categorized"
                    }
                }
            }), c3.generate({
                bindto: "#roated-chart",
                data: {
                    columns: [
                        ["Revenue", 30, 200, 100, 400, 150, 250],
                        ["Pageview", 50, 20, 10, 40, 15, 25]
                    ],
                    types: {
                        Revenue: "bar"
                    },
                    colors: {
                        Revenue: "#f0f1f4",
                        Pageview: "#4bbbce"
                    }
                },
                axis: {
                    rotated: !0,
                    x: {
                        type: "categorized"
                    }
                }
            }), c3.generate({
                bindto: "#chart-stacked",
                data: {
                    columns: [
                        ["Revenue", 130, 120, 150, 140, 160, 150, 130, 120, 150, 140, 160, 150],
                        ["Pageview", 200, 130, 90, 240, 130, 220, 200, 130, 90, 240, 130, 220]
                    ],
                    types: {
                        Revenue: "area-spline",
                        Pageview: "area-spline"
                    },
                    colors: {
                        Revenue: "#f0f1f4",
                        Pageview: "#4dbbcd"
                    }
                }
            }), c3.generate({
                bindto: "#donut-chart",
                data: {
                    columns: [
                        ["Desktops", 78],
                        ["Smart Phones", 55],
                        ["Mobiles", 40],
                        ["Tablets", 25]
                    ],
                    type: "donut"
                },
                donut: {
                    title: "Candidates",
                    width: 30,
                    label: {
                        show: !1
                    }
                },
                color: {
                    pattern: ["#f0f1f4", "#2f8ee0", "#4bbbce", "#8861dd"]
                }
            }), c3.generate({
                bindto: "#pie-chart",
                data: {
                    columns: [
                        ["Desktops", 78],
                        ["Smart Phones", 55],
                        ["Mobiles", 40],
                        ["Tablets", 25]
                    ],
                    type: "pie"
                },
                color: {
                    pattern: ["#f0f1f4", "#2f8ee0", "#4bbbce", "#8861dd"]
                },
                pie: {
                    label: {
                        show: !1
                    }
                }
            })
        }, e.ChartC3 = new t, e.ChartC3.Constructor = t
    }(window.jQuery),
    function() {
        "use strict";
        window.jQuery.ChartC3.init()
    }();
</script>
<?php JSRegister::end() ?>