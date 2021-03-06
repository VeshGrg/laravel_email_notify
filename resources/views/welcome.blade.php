<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row head">
                <div class="col-md-4 py-3"><strong>Hamro Share Bazaar</strong>, <span>all about share</span></div>
                <div class="col-md-8">
                    @if (Route::has('login'))
                        <div class="hidden px-0 py-4 sm:block text-right">
                            @auth
                                <a href="{{ route('landing') }}" class="text-sm text-black-700 underline">{{ auth()->user()->name }}</a>
                            @else
                                <a href="{{ route('login') }}" class="text-sm text-black-700 underline">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 text-sm text-black-700 underline">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="title col-md-12 text-center">
                    <h2 style="color: #252599">Hamro Share Bazaar</h2>
                </div>
            </div>
        </div>

        <section class="menu">
            <div class="container">
                <div class="row">
                    <div class="menu-list col-md-12">
                        <ul>
                            <li><a href="">About</a></li>
                            <li><a href="">News</a></li>
                            <li><a href="">IPO/FPO</a></li>
                            <li><a href="">Investment</a></li>
                            <li><a href="">Services</a></li>
                            <li><a href="">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="news">
            <div class="container">
                <div class="row" style="padding-bottom: 14px">
                    <div class="col-md-7 left">
                        <div class="row news-left">
                            <div class="col-md-12"><p><a href="">Cement factories production output less than their capacity: NRB report >></a></p></div>
                            <div class="col-md-12"><p><a href="">Prabhu Select Fund Subscribed 145.62% As of This Moment >></a></p></div>
                            <div class="col-md-12"><p><a href="">Union Life Insurance Given "BBB" Rating by ICRA Nepal; This is What it Means >></a></p></div>
                            <div class="col-md-12"><p><a href="">Units of "NIC Asia Dynamic Debt Mutual Fund" Can Now Be Bought Online >></a></p></div>
                            <div class="col-md-12 apply"><a href="{{ route('shares.create') }}">Apply Share</a></div>
                        </div>
                    </div>
                    <div class="banner col-md-5" style="width: 50%">
                        <img src="{{ asset('img/share.jpg') }}" alt="beach picture" width="100%" style="background-size: contain">
                    </div>
                </div>
            </div>
        </section>

        <section class="announcement">
            <div class="container">
                <div class="announce row">
                    <div class="col-md-5">
                        <h4>Announcement</h4>
                        <p><span>2021-5-10</span>: <a href="">Synergy Power Development Limited has posted a net profit of Rs 62.65 million and published its 3rd quarter company analysis of the fiscal year 2077/78.</a></p>
                        <p><span>2021-5-10</span>: <a href="">Lumbini General Insurance Company Limited has announced its 16th AGM going to be held on 28th Jestha, 2078 and has published its financial highlights of fiscal year 2076/77.</a></p>
                        <p><span>2021-5-10</span>: <a href="">NMB Bank Limited is closing its (20,00,000 units @ Rs.1000 per unit) "8.5% NMB Rinpatra 2087/2088" to the general public from today (6th Jestha, 2078).</a></p>
                        <p><span>2021-5-10</span>: <a href="">Siddhartha Insurance Limited has announced its 19th AGM going to be held on 28th Jestha, 2078.</a></p>
                        <p><span>2021-5-10</span>: <a href="">Siddhartha Insurance Limited has announced its 19th AGM going to be held on 28th Jestha, 2078.</a></p>
                        <p><span>2021-5-10</span>: <a href="">Siddhartha Insurance Limited has announced its 19th AGM going to be held on 28th Jestha, 2078.</a></p>
                        <p class="text-right" style="color: blue"><span><a href="">View All</a></span></p>
                    </div>
                    <div class="col-md-5 price">
                        <h4>Daily Price Index</h4>
                        <table class="table table-primary">
                            <thead class="table table-striped table-hover">
                                <th>S.No.</th>
                                <th>Co. Name</th>
                                <th>Type Of Co.</th>
                                <th>Opening Price</th>
                                <th>Closing Price</th>
                                <th>Turnover</th>
                            </thead>
                            <tr>
                                <td>1</td>
                                <td>ABC</td>
                                <td>Hydropower</td>
                                <td>RS 200</td>
                                <td>Rs 240</td>
                                <td>Rs 150,000</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>ABC</td>
                                <td>Hydropower</td>
                                <td>RS 200</td>
                                <td>Rs 240</td>
                                <td>Rs 150,000</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>ABC</td>
                                <td>Hydropower</td>
                                <td>RS 200</td>
                                <td>Rs 240</td>
                                <td>Rs 150,000</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>ABC</td>
                                <td>Hydropower</td>
                                <td>RS 200</td>
                                <td>Rs 240</td>
                                <td>Rs 150,000</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>ABC</td>
                                <td>Hydropower</td>
                                <td>RS 200</td>
                                <td>Rs 240</td>
                                <td>Rs 150,000</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>ABC</td>
                                <td>Hydropower</td>
                                <td>RS 200</td>
                                <td>Rs 240</td>
                                <td>Rs 150,000</td>
                            </tr>
                        </table>
                        <p class="text-right" style="color: blue"><span><a href="">View All</a></span></p>
                    </div>
                    <div class="col-md-2">
                        <h4>Today's Event</h4>
                        <p><a href="">IPO Allotment Tomorrow at 11: CEDB Hydropower Development Company to Allot Its Shares</a></p>
                        <p><a href="">IPO Allotment Tomorrow at 11: CEDB Hydropower Development Company to Allot Its Shares</a></p>
                        <p><a href="">IPO Allotment Tomorrow at 11: CEDB Hydropower Development Company to Allot Its Shares</a></p>
                        <p class="text-right" style="color: blue"><span><a href="">View All</a></span></p>
                    </div>
                </div>
            </div>
        </section>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
