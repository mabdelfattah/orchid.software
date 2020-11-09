@extends('_layouts.master')

@section('content')



    <section class="pb-4 bg-dark position-relative overflow-hidden b-b">
        <div class="container pt-md-2">
            <div class="row my-4">
                <div class="col-12 col-md-6">
                    <div class="row pt-md-5 mb-md-2">
                        <div class="col-md-12">
                            <h1 class="text-white mb-4 mt-4 mr-md-4 text-center text-sm-left font-thin display-6">
                                @yield('main.title')
                            </h1>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <p class="lead mb-5">
                                @yield('main.lead')
                            </p>
                        </div>
                    </div>

                    <div class="d-flex flex-column flex-md-row">
                        <a href="/@yield('lang')/docs" class="btn btn-lg btn-outline-primary btn-rounded mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="1em" height="1em" fill="currentColor" viewBox="0 0 32 32">
                                <path d="M6.553 27.602c-0.628 1.306-1.025 2.177-4.522 2.304 0.1-3.374 0.744-3.736 2.031-4.378 0.54-0.27 1.213-0.605 1.941-1.164l-1.218-1.555c-0.575 0.442-1.104 0.674-1.615 0.928-2.145 1.070-3.156 2.123-3.156 7.145l0.017 1.022 0.983-0.022c5.301 0 6.292-1.198 7.285-3.26 0.217-0.452 0.338-0.758 0.705-1.367l-1.483-1.347c-0.444 0.607-0.722 1.183-0.968 1.692zM22.030 5.896c-2.212 0-4.011 1.799-4.011 4.010s1.8 4.011 4.011 4.011 4.011-1.8 4.011-4.011c0-2.211-1.8-4.011-4.011-4.011zM22.030 11.909c-1.104 0-2.003-0.899-2.003-2.002s0.898-2.002 2.003-2.002 2.003 0.899 2.003 2.002c-0 1.104-0.898 2.002-2.003 2.002zM31.993 0.916c-0.030-0.499-0.426-0.899-0.925-0.936 0 0-5.596-0.408-10.98 1.603-1.967 0.735-3.586 1.898-5.097 3.661-1.26 1.47-2.512 4.126-3.617 6.332-0.427 0.851-0.835 1.666-1.181 2.288h-5.563c-0.286 0-0.558 0.123-0.748 0.336l-3.666 3.973c-0.234 0.265-0.312 0.633-0.204 0.969s0.385 0.592 0.729 0.67l5.967 1.364c0.407 0.502 1.084 1.253 2.168 2.456l2.261 2.506 1.217 5.148c0.080 0.339 0.331 0.613 0.663 0.72 0.101 0.032 0.206 0.049 0.309 0.049 0.236 0 0.467-0.083 0.651-0.241l3.705-3.686c0.221-0.189 0.349-0.467 0.349-0.759v-5.16c0.498-0.309 1.381-0.786 2.212-1.251 2.264-1.265 5.645-2.841 7.046-4.087 1.974-1.754 2.692-3.040 3.398-4.941 1.678-4.521 1.322-10.751 1.305-11.014zM28.813 11.233c-0.616 1.659-1.174 2.651-2.852 4.142-1.239 1.101-4.629 2.682-6.694 3.837-1.541 0.861-2.464 1.364-2.869 1.695-0.233 0.189-0.368 0.474-0.368 0.774v5.227l-2.11 2.319-0.899-3.8c-0.039-0.163-0.118-0.314-0.231-0.439-1.839-2.038-4.617-5.119-4.83-5.364-0.139-0.169-0.332-0.289-0.549-0.339l-4.581-1.048 2.247-2.375h5.689c0.348 0 0.671-0.181 0.852-0.476 0.44-0.716 0.95-1.736 1.542-2.915 1.002-1.998 2.248-4.642 3.348-5.926 1.3-1.516 2.619-2.469 4.278-3.089 3.691-1.379 7.499-1.524 9.24-1.511 0.032 1.844-0.037 6.119-1.214 9.289z"></path>
                            </svg>

                            @yield('main.start')
                        </a>
                        <a href="https://demo.orchid.software/" class="btn btn-lg btn-bd-primary mb-3 mr-md-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid" width="1em" height="1em" fill="currentColor" viewBox="0 0 32 26">
                                <path d="M30.000,21.000 L17.000,21.000 L17.000,24.000 L22.047,24.000 C22.600,24.000 23.047,24.448 23.047,25.000 C23.047,25.552 22.600,26.000 22.047,26.000 L10.047,26.000 C9.494,26.000 9.047,25.552 9.047,25.000 C9.047,24.448 9.494,24.000 10.047,24.000 L15.000,24.000 L15.000,21.000 L2.000,21.000 C0.898,21.000 0.000,20.103 0.000,19.000 L0.000,2.000 C0.000,0.897 0.898,0.000 2.000,0.000 L30.000,0.000 C31.103,0.000 32.000,0.897 32.000,2.000 L32.000,19.000 C32.000,20.103 31.103,21.000 30.000,21.000 ZM2.000,2.000 L2.000,19.000 L29.997,19.000 L30.000,2.000 L2.000,2.000 Z"></path>
                            </svg>

                            @yield('main.demo')
                        </a>
                    </div>

                </div>

                    <div class="d-none d-md-block col position-relative">
                        <img src="https://raw.githubusercontent.com/orchidsoftware/platform/master/.github/IMAGES/promo-full.png" class="main-screenshot">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="container pt-5 pb-5">
            <div class="row justify-content-center text-black mb-4">
                <div class="col-12">

                    <h2 class="center text-dark font-thin w-75 padder-v mb-3 pt-5 ml-0 display-6">
                        @yield('main.description')
                    </h2>

                    <p class="lead px-lg-8">
                        @yield('main.slogan')
                    </p>
                </div>
            </div>

            <div class="row padder-v mt-md-3">
                <div class="col col-12 col-md-4 m-md-0 mb-4 py-2">
                    <div class="item">
                        <div class="h3 v-center text-black">

                            <div class="hero-icon d-flex flex-justify-center p-2 mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 32 32" fill="currentColor">
                                    <path d="M23.845 8.125c-1.395-3.701-4.392-6.045-8.92-6.045-5.762 0-9.793 4.279-10.14 9.861-2.779 0.889-4.784 3.723-4.784 6.933 0 3.93 3.089 7.249 6.744 7.249h0.889c0.552 0 1-0.448 1-1s-0.448-1-1-1h-0.889c-2.572 0-4.776-2.404-4.776-5.249 0-2.515 1.763-4.783 3.974-5.163l0.907-0.156-0.081-0.917-0.008-0.011c0-4.871 3.206-8.545 8.162-8.545 3.972 0 6.204 1.957 7.236 5.295l0.213 0.688 0.721 0.015c3.715 0.078 6.971 3.092 6.971 6.837 0 3.408-2.259 7.206-5.679 7.206h-0.285c-0.552 0-1 0.448-1 1s0.448 1 1 1v-0.003c5-0.132 7.883-4.909 7.883-9.203-0.001-4.617-3.619-8.304-8.141-8.791zM20.198 24.233c-0.279-0.292-0.731-0.292-1.010-0l-2.2 2.427v-10.067c0-0.552-0.448-1-1-1s-1 0.448-1 1v10.076l-2.128-2.373c-0.28-0.292-0.732-0.355-1.011-0.063l-0.252 0.138c-0.28 0.293-0.28 0.765 0 1.057l3.61 3.992c0.005 0.005 0.006 0.012 0.011 0.017l0.253 0.265c0.14 0.146 0.324 0.219 0.509 0.218 0.183 0.001 0.368-0.072 0.507-0.218l0.253-0.265c0.005-0.005 0.008-0.011 0.012-0.017l3.701-4.055c0.279-0.292 0.279-0.639 0-0.932z"></path>
                                </svg>
                            </div>

                            <span class="item-name h4 font-thin"> @yield('main.col1.title')</span>
                        </div>
                        <div class="linear-gradient h-1/2 bg-primary w-xs mt-3 mb-3" style="height: 2px;"></div>
                        <div class="item-desc">
                            @yield('main.col1.description')
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-md-4 m-md-0 mb-4 py-2">
                    <div class="item">
                        <div class="h3 v-center text-black">

                            <div class="hero-icon d-flex flex-justify-center p-2 mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 32 32" fill="currentColor">
                                    <path d="M16 0c-8.836 0-16 7.163-16 16s7.163 16 16 16c8.837 0 16-7.163 16-16s-7.163-16-16-16zM16 30.032c-7.72 0-14-6.312-14-14.032s6.28-14 14-14 14 6.28 14 14-6.28 14.032-14 14.032zM17 15.594v-9.594c0-0.552-0.448-1-1-1s-1 0.448-1 1v10c0 0.283 0.118 0.537 0.308 0.719 0.017 0.020 0.030 0.041 0.048 0.059l4.949 4.95c0.39 0.39 1.023 0.39 1.414 0s0.39-1.024 0-1.415z"></path>
                                </svg>
                            </div>

                            <div class="item-name h4 font-thin">@yield('main.col2.title')</div>
                        </div>
                        <div class="linear-gradient h-1/2 bg-primary w-xs mt-3 mb-3" style="height: 2px;"></div>
                        <div class="item-desc">
                            @yield('main.col2.description')
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-md-4 m-md-0 mb-4 py-2">
                    <div class="item">
                        <div class="h3 v-center text-black">

                            <div class="hero-icon d-flex flex-justify-center p-2 mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 32 32" fill="currentColor">
                                    <path d="M31.707 30.282l-9.717-9.776c1.811-2.169 2.902-4.96 2.902-8.007 0-6.904-5.596-12.5-12.5-12.5s-12.5 5.596-12.5 12.5 5.596 12.5 12.5 12.5c3.136 0 6.002-1.158 8.197-3.067l9.703 9.764c0.39 0.39 1.024 0.39 1.415 0s0.39-1.023 0-1.415zM12.393 23.016c-5.808 0-10.517-4.709-10.517-10.517s4.708-10.517 10.517-10.517c5.808 0 10.516 4.708 10.516 10.517s-4.709 10.517-10.517 10.517z"></path>
                                </svg>
                            </div>

                            <span class="item-name h4 font-thin">@yield('main.col5.title')</span>
                        </div>
                        <div class="linear-gradient h-1/2 bg-primary w-xs mt-3 mb-3" style="height: 2px;"></div>
                        <div class="item-desc">
                            @yield('main.col5.description')
                        </div>
                    </div>
                </div>
            </div>

            <div class="row padder-v mt-md-3">
                <div class="col col-12 col-md-4 m-md-0 mb-4 py-2">
                    <div class="item">
                        <div class="h3 v-center text-black">

                            <div class="hero-icon d-flex flex-justify-center p-2 mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 32 32" fill="currentColor">
                                    <path d="M12,25l6.67,6.67a1,1,0,0,0,.7.29.91.91,0,0,0,.39-.08,1,1,0,0,0,.61-.92V13.08L31.71,1.71A1,1,0,0,0,31.92.62,1,1,0,0,0,31,0H1A1,1,0,0,0,.08.62,1,1,0,0,0,.29,1.71L11.67,13.08V24.33A1,1,0,0,0,12,25ZM3.41,2H28.59l-10,10a1,1,0,0,0-.3.71V28.59l-4.66-4.67V12.67a1,1,0,0,0-.3-.71Z"/>
                                </svg>
                            </div>

                            <span class="item-name h4 font-thin">@yield('main.col3.title')</span>
                        </div>
                        <div class="linear-gradient h-1/2 bg-primary w-xs mt-3 mb-3" style="height: 2px;"></div>
                        <div class="item-desc">
                            @yield('main.col3.description')
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-md-4 m-md-0 mb-4 py-2">
                    <div class="item">
                        <div class="h3 v-center text-black">

                            <div class="hero-icon d-flex flex-justify-center p-2 mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 32 32" fill="currentColor">
                                    <path d="M28.3 22.247c-1.167-1.419-2.765-3.429-2.765-5.48v-6.53c0-5.625-4.207-10.202-9.584-10.202-5.378 0-9.552 4.577-9.552 10.202v6.53c0 2.016-1.734 3.921-2.833 5.4-0.989 1.328-1.77 2.378-1.242 3.427 0.463 0.923 1.624 1.041 2.583 1.041h5.73c0.002 2.944 2.389 5.331 5.333 5.331s5.333-2.386 5.334-5.331h5.864c0.61 0 2.036 0 2.527-1.038 0.495-1.050-0.297-2.016-1.395-3.351zM15.969 29.871c-1.788 0-3.239-1.448-3.241-3.235h6.482c-0.003 1.787-1.452 3.235-3.241 3.235zM27.168 24.506h-22.262c-0.153 0-0.281-0.005-0.386-0.012 0.206-0.319 0.508-0.727 0.755-1.058 1.218-1.637 3.255-3.949 3.255-6.669v-6.53c0-4.452 3.22-8.073 7.423-8.073s7.455 3.622 7.455 8.073v6.53c0 2.813 1.878 5.164 3.249 6.832 0.231 0.281 0.507 0.617 0.722 0.905-0.064 0.002-0.134 0.003-0.209 0.003z"></path>
                                </svg>
                            </div>

                            <span class="item-name h4 font-thin">@yield('main.col4.title')</span>
                        </div>
                        <div class="linear-gradient h-1/2 bg-primary w-xs mt-3 mb-3" style="height: 2px;"></div>
                        <div class="item-desc">
                            @yield('main.col4.description')
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-md-4 m-md-0 mb-4 py-2">
                    <div class="item">
                        <div class="h3 v-center text-black">

                            <div class="hero-icon d-flex flex-justify-center p-2 mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 32 32" fill="currentColor">
                                    <path d="M15.992 2c3.396 0 6.998 2.86 6.998 4.995v4.997c0 1.924-0.8 5.604-2.945 7.293-0.547 0.43-0.831 1.115-0.749 1.807 0.082 0.692 0.518 1.291 1.151 1.582l8.703 4.127c0.068 0.031 0.834 0.16 0.834 1.23l0.001 1.952-27.984 0.002v-2.029c0-0.795 0.596-1.045 0.835-1.154l8.782-4.145c0.63-0.289 1.065-0.885 1.149-1.573s-0.193-1.37-0.733-1.803c-2.078-1.668-3.046-5.335-3.046-7.287v-4.997c0.001-2.089 3.638-4.995 7.004-4.995zM15.992-0c-4.416 0-9.004 3.686-9.004 6.996v4.997c0 2.184 0.997 6.601 3.793 8.847l-8.783 4.145s-1.998 0.89-1.998 1.999v3.001c0 1.105 0.895 1.999 1.998 1.999h27.986c1.105 0 1.999-0.895 1.999-1.999v-3.001c0-1.175-1.999-1.999-1.999-1.999l-8.703-4.127c2.77-2.18 3.708-6.464 3.708-8.865v-4.997c0-3.31-4.582-6.995-8.998-6.995v0z"></path>
                                </svg>
                            </div>

                            <span class="item-name h4 font-thin">@yield('main.col6.title')</span>
                        </div>
                        <div class="linear-gradient h-1/2 bg-primary w-xs mt-3 mb-3" style="height: 2px;"></div>
                        <div class="item-desc">
                            @yield('main.col6.description')
                        </div>
                    </div>
                </div>
            </div>

            <div class="row padder-v mt-md-3">
                <div class="col col-12 col-md-4 m-md-0 mb-4 py-2">
                    <div class="item">
                        <div class="h3 v-center text-black">

                            <div class="hero-icon d-flex flex-justify-center p-2 mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 32 32" fill="currentColor">
                                    <path d="M16.642 20.669c-0.391 0.39-0.391 1.023-0 1.414 0.195 0.195 0.451 0.293 0.707 0.293s0.512-0.098 0.707-0.293l5.907-6.063-5.907-6.063c-0.39-0.39-1.023-0.39-1.414 0s-0.391 1.024 0 1.414l3.617 3.617h-19.264c-0.552 0-1 0.448-1 1s0.448 1 1 1h19.326zM30.005 0h-18c-1.105 0-2.001 0.895-2.001 2v9h2.014v-7.78c0-0.668 0.542-1.21 1.21-1.21h15.522c0.669 0 1.21 0.542 1.21 1.21l0.032 25.572c0 0.668-0.541 1.21-1.21 1.21h-15.553c-0.668 0-1.21-0.542-1.21-1.21v-7.824l-2.014 0.003v9.030c0 1.105 0.896 2 2.001 2h18c1.105 0 2-0.895 2-2v-28c-0.001-1.105-0.896-2-2-2z"></path>
                                </svg>
                            </div>

                            <span class="item-name h4 font-thin">@yield('main.col7.title')</span>
                        </div>
                        <div class="linear-gradient h-1/2 bg-primary w-xs mt-3 mb-3" style="height: 2px;"></div>
                        <div class="item-desc">
                            @yield('main.col7.description')
                        </div>
                    </div>
                </div>

                <div class="col col-12 col-md-4 m-md-0 mb-4 py-2">

                    <div class="item">
                        <div class="h3 v-center text-black">

                            <div class="hero-icon d-flex flex-justify-center p-2 mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 32 32">
                                    <path d="M5.397 31.488c-1.356 0-2.659-0.561-3.697-1.6-2.301-2.309-2.301-6.064-0.001-8.372l17.946-19.057c2.8-2.804 7.089-2.553 10.219 0.582 1.402 1.405 2.189 3.431 2.16 5.559-0.029 2.107-0.852 4.123-2.259 5.531l-13.563 14.439c-0.377 0.404-1.011 0.423-1.413 0.044s-0.421-1.014-0.043-1.417l13.584-14.461c1.063-1.065 1.672-2.575 1.695-4.164s-0.552-3.090-1.574-4.114c-1.92-1.924-5.046-2.932-7.37-0.602l-17.945 19.057c-1.543 1.547-1.542 4.032-0.020 5.558 0.714 0.715 1.562 1.063 2.464 1.008 0.893-0.055 1.811-0.512 2.585-1.288l14.279-15.198c0.517-0.518 1.558-1.79 0.499-2.851-0.599-0.601-1.020-0.563-1.159-0.552-0.395 0.035-0.858 0.309-1.337 0.79l-10.748 11.43c-0.38 0.404-1.013 0.423-1.414 0.043-0.402-0.379-0.421-1.014-0.042-1.416l10.767-11.452c0.846-0.851 1.712-1.312 2.593-1.391 0.688-0.061 1.71 0.085 2.753 1.131 1.548 1.551 1.355 3.826-0.477 5.663l-14.279 15.197c-1.14 1.144-2.517 1.808-3.898 1.893-0.101 0.007-0.203 0.010-0.304 0.010z"></path>
                                </svg>
                            </div>

                            <span class="item-name h4 font-thin">Attachments</span>
                        </div>
                        <div class="linear-gradient h-1/2 bg-primary w-xs mt-3 mb-3" style="height: 2px;"></div>
                        <div class="item-desc">
                            When the file is loaded, a hash is generated and no duplicates are physically stored on disk. It can also be easily linked to an Eloquent record.
                        </div>
                    </div>

                </div>

                <div class="col col-12 col-md-4 m-md-0 mb-4 py-2">


                    <div class="item">
                        <div class="h3 v-center text-black">

                            <div class="hero-icon d-flex flex-justify-center p-2 mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="1em" height="1em" fill="currentColor">
                                    <path d="M8.502 9.999h-7.002c-0.552 0-1 0.447-1 1v20.001c0 0.552 0.448 1 1 1h7.002c0.553 0 1-0.448 1-1v-20c0-0.553-0.447-1-1-1zM7.502 30h-5.002v-18h5.002v18zM19.492 15.945h-7.003c-0.553 0-1 0.448-1 1v14.055c0 0.552 0.447 1 1 1h7.003c0.552 0 1-0.448 1-1v-14.055c0-0.553-0.447-1-1-1zM18.492 30h-5.003v-12.055h5.003v12.055zM30.5 0h-6.992c-0.552 0-1 0.448-1 1v30c0 0.552 0.448 1 1 1h6.992c0.552 0 1-0.448 1-1v-30c0-0.552-0.448-1-1-1zM29.5 30h-4.992v-28h4.992v28z"></path>
                                </svg>
                            </div>

                            <span class="item-name h4 font-thin">Charts</span>
                        </div>
                        <div class="linear-gradient h-1/2 bg-primary w-xs mt-3 mb-3" style="height: 2px;"></div>
                        <div class="item-desc">
                            Show the dynamics of changes using SVG graphs of different types:
                            'bar', 'line', 'pie' or 'percentage', which can be exported.
                        </div>
                    </div>

                </div>


            </div>

            <div class="row padder-v mt-md-3">
                <div class="col col-12 col-md-4 m-md-0 mb-4 py-2">
                    <div class="item">
                        <div class="h3 v-center text-black">

                            <div class="hero-icon d-flex flex-justify-center p-2 mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 32 32" fill="currentColor">
                                    <path d="M32.032 16c0-8.501-6.677-15.472-15.072-15.969-0.173-0.019-0.346-0.032-0.523-0.032-0.052 0-0.104 0.005-0.156 0.007-0.093-0.002-0.186-0.007-0.281-0.007-8.84 0-16.032 7.178-16.032 16.001s7.192 16.001 16.032 16.001c0.094 0 0.188-0.006 0.281-0.008 0.052 0.002 0.104 0.008 0.156 0.008 0.176 0 0.349-0.012 0.523-0.032 8.395-0.497 15.072-7.468 15.072-15.969zM29.049 21.151c-0.551-0.16-1.935-0.507-4.377-0.794 0.202-1.381 0.313-2.84 0.313-4.357 0-1.196-0.069-2.354-0.197-3.469 3.094-0.37 4.45-0.835 4.54-0.867l-0.372-1.050c0.695 1.659 1.080 3.478 1.080 5.386 0 1.818-0.352 3.555-0.987 5.151zM8.921 16c0-1.119 0.074-2.212 0.21-3.263 1.621 0.127 3.561 0.222 5.839 0.243v6.939c-2.219 0.021-4.114 0.111-5.709 0.234-0.22-1.319-0.34-2.715-0.34-4.154zM16.967 2.132c2.452 0.711 4.552 4.115 5.492 8.628-1.512 0.12-3.332 0.209-5.492 0.229v-8.857zM14.971 2.156v8.832c-2.136-0.021-3.965-0.109-5.502-0.226 0.96-4.457 3.076-7.836 5.502-8.606zM14.971 21.913l0 7.929c-2.263-0.718-4.256-3.705-5.293-7.719 1.492-0.11 3.253-0.189 5.292-0.21zM16.967 29.868l-0-7.955c2.061 0.020 3.814 0.102 5.288 0.217-1.019 4.067-3 7.076-5.288 7.738zM16.967 19.92l0-6.939c2.291-0.021 4.218-0.118 5.818-0.25 0.131 1.053 0.203 2.147 0.203 3.268 0 1.442-0.116 2.84-0.329 4.16-1.575-0.128-3.462-0.219-5.692-0.24zM28.588 9.81c-0.302 0.094-1.564 0.453-4.094 0.751-0.564-2.998-1.584-5.561-2.91-7.412 3.048 1.325 5.535 3.697 7.005 6.661zM11.213 2.831c-1.632 1.873-2.963 4.568-3.691 7.754-2.265-0.245-3.623-0.534-4.166-0.665 1.585-3.27 4.407-5.836 7.856-7.088zM2.614 11.787c0.385 0.104 1.841 0.467 4.549 0.766-0.155 1.107-0.24 2.26-0.24 3.447 0 1.509 0.136 2.96 0.383 4.334-2.325 0.251-3.755 0.552-4.396 0.706-0.607-1.566-0.944-3.264-0.944-5.041 0-1.467 0.228-2.883 0.649-4.213zM3.784 22.886c0.727-0.154 2.029-0.39 3.956-0.591 0.759 2.803 1.993 5.175 3.473 6.874-3.16-1.148-5.79-3.398-7.429-6.282v0zM21.583 28.849c1.195-1.665 2.14-3.907 2.728-6.525 1.982 0.227 3.226 0.494 3.853 0.652-1.5 2.596-3.808 4.669-6.581 5.873z"></path>
                                </svg>
                            </div>

                            <span class="item-name h4 font-thin">Localization</span>
                        </div>
                        <div class="linear-gradient h-1/2 bg-primary w-xs mt-3 mb-3" style="height: 2px;"></div>
                        <div class="item-desc">
                            Users from different countries? You can translate into any language of your choice. All texts in the entire application can be translated.
                        </div>
                    </div>
                </div>


                <div class="col col-12 col-md-4 m-md-0 mb-4 py-2">


                    <div class="item">
                        <div class="h3 v-center text-black">

                            <div class="hero-icon d-flex flex-justify-center p-2 mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="1em" height="1em" fill="currentColor">
                                    <path d="M24.98 30.009h-23v-25h14.050l2.022-1.948-0.052-0.052h-16.020c-1.105 0-2 0.896-2 2v25c0 1.105 0.895 2 2 2h23c1.105 0 2-0.895 2-2v-14.646l-2 1.909v12.736zM30.445 1.295c-0.902-0.865-1.898-1.304-2.961-1.304-1.663 0-2.876 1.074-3.206 1.403-0.468 0.462-13.724 13.699-13.724 13.699-0.104 0.106-0.18 0.235-0.219 0.38-0.359 1.326-2.159 7.218-2.176 7.277-0.093 0.302-0.010 0.631 0.213 0.851 0.159 0.16 0.373 0.245 0.591 0.245 0.086 0 0.172-0.012 0.257-0.039 0.061-0.020 6.141-1.986 7.141-2.285 0.132-0.039 0.252-0.11 0.351-0.207 0.631-0.623 12.816-12.618 13.802-13.637 1.020-1.052 1.526-2.146 1.507-3.253-0.019-1.094-0.55-2.147-1.575-3.129zM29.076 6.285c-0.556 0.574-4.914 4.88-12.952 12.798l-0.615 0.607c-0.921 0.285-3.128 0.994-4.796 1.532 0.537-1.773 1.181-3.916 1.469-4.929 1.717-1.715 13.075-13.055 13.506-13.48 0.084-0.084 0.851-0.821 1.795-0.821 0.536 0 1.053 0.244 1.577 0.748 0.627 0.602 0.95 1.179 0.959 1.72 0.010 0.556-0.308 1.171-0.943 1.827z"></path>
                                </svg>
                            </div>

                            <span class="item-name h4 font-thin">Form builder</span>
                        </div>
                        <div class="linear-gradient h-1/2 bg-primary w-xs mt-3 mb-3" style="height: 2px;"></div>
                        <div class="item-desc">
                            There is no need to describe forms of the same type in html. There are many custom fields
                            prepared that are easy to use.
                        </div>
                    </div>

                </div>

                <div class="col col-12 col-md-4 m-md-0 mb-4 py-2">


                    <div class="item">
                        <div class="h3 v-center text-black">

                            <div class="hero-icon d-flex flex-justify-center p-2 mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="1em" height="1em" fill="currentColor">
                                    <path d="M0.682 9.431l14.847 8.085c0.149 0.081 0.313 0.122 0.479 0.122 0.163 0 0.326-0.040 0.474-0.12l15.003-8.085c0.327-0.176 0.53-0.52 0.525-0.892s-0.216-0.711-0.547-0.88l-14.848-7.54c-0.283-0.143-0.617-0.144-0.902-0.002l-15.002 7.54c-0.332 0.167-0.545 0.505-0.551 0.877s0.196 0.717 0.521 0.895zM16.161 2.134l12.692 6.446-12.843 6.921-12.693-6.912zM31.292 15.010l-2.968-1.507-2.142 1.155 2.5 1.27-12.842 6.921-12.694-6.912 2.666-1.34-2.136-1.164-3.135 1.575c-0.332 0.167-0.545 0.505-0.551 0.877s0.196 0.717 0.521 0.895l14.847 8.085c0.149 0.081 0.313 0.122 0.479 0.122 0.163 0 0.326-0.040 0.474-0.12l15.003-8.085c0.327-0.176 0.53-0.52 0.525-0.892s-0.215-0.711-0.546-0.88zM31.292 22.010l-2.811-1.382-2.142 1.155 2.344 1.145-12.843 6.921-12.694-6.912 2.478-1.121-2.136-1.164-2.947 1.357c-0.332 0.167-0.545 0.505-0.551 0.877s0.196 0.717 0.521 0.895l14.847 8.085c0.149 0.081 0.313 0.122 0.479 0.122 0.163 0 0.326-0.040 0.475-0.12l15.003-8.085c0.327-0.176 0.53-0.52 0.525-0.892-0.005-0.373-0.215-0.712-0.546-0.88z"></path>
                                </svg>
                            </div>

                            <span class="item-name h4 font-thin">Various Interface Elements</span>
                        </div>
                        <div class="linear-gradient h-1/2 bg-primary w-xs mt-3 mb-3" style="height: 2px;"></div>
                        <div class="item-desc">
                            Display information in the form of rows, tables, columns, tabs, modal windows.
                        </div>
                    </div>

                </div>


            </div>

            <div class="row padder-v mt-md-3 pb-sm-5">


                <div class="col col-12 col-md-4 m-md-0 mb-4 py-2">


                    <div class="item">
                        <div class="h3 v-center text-black">

                            <div class="hero-icon d-flex flex-justify-center p-2 mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="1em" height="1em" fill="currentColor">
                                    <path d="M22.005 0h-12.009c-1.657 0-3 1.343-3 3v26c0 1.657 1.343 3 3 3h12.009c1.657 0 3-1.343 3-3v-26c0-1.657-1.343-3-3-3zM23.005 29c0 0.552-0.448 1-1 1h-12.009c-0.552 0-1-0.448-1-1v-26c0-0.552 0.448-1 1-1h12.009c0.552 0 1 0.448 1 1v26zM16.002 25.006c-1.102 0-1.995 0.893-1.995 1.994s0.893 1.995 1.995 1.995c1.102 0 1.995-0.894 1.995-1.995s-0.892-1.994-1.995-1.994zM18.002 3h-4c-0.552 0-1 0.448-1 1s0.448 1 1 1h4c0.552 0 1-0.448 1-1s-0.448-1-1-1z"></path>
                                </svg>
                            </div>

                            <span class="item-name h4 font-thin">In Motion</span>
                        </div>
                        <div class="linear-gradient h-1/2 bg-primary w-xs mt-3 mb-3" style="height: 2px;"></div>
                        <div class="item-desc">
                            There is no need to tie employees to the workplace. All of these cool things can be used from a mobile device, tablet, or desktop computer.
                        </div>
                    </div>

                </div>

            </div>


        </div>
    </section>



    <section class="border-top">
        <div class="container  my-5">


            <div class="row justify-content-center text-black mb-4">
                <div class="col-12">

                    <h2 class="center text-dark font-thin w-75 padder-v mb-3 pt-5 ml-0 display-6">
                        <span class="font-bold">Testimonials</span>
                    </h2>

                    <p class="lead px-lg-8">
                        Over the years, the package has helped many developers to create high-quality applications<br>
                        with a minimum of attention to administration panels.
                    </p>
                </div>
            </div>



            <div class="row mt-5 align-items-center justify-content-center">

                <div class="col-md-8 col-lg-4">
                    <div class="shadow-sm p-4 border-top b-primary">
                        <div class="row no-gutters align-items-center">
                            <div class="col-4">
                                <img alt="image" class="img-fluid rounded" src="/assets/img/testimonials/Pavlov-Pavel.jpg">
                            </div>
                            <div class="col-auto mr-auto">
                                <strong>Pavlov Pavel</strong><br>
                                <small class="text-muted">Russia, Shira</small>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12">
                                <p class="font-weight-light">
                                    For me, Orchid appeared at the same time as Laravel because for learning Laravel,
                                    I started looking for the admin panel and chose the Orchid Platform. At the moment,
                                    I am doing all projects on Orchid. The main advantage of Orchid is that you can get started quickly,
                                    and in a short time, you can get to the very essence of the project. And then, it is easy to scale
                                    the project. Another huge plus in the Orchid Platform, this structure of the code's organization,
                                    learning, which helps to speed up development in other projects.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 col-lg-4 mt-4 mt-lg-0">
                    <div class="shadow-sm p-4 border-top b-primary">
                        <div class="row no-gutters align-items-center">
                            <div class="col-4">
                                <img alt="image" class="img-fluid rounded" src="/assets/img/testimonials/Lemys-Lopez.jpg">
                            </div>
                            <div class="col-auto mr-auto">
                                <strong>Lemys López</strong><br>
                                <small class="text-muted">Venezuela, Valencia.</small>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12">
                                <p class="font-weight-light">
                                    The laravel ecosystem is vast as mature. But as an aged web developer,
                                    I realize that "richness" is not enough, I need a stable and well-designed open source platform,
                                    in terms of architecture and principles which allows to me and my team ship solutions fast,
                                    with an easy to maintain base code and without all the common fancy "automatic magic" that
                                    might be complex to adapt and useless most of the time. Orchid-platform is all that and more,
                                    Orchid-Platform boost out our productivity in levels that i can't almost not to believe with
                                    beautiful and expressive resulting code. Orchid-platform is application-nature agnostic but
                                    it fits like no other package on administrative kind of Solutions.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 col-lg-4 mt-4 mt-lg-0">
                    <div class="shadow-sm p-4 border-top b-primary">
                        <div class="row no-gutters align-items-center">
                            <div class="col-4">
                                <img alt="image" class="img-fluid rounded" src="/assets/img/testimonials/Vladislav-Ponomarev.jpg">
                            </div>
                            <div class="col-auto mr-auto">
                                <strong>Vladislav Ponomarev</strong><br>
                                <small class="text-muted">Russia, Krasnodar</small>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12">
                                <p class="font-weight-light">

                                    Before meeting Orchid, I constantly had to write the admin panel from scratch.
                                    It was such a "pleasure". I first heard about Orchid in a podcast on "Five Minutes PHP".
                                    After reading the documentation, I decided to try it, and I still use it. Orchid fits most projects I develop and scales well. If you have any questions,
                                    you will always be helped in the project's official Telegram chat. Although the answers to most of the questions are in the documentation.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </section>




    <section class="pos-rlt no-overflow hidden-xs">
        <div class="container">
            <div class="row my-5 align-items-end">
                <div class="col-md-6 col-12 pt-md-5 mb-md-2">
                        <a href="https://github.com/orchidsoftware/platform">
                            <img src="/assets/img/github_logo.png" alt="Github" class="m-b-lg">
                        </a>
                        <p class="l-h-1x text-dark font-thin m-b-lg display-6"> @yield('github.title')</p>
                        <p>@yield('github.description')</p>
                </div>

                <div class="col-md-6 col-12 pt-md-5 mb-md-2">
                    <a href="https://opencollective.com/orchid#backers" target="_blank">
                        <img src="https://opencollective.com/orchid/backers.svg" class="img-fluid">
                    </a>

                    <p class="text-muted mt-4">@yield('github.help')</p>
                </div>
            </div>
        </div>



    </section>


    {{--
    <div class="bg-white-only">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-7 text-center mt-5 ">
                    <p class="display-6 text-black font-weight-light mb-3 mt-2">Its not just a Dashboard</p>
                    <p class="lead">
                        Stop wasting time trying to do it the "right way" and build your app from scratch.
                        Orchid is faster, easier, and you still have complete control.
                    </p>
                    <p class="mt-5 mt-sm-4">

                        <a href="/@yield('lang')/docs"
                           class="btn btn-lg btn-outline-primary btn-rounded">

                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 32 32" fill="currentColor">
                                <path d="M29.753 0.049l-13.22 3.581c-0.336 0.090-1.066 0.089-1.4-0.005l-12.88-3.569c-1.149-0.317-2.263 0.512-2.263 1.696v24.316c0 1.003 0.76 1.962 1.728 2.232l12.88 3.57c0.345 0.096 0.788 0.149 1.248 0.149 0.315 0 0.781-0.024 1.21-0.142l13.22-3.581c0.971-0.262 1.734-1.22 1.734-2.227v-24.317c0.001-1.183-1.113-2.014-2.258-1.703zM15 29.904l-12.779-3.533c-0.096-0.026-0.232-0.203-0.232-0.303v-24.001l12.608 3.486c0.122 0.034 0.259 0.061 0.402 0.083v24.269zM30.010 26.068c0 0.099-0.162 0.27-0.258 0.297l-12.753 3.454v-24.247c0.018-0.005 0.038-0.007 0.056-0.012l12.954-3.504v24.012h0zM20.062 11.447c0.090 0 0.182-0.011 0.272-0.037l6.998-1.97c0.532-0.15 0.842-0.702 0.692-1.234s-0.705-0.84-1.234-0.692l-6.998 1.97c-0.532 0.15-0.842 0.702-0.692 1.234 0.124 0.441 0.525 0.729 0.962 0.729zM20.063 17.447c0.090 0 0.182-0.012 0.272-0.037l6.998-1.97c0.532-0.15 0.842-0.702 0.692-1.234s-0.705-0.84-1.234-0.693l-6.998 1.97c-0.532 0.15-0.842 0.702-0.692 1.233 0.124 0.442 0.525 0.73 0.962 0.73zM20.063 23.447c0.090 0 0.182-0.012 0.272-0.037l6.998-1.97c0.532-0.151 0.842-0.702 0.692-1.234s-0.705-0.84-1.234-0.692l-6.998 1.97c-0.532 0.151-0.842 0.702-0.692 1.234 0.124 0.441 0.525 0.73 0.962 0.73zM12.332 9.484l-6.998-1.97c-0.529-0.147-1.084 0.161-1.234 0.692s0.16 1.083 0.692 1.234l6.998 1.97c0.090 0.025 0.181 0.037 0.271 0.037 0.437 0 0.838-0.288 0.962-0.729 0.149-0.531-0.16-1.083-0.693-1.234zM12.332 15.484l-6.998-1.97c-0.529-0.148-1.084 0.161-1.234 0.693s0.16 1.083 0.692 1.234l6.998 1.97c0.090 0.026 0.181 0.037 0.271 0.037 0.437 0 0.838-0.288 0.962-0.73 0.149-0.531-0.16-1.083-0.693-1.234zM12.332 21.484l-6.998-1.97c-0.529-0.148-1.084 0.161-1.234 0.692s0.16 1.083 0.692 1.234l6.998 1.97c0.090 0.026 0.181 0.037 0.271 0.037 0.437 0 0.838-0.288 0.962-0.73 0.149-0.532-0.16-1.083-0.693-1.234z"></path>
                            </svg>

                            @yield('read.doc')
                        </a>

                    </p>

                    <p class="small opacity-75">
                        We value your privacy. None of the details supplied will be shared with external parties.
                    </p>
                </div>
            </div>
        </div>
    </div>
--}}

@endsection
