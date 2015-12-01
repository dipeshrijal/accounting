<!DOCTYPE html>
<html>
    <head>
        <title>Black Pearl Responsive Admin Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Black Pearl Responsive Admin Template">
        <meta name="keywords" content="Black Pearl, Admin, Template, Bootstrap">
        <meta charset="UTF-8">

        <!-- CSS -->
        {!!HTML::style('assets/admin/css/bootstrap.min.css')!!}

        {!!HTML::style('assets/admin/css/style.min.css')!!}
    </head>

    <body>

        <div class="lbox-horz"></div>
        <div class="lbox-vert">
            <a href="login.html" class="icon-info ttips forgot-password" title="Problem&nbsp;Login?"></a>
        </div>

        <div class="login-box side-form">
            <form class="form-validation" action="{{url('admin/dashboard')}}">
                <div class="form-group">
                    <input type="text" class="input-sm form-control" placeholder="Email Address">
                </div>
                <div class="form-group">
                    <input type="password" class="input-sm form-control" placeholder="Password">
                </div>
                <input type="submit" class="btn btn-gr-gray btn-block btn-xs" value="VERIFY & lOGIN">
            </form>
        </div>


    </body>
</html>

