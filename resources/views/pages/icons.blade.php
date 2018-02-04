@extends('layouts.app')

@section('title','Icons')
@section('description','Icons')


@section('content')


    <div class="bg-white-only">

        <div class="container">
            <div class="row m-t-md m-b-md">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h1 class="font-thin l-h-1x text-black">
                        Icons Preview
                    </h1>
                    <p class="text-muted m-b-lg">
                        Click on the icons to get the icon class name
                    </p>
                    <hr>
                </div>

                <div class="col-xs-12 padder-v">
                    <div class="quick-search">
                        <input type="text" id="quick-search" placeholder="Search..."/>
                        <i class="icon-magnifier"></i>
                    </div>
                    <div class="text-center font-size-changer">
                        <a href="#" class="small-icons"><i class="icon-info"></i> Small</a> &bull;
                        <a href="#" class="medium-icons active"><i class="icon-info"></i> Medium</a> &bull;
                        <a href="#" class="large-icons"><i class="icon-info"></i> Large</a>
                    </div>
                </div>



                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-user icons"></i><span class="name">user</span> <code
                                    class="code-preview">.icon-user</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-people icons"></i><span
                                    class="name">people</span> <code class="code-preview">.icon-people</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-user-female icons"></i><span class="name">user-female</span> <code
                                    class="code-preview">.icon-user-female</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-user-follow icons"></i><span class="name">user-follow</span> <code
                                    class="code-preview">.icon-user-follow</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-user-following icons"></i><span class="name">user-following</span> <code
                                    class="code-preview">.icon-user-following</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-user-unfollow icons"></i><span class="name">user-unfollow</span> <code
                                    class="code-preview">.icon-user-unfollow</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-login icons"></i><span class="name">login</span> <code
                                    class="code-preview">.icon-login</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-logout icons"></i><span
                                    class="name">logout</span> <code class="code-preview">.icon-logout</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-emotsmile icons"></i><span class="name">emotsmile</span> <code
                                    class="code-preview">.icon-emotsmile</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-phone icons"></i><span class="name">phone</span> <code
                                    class="code-preview">.icon-phone</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-call-end icons"></i><span class="name">call-end</span> <code
                                    class="code-preview">.icon-call-end</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-call-in icons"></i><span class="name">call-in</span> <code
                                    class="code-preview">.icon-call-in</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-call-out icons"></i><span class="name">call-out</span> <code
                                    class="code-preview">.icon-call-out</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-map icons"></i><span class="name">map</span> <code class="code-preview">.icon-map</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-location-pin icons"></i><span class="name">location-pin</span> <code
                                    class="code-preview">.icon-location-pin</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-direction icons"></i><span class="name">direction</span> <code
                                    class="code-preview">.icon-direction</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-directions icons"></i><span class="name">directions</span> <code
                                    class="code-preview">.icon-directions</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-compass icons"></i><span class="name">compass</span> <code
                                    class="code-preview">.icon-compass</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-layers icons"></i><span
                                    class="name">layers</span> <code class="code-preview">.icon-layers</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-menu icons"></i><span class="name">menu</span> <code
                                    class="code-preview">.icon-menu</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-list icons"></i><span class="name">list</span> <code
                                    class="code-preview">.icon-list</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-options-vertical icons"></i><span class="name">options-vertical</span>
                            <code
                                    class="code-preview">.icon-options-vertical</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-options icons"></i><span class="name">options</span> <code
                                    class="code-preview">.icon-options</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-arrow-down icons"></i><span class="name">arrow-down</span> <code
                                    class="code-preview">.icon-arrow-down</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-arrow-left icons"></i><span class="name">arrow-left</span> <code
                                    class="code-preview">.icon-arrow-left</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-arrow-right icons"></i><span class="name">arrow-right</span> <code
                                    class="code-preview">.icon-arrow-right</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-arrow-up icons"></i><span class="name">arrow-up</span> <code
                                    class="code-preview">.icon-arrow-up</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-arrow-up-circle icons"></i><span class="name">arrow-up-circle</span>
                            <code
                                    class="code-preview">.icon-arrow-up-circle</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-arrow-left-circle icons"></i><span class="name">arrow-left-circle</span>
                            <code class="code-preview">.icon-arrow-left-circle</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-arrow-right-circle icons"></i><span
                                    class="name">arrow-right-circle</span>
                            <code class="code-preview">.icon-arrow-right-circle</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-arrow-down-circle icons"></i><span class="name">arrow-down-circle</span>
                            <code class="code-preview">.icon-arrow-down-circle</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-check icons"></i><span class="name">check</span> <code
                                    class="code-preview">.icon-check</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-clock icons"></i><span class="name">clock</span> <code
                                    class="code-preview">.icon-clock</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-plus icons"></i><span class="name">plus</span> <code
                                    class="code-preview">.icon-plus</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-minus icons"></i><span class="name">minus</span> <code
                                    class="code-preview">.icon-minus</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-close icons"></i><span class="name">close</span> <code
                                    class="code-preview">.icon-close</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-event icons"></i><span class="name">event</span> <code
                                    class="code-preview">.icon-event</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-exclamation icons"></i><span class="name">exclamation</span> <code
                                    class="code-preview">.icon-exclamation</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-organization icons"></i><span class="name">organization</span> <code
                                    class="code-preview">.icon-organization</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-trophy icons"></i><span
                                    class="name">trophy</span> <code class="code-preview">.icon-trophy</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-screen-smartphone icons"></i><span class="name">screen-smartphone</span>
                            <code class="code-preview">.icon-screen-smartphone</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-screen-desktop icons"></i><span class="name">screen-desktop</span> <code
                                    class="code-preview">.icon-screen-desktop</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-plane icons"></i><span class="name">plane</span> <code
                                    class="code-preview">.icon-plane</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-notebook icons"></i><span class="name">notebook</span> <code
                                    class="code-preview">.icon-notebook</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-mustache icons"></i><span class="name">mustache</span> <code
                                    class="code-preview">.icon-mustache</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-mouse icons"></i><span class="name">mouse</span> <code
                                    class="code-preview">.icon-mouse</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-magnet icons"></i><span
                                    class="name">magnet</span> <code class="code-preview">.icon-magnet</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-energy icons"></i><span
                                    class="name">energy</span> <code class="code-preview">.icon-energy</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-disc icons"></i><span class="name">disc</span> <code
                                    class="code-preview">.icon-disc</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-cursor icons"></i><span
                                    class="name">cursor</span> <code class="code-preview">.icon-cursor</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-cursor-move icons"></i><span class="name">cursor-move</span> <code
                                    class="code-preview">.icon-cursor-move</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-crop icons"></i><span class="name">crop</span> <code
                                    class="code-preview">.icon-crop</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-chemistry icons"></i><span class="name">chemistry</span> <code
                                    class="code-preview">.icon-chemistry</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-speedometer icons"></i><span class="name">speedometer</span> <code
                                    class="code-preview">.icon-speedometer</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-shield icons"></i><span
                                    class="name">shield</span> <code class="code-preview">.icon-shield</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-screen-tablet icons"></i><span class="name">screen-tablet</span> <code
                                    class="code-preview">.icon-screen-tablet</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-magic-wand icons"></i><span class="name">magic-wand</span> <code
                                    class="code-preview">.icon-magic-wand</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-hourglass icons"></i><span class="name">hourglass</span> <code
                                    class="code-preview">.icon-hourglass</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-graduation icons"></i><span class="name">graduation</span> <code
                                    class="code-preview">.icon-graduation</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-ghost icons"></i><span class="name">ghost</span> <code
                                    class="code-preview">.icon-ghost</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-game-controller icons"></i><span class="name">game-controller</span>
                            <code
                                    class="code-preview">.icon-game-controller</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-fire icons"></i><span class="name">fire</span> <code
                                    class="code-preview">.icon-fire</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-eyeglass icons"></i><span class="name">eyeglass</span> <code
                                    class="code-preview">.icon-eyeglass</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-envelope-open icons"></i><span class="name">envelope-open</span> <code
                                    class="code-preview">.icon-envelope-open</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-envelope-letter icons"></i><span class="name">envelope-letter</span>
                            <code
                                    class="code-preview">.icon-envelope-letter</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-bell icons"></i><span class="name">bell</span> <code
                                    class="code-preview">.icon-bell</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-badge icons"></i><span class="name">badge</span> <code
                                    class="code-preview">.icon-badge</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-anchor icons"></i><span
                                    class="name">anchor</span> <code class="code-preview">.icon-anchor</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-wallet icons"></i><span
                                    class="name">wallet</span> <code class="code-preview">.icon-wallet</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-vector icons"></i><span
                                    class="name">vector</span> <code class="code-preview">.icon-vector</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-speech icons"></i><span
                                    class="name">speech</span> <code class="code-preview">.icon-speech</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-puzzle icons"></i><span
                                    class="name">puzzle</span> <code class="code-preview">.icon-puzzle</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-printer icons"></i><span class="name">printer</span> <code
                                    class="code-preview">.icon-printer</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-present icons"></i><span class="name">present</span> <code
                                    class="code-preview">.icon-present</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-playlist icons"></i><span class="name">playlist</span> <code
                                    class="code-preview">.icon-playlist</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-pin icons"></i><span class="name">pin</span> <code class="code-preview">.icon-pin</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-picture icons"></i><span class="name">picture</span> <code
                                    class="code-preview">.icon-picture</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-handbag icons"></i><span class="name">handbag</span> <code
                                    class="code-preview">.icon-handbag</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-globe-alt icons"></i><span class="name">globe-alt</span> <code
                                    class="code-preview">.icon-globe-alt</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-globe icons"></i><span class="name">globe</span> <code
                                    class="code-preview">.icon-globe</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-folder-alt icons"></i><span class="name">folder-alt</span> <code
                                    class="code-preview">.icon-folder-alt</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-folder icons"></i><span
                                    class="name">folder</span> <code class="code-preview">.icon-folder</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-film icons"></i><span class="name">film</span> <code
                                    class="code-preview">.icon-film</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-feed icons"></i><span class="name">feed</span> <code
                                    class="code-preview">.icon-feed</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-drop icons"></i><span class="name">drop</span> <code
                                    class="code-preview">.icon-drop</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-drawer icons"></i><span
                                    class="name">drawer</span> <code class="code-preview">.icon-drawer</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-docs icons"></i><span class="name">docs</span> <code
                                    class="code-preview">.icon-docs</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-doc icons"></i><span class="name">doc</span> <code class="code-preview">.icon-doc</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-diamond icons"></i><span class="name">diamond</span> <code
                                    class="code-preview">.icon-diamond</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-cup icons"></i><span class="name">cup</span> <code class="code-preview">.icon-cup</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-calculator icons"></i><span class="name">calculator</span> <code
                                    class="code-preview">.icon-calculator</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-bubbles icons"></i><span class="name">bubbles</span> <code
                                    class="code-preview">.icon-bubbles</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-briefcase icons"></i><span class="name">briefcase</span> <code
                                    class="code-preview">.icon-briefcase</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-book-open icons"></i><span class="name">book-open</span> <code
                                    class="code-preview">.icon-book-open</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-basket-loaded icons"></i><span class="name">basket-loaded</span> <code
                                    class="code-preview">.icon-basket-loaded</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-basket icons"></i><span
                                    class="name">basket</span> <code class="code-preview">.icon-basket</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-bag icons"></i><span class="name">bag</span> <code class="code-preview">.icon-bag</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-action-undo icons"></i><span class="name">action-undo</span> <code
                                    class="code-preview">.icon-action-undo</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-action-redo icons"></i><span class="name">action-redo</span> <code
                                    class="code-preview">.icon-action-redo</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-wrench icons"></i><span
                                    class="name">wrench</span> <code class="code-preview">.icon-wrench</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-umbrella icons"></i><span class="name">umbrella</span> <code
                                    class="code-preview">.icon-umbrella</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-trash icons"></i><span class="name">trash</span> <code
                                    class="code-preview">.icon-trash</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-tag icons"></i><span class="name">tag</span> <code class="code-preview">.icon-tag</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-support icons"></i><span class="name">support</span> <code
                                    class="code-preview">.icon-support</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-frame icons"></i><span class="name">frame</span> <code
                                    class="code-preview">.icon-frame</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-size-fullscreen icons"></i><span class="name">size-fullscreen</span>
                            <code
                                    class="code-preview">.icon-size-fullscreen</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-size-actual icons"></i><span class="name">size-actual</span> <code
                                    class="code-preview">.icon-size-actual</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-shuffle icons"></i><span class="name">shuffle</span> <code
                                    class="code-preview">.icon-shuffle</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-share-alt icons"></i><span class="name">share-alt</span> <code
                                    class="code-preview">.icon-share-alt</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-share icons"></i><span class="name">share</span> <code
                                    class="code-preview">.icon-share</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-rocket icons"></i><span
                                    class="name">rocket</span> <code class="code-preview">.icon-rocket</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-question icons"></i><span class="name">question</span> <code
                                    class="code-preview">.icon-question</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-pie-chart icons"></i><span class="name">pie-chart</span> <code
                                    class="code-preview">.icon-pie-chart</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-pencil icons"></i><span
                                    class="name">pencil</span> <code class="code-preview">.icon-pencil</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-note icons"></i><span class="name">note</span> <code
                                    class="code-preview">.icon-note</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-loop icons"></i><span class="name">loop</span> <code
                                    class="code-preview">.icon-loop</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-home icons"></i><span class="name">home</span> <code
                                    class="code-preview">.icon-home</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-grid icons"></i><span class="name">grid</span> <code
                                    class="code-preview">.icon-grid</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-graph icons"></i><span class="name">graph</span> <code
                                    class="code-preview">.icon-graph</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-microphone icons"></i><span class="name">microphone</span> <code
                                    class="code-preview">.icon-microphone</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-music-tone-alt icons"></i><span class="name">music-tone-alt</span> <code
                                    class="code-preview">.icon-music-tone-alt</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-music-tone icons"></i><span class="name">music-tone</span> <code
                                    class="code-preview">.icon-music-tone</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-earphones-alt icons"></i><span class="name">earphones-alt</span> <code
                                    class="code-preview">.icon-earphones-alt</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-earphones icons"></i><span class="name">earphones</span> <code
                                    class="code-preview">.icon-earphones</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-equalizer icons"></i><span class="name">equalizer</span> <code
                                    class="code-preview">.icon-equalizer</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-like icons"></i><span class="name">like</span> <code
                                    class="code-preview">.icon-like</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-dislike icons"></i><span class="name">dislike</span> <code
                                    class="code-preview">.icon-dislike</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-control-start icons"></i><span class="name">control-start</span> <code
                                    class="code-preview">.icon-control-start</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-control-rewind icons"></i><span class="name">control-rewind</span> <code
                                    class="code-preview">.icon-control-rewind</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-control-play icons"></i><span class="name">control-play</span> <code
                                    class="code-preview">.icon-control-play</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-control-pause icons"></i><span class="name">control-pause</span> <code
                                    class="code-preview">.icon-control-pause</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-control-forward icons"></i><span class="name">control-forward</span>
                            <code
                                    class="code-preview">.icon-control-forward</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-control-end icons"></i><span class="name">control-end</span> <code
                                    class="code-preview">.icon-control-end</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-volume-1 icons"></i><span class="name">volume-1</span> <code
                                    class="code-preview">.icon-volume-1</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-volume-2 icons"></i><span class="name">volume-2</span> <code
                                    class="code-preview">.icon-volume-2</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-volume-off icons"></i><span class="name">volume-off</span> <code
                                    class="code-preview">.icon-volume-off</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-calendar icons"></i><span class="name">calendar</span> <code
                                    class="code-preview">.icon-calendar</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-bulb icons"></i><span class="name">bulb</span> <code
                                    class="code-preview">.icon-bulb</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-chart icons"></i><span class="name">chart</span> <code
                                    class="code-preview">.icon-chart</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-ban icons"></i><span class="name">ban</span> <code class="code-preview">.icon-ban</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-bubble icons"></i><span
                                    class="name">bubble</span> <code class="code-preview">.icon-bubble</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-camrecorder icons"></i><span class="name">camrecorder</span> <code
                                    class="code-preview">.icon-camrecorder</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-camera icons"></i><span
                                    class="name">camera</span> <code class="code-preview">.icon-camera</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-cloud-download icons"></i><span class="name">cloud-download</span> <code
                                    class="code-preview">.icon-cloud-download</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-cloud-upload icons"></i><span class="name">cloud-upload</span> <code
                                    class="code-preview">.icon-cloud-upload</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-envelope icons"></i><span class="name">envelope</span> <code
                                    class="code-preview">.icon-envelope</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-eye icons"></i><span class="name">eye</span> <code class="code-preview">.icon-eye</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-flag icons"></i><span class="name">flag</span> <code
                                    class="code-preview">.icon-flag</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-heart icons"></i><span class="name">heart</span> <code
                                    class="code-preview">.icon-heart</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-info icons"></i><span class="name">info</span> <code
                                    class="code-preview">.icon-info</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-key icons"></i><span class="name">key</span> <code class="code-preview">.icon-key</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-link icons"></i><span class="name">link</span> <code
                                    class="code-preview">.icon-link</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-lock icons"></i><span class="name">lock</span> <code
                                    class="code-preview">.icon-lock</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-lock-open icons"></i><span class="name">lock-open</span> <code
                                    class="code-preview">.icon-lock-open</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-magnifier icons"></i><span class="name">magnifier</span> <code
                                    class="code-preview">.icon-magnifier</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-magnifier-add icons"></i><span class="name">magnifier-add</span> <code
                                    class="code-preview">.icon-magnifier-add</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-magnifier-remove icons"></i><span class="name">magnifier-remove</span>
                            <code
                                    class="code-preview">.icon-magnifier-remove</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-paper-clip icons"></i><span class="name">paper-clip</span> <code
                                    class="code-preview">.icon-paper-clip</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-paper-plane icons"></i><span class="name">paper-plane</span> <code
                                    class="code-preview">.icon-paper-plane</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-power icons"></i><span class="name">power</span> <code
                                    class="code-preview">.icon-power</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-refresh icons"></i><span class="name">refresh</span> <code
                                    class="code-preview">.icon-refresh</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-reload icons"></i><span
                                    class="name">reload</span> <code class="code-preview">.icon-reload</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-settings icons"></i><span class="name">settings</span> <code
                                    class="code-preview">.icon-settings</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-star icons"></i><span class="name">star</span> <code
                                    class="code-preview">.icon-star</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-symbol-female icons"></i><span class="name">symbol-female</span> <code
                                    class="code-preview">.icon-symbol-female</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-symbol-male icons"></i><span class="name">symbol-male</span> <code
                                    class="code-preview">.icon-symbol-male</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-target icons"></i><span
                                    class="name">target</span> <code class="code-preview">.icon-target</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-credit-card icons"></i><span class="name">credit-card</span> <code
                                    class="code-preview">.icon-credit-card</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-paypal icons"></i><span
                                    class="name">paypal</span> <code class="code-preview">.icon-paypal</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-social-tumblr icons"></i><span class="name">social-tumblr</span> <code
                                    class="code-preview">.icon-social-tumblr</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-social-twitter icons"></i><span class="name">social-twitter</span> <code
                                    class="code-preview">.icon-social-twitter</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-social-facebook icons"></i><span class="name">social-facebook</span>
                            <code
                                    class="code-preview">.icon-social-facebook</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-social-instagram icons"></i><span class="name">social-instagram</span>
                            <code
                                    class="code-preview">.icon-social-instagram</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-social-linkedin icons"></i><span class="name">social-linkedin</span>
                            <code
                                    class="code-preview">.icon-social-linkedin</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-social-pinterest icons"></i><span class="name">social-pinterest</span>
                            <code
                                    class="code-preview">.icon-social-pinterest</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-social-github icons"></i><span class="name">social-github</span> <code
                                    class="code-preview">.icon-social-github</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-social-google icons"></i><span class="name">social-google</span> <code
                                    class="code-preview">.icon-social-google</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-social-reddit icons"></i><span class="name">social-reddit</span> <code
                                    class="code-preview">.icon-social-reddit</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-social-skype icons"></i><span class="name">social-skype</span> <code
                                    class="code-preview">.icon-social-skype</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-social-dribbble icons"></i><span class="name">social-dribbble</span>
                            <code
                                    class="code-preview">.icon-social-dribbble</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-social-behance icons"></i><span class="name">social-behance</span> <code
                                    class="code-preview">.icon-social-behance</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-social-foursqare icons"></i><span class="name">social-foursqare</span>
                            <code
                                    class="code-preview">.icon-social-foursqare</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-social-soundcloud icons"></i><span class="name">social-soundcloud</span>
                            <code class="code-preview">.icon-social-soundcloud</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-social-spotify icons"></i><span class="name">social-spotify</span> <code
                                    class="code-preview">.icon-social-spotify</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-social-stumbleupon icons"></i><span
                                    class="name">social-stumbleupon</span>
                            <code class="code-preview">.icon-social-stumbleupon</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-social-youtube icons"></i><span class="name">social-youtube</span> <code
                                    class="code-preview">.icon-social-youtube</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-social-dropbox icons"></i><span class="name">social-dropbox</span> <code
                                    class="code-preview">.icon-social-dropbox</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-social-vkontakte icons"></i><span class="name">social-vkontakte</span>
                            <code
                                    class="code-preview">.icon-social-vkontakte</code></a>
                    </div>
                </div>
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        <a href="#" class="show-code" title="click to show css class name"><i
                                    class="icon-social-steam icons"></i><span class="name">social-steam</span> <code
                                    class="code-preview">.icon-social-steam</code></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
