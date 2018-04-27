@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row">

            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">Hi {{ Auth::user()->name }}, You are logged in!</div>
                    <div class="panel-body">
                            <div class="input-group">
                                <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here...">
                                <span class="input-group-btn">
                                    <button class="btn btn-warning btn-sm" id="btn-chat">
                                        Send
                                    </button>
                                </span>
                            </div>
                    </div>
                </div>
            
                <div class="panel panel-default">
                    <div class="panel-heading">Things you might have missed...</div>
                    <div class="panel-body">
                            <div class="media">
                                    <div class="media-body">
                                        <iframe width="100%" height="350" src="https://www.youtube.com/embed/sUakwV6Yt-g" frameborder="0" allowfullscreen>
                                        </iframe>
                                    </div>
                            </div>
                    </div>
                </div>
            
                <div class="panel panel-default">
                    <div class="panel-heading">Your cart...<i class="fa fa-user-circle-o"></i></div>
                    <div class="panel-body">
                        <a href="#" class="btn btn-xs btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="'test'"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-4x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="medium">36</div>
                                    <div>Sold!!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left small">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-camera-retro fa-4x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="meduym">13</div>
                                    <div>New!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left small">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-4x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="medium">12</div>
                                    <div>Online!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left small">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="panel panel-default">
      
                        <div class="panel-heading">
                            <h3 class="panel-title">What you looking for....</h3>
    
                        </div>
        
                        <div class="panel-body">
                            
                        <!-- /.panel -->
                                  
                    <ul class="timeline">
                        <li class="timeline-inverted">
                            <div class="timeline-badge info"><i class="fa fa-save"></i>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Audio free...</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Stella sing song</p>
                                </div>
                                <hr>
                                <div class="btn-group">                                        
                                        <?php
                                        $dirname = 'audio/';
                                       $file = (isset($_GET['file']) == true ? ($file = $_GET['file']) : 'Snow_White.mp3');

                                        echo '<object type="application/x-shockwave-flash" data="dewplayer.swf" width="200" height="20" id="dewplayer" name="dewplayer">
                                        <param name="movie" value="dewplayer.swf" />
                                        <param name="flashvars" value="mp3='.$dirname.$file.'" />
                                        <param name="wmode" value="transparent" />
                                        </object>';

                                       ?>

                                    </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-badge info"><i class="fa fa-save"></i>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Frog is a prince..</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Listen ... The frog prince</p>
                                    <hr>
                                    <div class="btn-group">                                        
                                        <?php
                                        $dirname = 'audio/';
                                       $file = (isset($_GET['file']) == true ? ($file = $_GET['file']) : 'FrogPrince.mp3');

                                        echo '<object type="application/x-shockwave-flash" data="dewplayer.swf" width="200" height="20" id="dewplayer" name="dewplayer">
                                        <param name="movie" value="dewplayer.swf" />
                                        <param name="flashvars" value="mp3='.$dirname.$file.'" />
                                        <param name="wmode" value="transparent" />
                                        </object>';

                                       ?>

                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-badge info"><i class="fa fa-save"></i>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Audio free...</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Brian sing song</p>
                                    <hr>
                                    <div class="btn-group">                                        
                                        <?php
                                        $dirname = 'audio/';
                                       $file = '';//(isset($_GET['file']) == true ? ($file = $_GET['file']) : 'FrogPrince.mp3');

                                        echo '<object type="application/x-shockwave-flash" data="dewplayer.swf" width="200" height="20" id="dewplayer" name="dewplayer">
                                        <param name="movie" value="dewplayer.swf" />
                                        <param name="flashvars" value="mp3='.$dirname.$file.'" />
                                        <param name="wmode" value="transparent" />
                                        </object>';

                                       ?>

                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-badge info"><i class="fa fa-save"></i>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">What to do next?</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>test again</p>
                                    <hr>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-gear"></i>  <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Action</a>
                                            </li>
                                            <li><a href="#">Another action</a>
                                            </li>
                                            <li><a href="#">Something else here</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-badge success"><i class="fa fa-graduation-cap"></i>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Is this work?</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>test playing</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                        
                        <!-- /.panel-body -->
                   
                    <!-- /.panel -->
                    </div>
                    </div>
                </div>

        </div>
    </div>


@endsection
