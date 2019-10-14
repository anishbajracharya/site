<section class="audit-form-section" style="background-image:url(images/pattern-1.png)">
        <div class="auto-container">
            <h5>Check Your Website’s SEO Score <span class="theme_color1">For Free</span>!</h5>
            <!--Audit Form-->
            <div class="audit-form">
                <form method="POST" action="/sendemail">
                          {{ csrf_field() }}
                    <div class="row clearfix">
                        <div class="column col-md-10 col-sm-12 col-xs-12">
                            <div class="row clearfix">
                                <div class="form-group col-md-4 col-sm-4 co-xs-12">
                                    <input type="text" name="text" value="" placeholder="Enter your website here" required>
                                </div>
                                <div class="form-group col-md-4 col-sm-4 co-xs-12">
                                    <input type="email" name="email" value="" placeholder="Enter your Email address" required>
                                </div>
                                <div class="form-group col-md-4 col-sm-4 co-xs-12">
                                    <input class="tel1" pattern="^[0-9]{10}$" type="tel" name="phone_number" value="" placeholder="Enter your Mobile Number" required>
                                </div>
                            </div>
                        </div>
                        <div class="column col-md-2 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <button type="submit" class="theme-btn btn-style-one">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
 </section>
