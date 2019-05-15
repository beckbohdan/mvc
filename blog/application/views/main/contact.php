<header class="masthead" style="background-image: url('/public/images/contact-bg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="page-heading">
                    <h1>Ask me</h1>
                    <span class="subheading">and take your answers</span>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <form action="/contact" method="post">
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <p><input type="text" class="form-control" name="name" placeholder="Name"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <p><input type="text" class="form-control" name="email" placeholder="E-mail"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <p><textarea rows="5" class="form-control" name="text" placeholder="Message"></textarea></p>
                    </div>
                </div>
                <br>
                <div id="success"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-secondary" id="sendMessageButton">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>