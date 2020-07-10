  @extends("admin.layout")
  @section("content")

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Bank Stats -->
                <section id="bank-cards" class="bank-cards">
                    <div class="row match-height">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="card bank-card pull-up">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-5 text-left">
                                                <h3 class="mb-0">$1.2K</h3>
                                                <p class="text-light">per Ounce</p>
                                                <h4 class="warning mt-1 text-bold-500">Gold</h4>
                                            </div>
                                            <div class="col-7">
                                                <div class="float-right">
                                                    <canvas id="gold-chart" class="height-75"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="card bank-card pull-up">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-5 text-left">
                                                <h3 class="mb-0">$14.66</h3>
                                                <p class="text-light">per Ounce</p>
                                                <h4 class="info mt-1 text-bold-500">Silver</h4>
                                            </div>
                                            <div class="col-7">
                                                <div class="float-right">
                                                    <canvas id="silver-chart" class="height-75"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="card bank-card pull-up">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-5 text-left">
                                                <h3 class="mb-0">$0.88</h3>
                                                <p class="text-light">per Unit</p>
                                                <h4 class="danger mt-1 text-bold-500">USD</h4>
                                            </div>
                                            <div class="col-7">
                                                <div class="float-right">
                                                    <canvas id="euro-chart" class="height-75"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="card bank-card pull-up">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-5 text-left">
                                                <h3 class="mb-0">$6.5K</h3>
                                                <p class="text-light">per unit</p>
                                                <h4 class="success mt-1 text-bold-500">EURO</h4>
                                            </div>
                                            <div class="col-7">
                                                <div class="float-right">
                                                    <canvas id="bitcoin-chart" class="height-75"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-9 col-lg-8 col-md-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card card-shadow">
                                        <div class="card-header card-header-transparent">
                                            <h4 class="card-title">Transaction Reports</h4>
                                            <ul class="nav nav-pills nav-pills-rounded chart-action float-right btn-group" role="group">
                                                <li class="nav-item">
                                                    <a class="active nav-link" data-toggle="tab" href="#scoreLineToDay">Day</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#scoreLineToWeek">Week</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#scoreLineToMonth">Month</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="widget-content tab-content bg-white p-20">
                                            <div class="ct-chart tab-pane active scoreLineShadow" id="scoreLineToDay"></div>
                                            <div class="ct-chart tab-pane scoreLineShadow" id="scoreLineToWeek"></div>
                                            <div class="ct-chart tab-pane scoreLineShadow" id="scoreLineToMonth"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-12">
                            <div class="chart-stats text-center my-3">
                                <div class="card bg-gradient-directional-primary">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="media d-flex">
                                                <div class="media-body text-white text-left">
                                                    <h3 class="text-white">$15,320</h3>
                                                    <span>Transaction</span>
                                                </div>
                                                <div class="percentage">
                                                    <span>63%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card bg-gradient-directional-warning">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="media d-flex">
                                                <div class="media-body text-white text-left">
                                                    <h3 class="text-white">156</h3>
                                                    <span>New Clients</span>
                                                </div>
                                                <div class="percentage">
                                                    <span>54%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card bg-gradient-directional-cyan">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="media d-flex">
                                                <div class="media-body text-white text-left">
                                                    <h3 class="text-white">278</h3>
                                                    <span>New Projects</span>
                                                </div>
                                                <div class="percentage">
                                                    <span>71%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-xl-5 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Calendar</h4>
                                </div>
                                <div class="card-content">
                                    <div id="bank-calendar" class="overflow-hidden bg-grey bg-lighten-3"></div>
                                </div>
                            </div>
                            <div id="clndr" class="clearfix">
                                <script type="text/template" id="bank-calendar-template">
                                    <div class="clndr-controls">
                   <div class="clndr-previous-button">&lt;</div>
                   <div class="clndr-next-button">&gt;</div>
                   <div class="current-month">
                       <%= month %>
                       <%= year %>
                   </div>

               </div>
               <div class="clndr-grid">
                   <div class="days-of-the-week clearfix">
                       <% _.each(daysOfTheWeek, function(day) { %>
                           <div class="header-day">
                               <%= day %>
                           </div>
                       <% }); %>
                   </div>
                   <div class="days">
                       <% _.each(days, function(day) { %>
                           <div class="<%= day.classes %>" id="<%= day.id %>"><span class="day-number"><%= day.day %></span></div>
                       <% }); %>
                   </div>
               </div>
               <div class="event-listing">
                   <div class="event-listing-title">Event this month</div>
                   <% _.each(eventsThisMonth, function(event) { %>
                       <div class="event-item font-small-3">
                           <div class="event-item-day font-small-2">
                               <%= event.date %>
                           </div>
                           <div class="event-item-name text-bold-600">
                               <%= event.title %>
                           </div>
                           <div class="event-item-location">
                               <%= event.location %>
                           </div>
                       </div>
                   <% }); %>
               </div>
            </script>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6 col-md-12">
                            <div class="card recent-loan">
                                <div class="card-header">
                                    <h4 class="text-center">Loan Applications</h4>
                                </div>
                                <div class="card-content">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="border-top-0"></th>
                                                    <th class="border-top-0">Loan Amount</th>
                                                    <th class="border-top-0">Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="avatar avatar-sm">
                                                            <img class="rounded-circle" src="app-assets/images/portrait/small/avatar-s-4.png" alt="Avatar" />
                                                        </div>
                                                    </td>
                                                    <td class="text-truncate">
                                                        <i class="ft-arrow-down-left success"></i> $20000
                                                        <div class="font-small-2 text-light"><i class="font-small-2 ft-map-pin"></i> S.G.road,UK</div>
                                                    </td>
                                                    <td class="text-truncate">4:59p.m</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar avatar-sm">
                                                            <img class="rounded-circle" src="app-assets/images/portrait/small/avatar-s-1.png" alt="Avatar" />
                                                        </div>
                                                    </td>
                                                    <td class="text-truncate">
                                                        <i class="ft-arrow-up-right danger"></i> $500
                                                        <div class="font-small-2 text-light"><i class="font-small-2 ft-map-pin"></i> P.stone,UK</div>
                                                    </td>
                                                    <td class="text-truncate">2:01p.m</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar avatar-sm">
                                                            <img class="rounded-circle" src="app-assets/images/portrait/small/avatar-s-10.png" alt="Avatar" />
                                                        </div>
                                                    </td>
                                                    <td class="text-truncate">
                                                        <i class="ft-arrow-down-left success"></i> $10000
                                                        <div class="font-small-2 text-light">
                                                            <i class="font-small-2 ft-map-pin"></i> Grod Street,UK
                                                        </div>
                                                    </td>
                                                    <td class="text-truncate">12:50p.m</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar avatar-sm">
                                                            <img class="rounded-circle" src="app-assets/images/portrait/small/avatar-s-9.png" alt="Avatar" />
                                                        </div>
                                                    </td>
                                                    <td class="text-truncate">
                                                        <i class="ft-arrow-up-right danger"></i> $2000
                                                        <div class="font-small-2 text-light"><i class="font-small-2 ft-map-pin"></i> Malbourn,UK</div>
                                                    </td>
                                                    <td class="text-truncate">9:45a.m</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar avatar-sm">
                                                            <img class="rounded-circle" src="app-assets/images/portrait/small/avatar-s-12.png" alt="Avatar" />
                                                        </div>
                                                    </td>
                                                    <td class="text-truncate">
                                                        <i class="ft-arrow-up-right danger"></i> $1000
                                                        <div class="font-small-2 text-light">
                                                            <i class="font-small-2 ft-map-pin"></i> Scott Lane,UK
                                                        </div>
                                                    </td>
                                                    <td class="text-truncate">8:22a.m</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="card add-card">
                                <div class="card-header">
                                    <h4>Add Card</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-12 mb-3">
                                                <div class="card-wrapper"></div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-12">
                                                <form action="#" class="card-form">
                                                    <fieldset class="mb-1">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control card-number" name="number" id="card-number" maxlength="19" placeholder="Card Number" />
                                                        </div>
                                                    </fieldset>
                                                    <fieldset class="mb-1">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control card-name" name="name" id="card-name" placeholder="Card Holder Name" />
                                                        </div>
                                                    </fieldset>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <fieldset class="mb-1">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control card-expiry" name="expiry" id="card-expiry" placeholder="Card Expiry Date" />
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <fieldset class="mb-1">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control card-cvc" name="cvc" id="card-cvc" maxlength="16" placeholder="Card CVC Number" />
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <input type="button" name="generate" value="Generate" class="btn round btn-primary box-shadow-1 px-3 mr-1" />
                                                            <input type="button" name="cancel" value="Cancel" class="btn btn-secondary round box-shadow-1 px-3" />
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
    @endsection()   