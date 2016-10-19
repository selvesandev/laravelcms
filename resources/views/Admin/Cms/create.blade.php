@extends('Admin.Layouts.master')

@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">

            @include('Admin.Common.dashboard_title')

            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <form data-parsley-validate action="{{route('cms-create')}}" id="createPageForm" method="post" class="form-horizontal form-label-left">
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

                                @include('Admin.Common.validation')
                                <div class="form-group">
                                    <label for="belonging" class="control-label col-xs-3">Sub Page of </label>
                                    <div class="col-sm-6">
                                        <select name="parent_id" id="" class="select2_single form-control">
                                            <option value="-1">None</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="title" class="control-label col-xs-3">Title <span
                                                class="required">*</span></label>
                                    <div class="col-sm-6">
                                        <input data-parsley-minlength="6" required id="title" type="text" name="title"
                                               class="form-control col-md-7">
                                    </div>
                                </div>

                                {{csrf_field()}}

                                <div class="form-group">
                                    <label for="h1title" class="control-label col-xs-3">H1 Title <span class="">*</span></label>
                                    <div class="col-sm-6">
                                        <input data-parsley-minlength="6" required id="h1title" type="text" name="h1title"
                                               class="form-control col-md-7">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="menutitle" class="control-label col-xs-3">Menu Title <span
                                                class="">*</span></label>
                                    <div class="col-sm-6">
                                        <input data-parsley-minlength="6" required type="text" id="menutitle" name="menutitle" class="form-control col-md-7">
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
                                        <div id="gender" class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="status" value="1"> Post &nbsp;
                                            </label>
                                            <label class="btn btn-primary active" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" checked name="status" value="0"> Draft
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="tag_keywords" class="control-label col-xs-3">Meta Keywords </label>
                                    <div class="col-sm-6">
                                        <input required data-role="tagsinput" name="tag_keywords" id="tag_keywords" type="text" class="form-control col-md-7">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="desc" class="control-label col-xs-3">Meta Desriptions </label>
                                    <div class="col-sm-6">
                                        <textarea required name="desc" class="form-control" id="desc" cols="30" rows="5">{{old('desc')}}</textarea>
                                    </div>
                                </div>

                            </div>
                            <!-- end Page Content-->
                        </div>


                        <div class="x_panel">
                            <div class="x_content">
                                <div class="form-group">
                                <textarea class="form-control" name="tinyContent" id="tinyContent" cols="30" rows="10">
                                </textarea>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-success"><i class="fa fa-pulse"></i> Create
                                        Page
                                    </button>
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