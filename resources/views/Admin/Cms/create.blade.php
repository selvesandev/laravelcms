@extends('Admin.Layouts.master')

@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Welcome to the dashboard</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <form action="" class="form-horizontal form-label-left">
                        <div class="x_panel">

                            <!--page title-->
                            <div class="x_title">
                                <h2>Create Page</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <!--end of page title-->

                            <!--Page Content-->
                            <div class="x_content">
                                <div class="form-group">
                                    <label for="title" class="control-label col-xs-3">Title <span
                                                class="required">*</span></label>
                                    <div class="col-sm-6">
                                        <input id="title" type="text" name="title" required
                                               class="form-control col-md-7">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="h1title" class="control-label col-xs-3">H1 Title <span class="required">*</span></label>
                                    <div class="col-sm-6">
                                        <input id="h1title" type="text" name="h1title" required
                                               class="form-control col-md-7">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="menutitle" class="control-label col-xs-3">Menu Title <span
                                                class="required">*</span></label>
                                    <div class="col-sm-6">
                                        <input type="text" id="menutitle" name="menu_title" required
                                               class="form-control col-md-7">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="upload" class="control-label col-xs-3">Media </label>
                                    <div class="col-sm-6">
                                        <input type="file" id="upload" name="upload" class="form-control col-md-7">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="upload" class="control-label col-xs-3">Page Status </label>
                                    <div class="col-sm-6">
                                        <input type="file" id="upload" name="upload" class="form-control col-md-7">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="upload" class="control-label col-xs-3">Meta Keywords </label>
                                    <div class="col-sm-6">
                                        <input data-role="tagsinput" id="tag_keyworkds" type="text" class="form-control col-md-7">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="upload" class="control-label col-xs-3">Meta Desriptions </label>
                                    <div class="col-sm-6">
                                        <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
                                    </div>
                                </div>

                            </div>
                            <!-- end Page Content-->
                        </div>


                        <div class="x_panel">
                            <div class="x_content">
                                <div class="form-group">
                                <textarea class="form-control" name="" id="tinyContent" cols="30" rows="10">
                                </textarea>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-success"><i class="fa fa-pulse"></i> Create Page</button>
                                </div>
                            </div>
                        </div>

                    </form>


                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->

    <script type="text/javascript">
        tinymce.init({
            selector: '#tinyContent'
        });

    </script>

@endsection